<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satker extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }
    function dashboard(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);
            $data['datanilai_satker'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan($data['datapersonel']->kesatuan);
            $data["datapersonel_satker"] = @$this->personel_model->get_personel_by_satker($data['datapersonel']->kesatuan);

            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year($data['datapersonel']->kesatuan);
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year($data['datapersonel']->kesatuan);


            $data["datalulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus($data['datapersonel']->kesatuan);
            $data["datatdklulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus($data['datapersonel']->kesatuan);


            $data["datalulus_diktuba"] = @$this->seldik_model->get_lulus_diktukba_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diktupa"] = @$this->seldik_model->get_lulus_diktukpa_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datalulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datams"] = @$this->seldik_model->get_ms_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datatms"] = @$this->seldik_model->get_tms_by_kesatuan_this_year($data['datapersonel']->kesatuan);


            
            $data['count_datams'] = count($data["datams"]);
            $data['count_datatms'] = count($data["datatms"]);


            $data['count_datalulus_diktuba'] = count($data["datalulus_diktuba"]);
            $data['count_datalulus_diktupa'] = count($data["datalulus_diktupa"]);
            $data['count_datalulus_diklapa1'] = count($data["datalulus_diklapa1"]);
            $data['count_datalulus_diklapa2'] = count($data["datalulus_diklapa2"]);

            $data['count_datalulus'] = count($data["datalulus"]);
            $data['count_datatdklulus'] = count($data["datatdklulus"]);
            $data['count_datadiktukba'] = count($data["datadiktukba"]);
            $data['count_datadiktukpa'] = count($data["datadiktukpa"]);
            $data['count_datadiklapa1'] = count($data["datadiklapa1"]);
            $data['count_datadiklapa2'] = count($data["datadiklapa2"]);
            $data['count_datapersonel_satker'] = count($data["datapersonel_satker"]);
            $data['count_datanilai_satker'] = count($data["datanilai_satker"]);


            $this->load->view("satker/dashboard",$data);
        }
    }

    function change_password(){
        if(_is_frontend_user_login($this)){
            $this->load->model("users_model");
                $user_data  = $this->users_model->get_user_by_id(_get_current_user_id($this));
                $data["user_data"] = $user_data;

            if($_POST){
                
                $this->load->model("users_model");
           
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('c_password', 'Current Password', 'trim|required');
                $this->form_validation->set_rules('n_password', 'New Password', 'trim|required');
                $this->form_validation->set_rules('r_password', 'Re Password', 'trim|required');
                
                if ($this->form_validation->run() == FALSE) {
                   
                    $error_array = $this->form_validation->error_string();
                    $error_json = json_encode(strip_tags($error_array));
                    $error_clean = str_replace(['"', '"'], '', $error_json);
                    $data["error"] =  "<script type='text/javascript'>
                                                    var teks = ' ".$error_clean."';
                                                    swal({   
                                                            title: '',   
                                                            text: teks,   
                                                            type: 'warning',   
                                                            showCancelButton: false,   
                                                            confirmButtonColor: '#DD6B55',   
                                                            confirmButtonText: 'OK', 
                                                            closeOnConfirm: false 
                                                        });
                                            </script>";
                }else {
                   
                    if($user_data->user_password == md5($this->input->post("c_password"))){
                     
                        $n_password = $this->input->post("n_password");
                        $r_password = $this->input->post("r_password");

                       
                        
                        if($n_password == $r_password){
                            $this->load->model("common_model");
                            $resid = $this->common_model->data_update("users",
                                array("user_password"=>md5($n_password)),array("user_id"=>_get_current_user_id($this)));
                           
                            echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/users/change_password";</script>
                                ';
                            $data["error"] = "<script type='text/javascript'>
                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
                                            </script>";
                        }
                        
                    }else{
                        $data["error"] = "<script type='text/javascript'>
                                                    swal({   
                                                            title: '',   
                                                            text: 'Password tidak cocok',   
                                                            type: 'warning',   
                                                            showCancelButton: false,   
                                                            confirmButtonColor: '#DD6B55',   
                                                            confirmButtonText: 'OK', 
                                                            closeOnConfirm: false 
                                                    });
                                         </script>";

                    }         
                        
                }
            }    
               
                $this->load->view("satker/change_password",$data);

        }
    }   
 

    function diktukba_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year($data['datapersonel']->kesatuan);



            $this->load->view("satker/data",$data);

            }

        }


        function diktukpa_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year($data['datapersonel']->kesatuan);



            $this->load->view("satker/data",$data);

            }

        }

        function diklapa1_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year($data['datapersonel']->kesatuan);


            $this->load->view("satker/data",$data);

            }

        }


        function diklapa2_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year($data['datapersonel']->kesatuan);


            $this->load->view("satker/data",$data);

            }

        }

        function datanilai_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan($data['datapersonel']->kesatuan);



            $this->load->view("satker/data_personel",$data);

            }

        }



        function datapersonel_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->personel_model->get_personel_by_satker($data['datapersonel']->kesatuan);



            $this->load->view("satker/data_personel_all",$data);

            }

        }


        function datapersoneltidakikut_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_a"] = @$this->personel_model->get_personel_id_by_satker($data['datapersonel']->kesatuan);

            $data["data_b"] = @$this->personel_model->get_personel_id_datanilai_filter_by_flag_del_and_kesatuan($data['datapersonel']->kesatuan);


            $t = $data["data_a"];
             $u = $data["data_b"];


            $result=array_diff($t,$u);


            var_dump($result);


            print "<pre>";
            print_r($data["data_a"]);
            print "</pre>";

                        print "<pre>";
            print_r($data["data_b"]);
            print "</pre>";


            die();



            $this->load->view("satker/data_personel_all",$data);

            }

        }




        function datapersonel_lulus_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus($data['datapersonel']->kesatuan);


            $this->load->view("satker/data",$data);

            }

        }


        function datapersonel_tdklulus_satker(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus($data['datapersonel']->kesatuan);


            $this->load->view("satker/data",$data);

            }

        }



        function ms(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_ms_by_kesatuan_this_year($data['datapersonel']->kesatuan);
            $data["datatms"] = @$this->seldik_model->get_tms_by_kesatuan_this_year($data['datapersonel']->kesatuan);


            $this->load->view("satker/mstms",$data);

            }

        }


        function tms(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);
            $data["data_selidik"] = @$this->seldik_model->get_tms_by_kesatuan_this_year($data['datapersonel']->kesatuan);


            $this->load->view("satker/mstms",$data);

            }

        }



    public function tampil_nilai($user_id){
            $data = array();
            $this->load->model("datanilai_model");

            $nilai = $this->datanilai_model->get_datanilai_by_id($user_id);
             //print("<pre>".print_r($nilai,true)."</pre>");die();
            //$bmi = round( $this->get_bmi($nilai[0]->tinggi_badan,$nilai[0]->berat_badan),2);
            //print_r($bmi);die();
            $bmi = $nilai[0]->nilai_bmi;
            $kelas_postur = $nilai[0]->kelas;
            $nilai_postur = $nilai[0]->nilai_postur;
            $kategori = $nilai[0]->kategori;
            $data['bmi'] = $bmi;
            $data['kelas_postur'] = $kelas_postur;
            $data['nilai_postur'] = $nilai_postur;           
            $data['kategori'] = $kategori;

            $kelompok_umur = $nilai[0]->kelompok_umur;
            //print_r($kelompok_umur);die();
            $jenis_kelamin = $nilai[0]->jenis_kelamin;
            $pull_up = $nilai[0]->pull_up;
            $sit_up = $nilai[0]->sit_up;
            $push_up = $nilai[0]->push_up;
            $lari = $nilai[0]->lari;
            $shuttle_run = $nilai[0]->shuttle_run;
            $renang = $nilai[0]->renang;
            //print_r($renang);die();
            $push_up = $nilai[0]->push_up;
            $shuttle_run = $nilai[0]->shuttle_run;
            //$cek_nilai = $this->cek_nilai_max($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run);
            $nilai_total = $this->get_nilai_b($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run,$renang);
            $data['nilai_total'] = $nilai_total;
            //print_r($data['nilai_total']);die();
            @$nilai_b = ($nilai_total['pull_up']->nilai_pull_up + $nilai_total['sit_up']->nilai_sit_up + $nilai_total['push_up']->nilai_push_up+$nilai_total['shuttle_run']->nilai_shuttle_run) / 4;
            //print_r($nilai_total['sit_up']->nilai_sit_up);die();
            $nilai_renang = $nilai_total['renang']->nilai_renang;
            //print_r($nilai_renang);
            $data['nilai_b'] = round($nilai_b,2);
            $nilai_ab = ($nilai_b + $nilai_total['lari']->nilai_lari) / 2;
            $data['nilai_ab']= round($nilai_ab,2);
            //print_r($nilai_ab);die();
            $data["nilai"] = $nilai;
            
            @$penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur,$nilai_total['lari']->nilai_lari,$nilai_total['pull_up']->nilai_pull_up,$nilai_total['sit_up']->nilai_sit_up,$nilai_total['push_up']->nilai_push_up,$nilai_total['shuttle_run']->nilai_shuttle_run);
            // print_r($penilaian);die();
            // print_r($kategori.'<br>'.$nilai_ab.'<br>'.$nilai_total);die();
            $data['jumlah_nilai'] = round($nilai[0]->nilai,2);
            $data['keterangan'] = $penilaian['keterangan'];
            $data['status'] = $penilaian['status'];


         
            $this->load->view("satker/nilai",$data);
    }

    function nilai_total($kategori,$nilai_garjas,$nilai_renang,$nilai_postur,$pull_up,$sit_up,$push_up,$lari,$shuttle_run){
        $penilaian = array();
        if($kategori=="Memenuhi Sarat"){
            $penilaian['nilai_total'] = (($nilai_garjas * 90) / 100) + (($nilai_renang * 10) / 100);

        } else {
             $penilaian['nilai_total'] = (($nilai_garjas * 80) / 100) + (($nilai_renang * 10) / 100) + (($nilai_postur * 10) / 100);
        }

          if($penilaian['nilai_total']>70 && $nilai_garjas > 70 && $lari>40 && $pull_up>40 && $sit_up > 40 && $push_up > 40 && $shuttle_run > 40){
                $penilaian['keterangan'] = "Lulus";
            } else  {
                $penilaian['keterangan'] = "Tidak Lulus";
            }

            if($penilaian['nilai_total']>=81 && $penilaian['nilai_total']<=100 ){
                $penilaian['status']="Baik Sekali";
            } else if ($penilaian['nilai_total']>=61 && $penilaian['nilai_total']<81){
                 $penilaian['status']="Baik";
            } else if ($penilaian['nilai_total']>=41 && $penilaian['nilai_total']<61){
                 $penilaian['status']="Cukup";
            } else if ($penilaian['nilai_total']>=21 && $penilaian['nilai_total']<41){
                 $penilaian['status']="Kurang";
            } else {
                 $penilaian['status']="Kurang Sekali";
            }

        return $penilaian;
    }

    function kelas_postur($bmi){
        $postur = array();
        if($bmi>=22.5 && $bmi<23.6){
            $postur['kelas'] = "Ideal Bawah";
            $postur['nilai'] = 81;
        } else if($bmi>=23.6 && $bmi<25.4){
            $postur['kelas'] = "Ideal Atas";
             $postur['nilai'] = 91;
        } else if($bmi>=25.4 && $bmi<26.6){
            $postur['kelas'] = "Harmonis Atas";
             $postur['nilai'] = 71;
        } else if($bmi>=26.6 && $bmi<27.7){
            $postur['kelas'] = "Normal Atas";
             $postur['nilai'] = 51;
        } else if($bmi>=27.7 && $bmi<28.3){
            $postur['kelas'] = "Limit Atas";
             $postur['nilai'] = 31;
        }
        else if($bmi>=28.3){
            $postur['kelas'] = "Luar Limit Atas";
             $postur['nilai'] = 11;
        } else if($bmi>=21.2 && $bmi < 22.5){
             $postur['kelas'] = "Harmonis Bawah";
              $postur['nilai'] = 61;
        }  else if($bmi>=20.4 && $bmi < 21.2){
             $postur['kelas'] = "Normal Bawah";
              $postur['nilai'] = 41;
        }  else if($bmi>=19.6 && $bmi < 20.4){
             $postur['kelas'] = "Limit Bawah";
              $postur['nilai'] = 21;
        }  else if($bmi<19.6){
             $postur['kelas'] = "Luar Limit Bawah";
              $postur['nilai'] = 1;
        }
        return $postur;
    }

    function get_nilai_b($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run,$renang){
        $nilai = array();
         $this->load->model("datanilai_model");
         if($jenis_kelamin=="Pria"){
            $tabel = "nilai_b_pria";
            $tabel_lari = "lari_pria";
            $tabel_renang = "ren_mil_das_pria";
         } else { 
            $tabel ="nilai_b_wanita";  
            $tabel_lari = "lari_wanita"; 
            $tabel_renang = "ren_mil_das_wan";}

         $nilai["pull_up"] = $this->datanilai_model->get_nilai_pull_up_by_id($tabel,$kelompok_umur,$pull_up);
         $nilai["sit_up"] = $this->datanilai_model->get_nilai_sit_up_by_id($tabel,$kelompok_umur,$sit_up);
         $nilai["push_up"] = $this->datanilai_model->get_nilai_push_up_by_id($tabel,$kelompok_umur,$push_up);
         $nilai["lari"] = $this->datanilai_model->get_nilai_lari_by_id($tabel_lari,$kelompok_umur,$lari);
         $nilai["shuttle_run"] = $this->datanilai_model->get_nilai_shuttle_run_by_id($tabel,$kelompok_umur,$shuttle_run);
         $nilai["renang"] = $this->datanilai_model->get_nilai_renang_by_id($tabel_renang,$kelompok_umur,$renang);
         return $nilai;
    }


    function get_bmi($tinggi,$berat){
        $bmi = $berat / (($tinggi/100)*($tinggi/100));
        return $bmi;
    }
    

	
}
?>