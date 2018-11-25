<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kotama extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');

    }
    function dashboard(){
        if(_is_user_login($this)){
            $this->load->model('kotama_model');
            $this->load->model("personel_model");
            $this->load->model('datanilai_model');
            $this->load->model('seldik_model');
            $this->load->model('satker_model');
            $user_id = _get_current_user_id($this);   
            //print_r($user_id);die();        
            $data = array();
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            //print_r($data['kotama']);
            $data['seldik']= @$this->seldik_model->get_seldik()->result();
            $data['datanilai_kotama'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kotama($data['kotama']->nama_kotama);
            $data["datapersonel_kotama"] = @$this->personel_model->get_personel_by_kotama($data['kotama']->nama_kotama);
            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["satker"]       = @$this->satker_model->get_satker_by_kotama($data['kotama']->nama_kotama);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $data["lulus_diktukba"] = @$this->seldik_model->get_lulus_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diktukpa"] = @$this->seldik_model->get_lulus_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["lulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datams"] = @$this->seldik_model->get_ms_by_kotama_this_year($data['kotama']->nama_kotama);
            $data["datatms"] = @$this->seldik_model->get_tms_by_kotama_this_year($data['kotama']->nama_kotama);
          // print_r(count($data["datadiklapa1"]));


            $data['count_datanilai_kotama'] = count($data["datanilai_kotama"]);
            $data['count_datapersonel_kotama'] = count($data["datapersonel_kotama"]);
            $data['count_datadiktukba'] = count($data["datadiktukba"]);
            $data['count_datadiktukpa'] = count($data["datadiktukpa"]);
            $data['count_datadiklapa1'] = count($data["datadiklapa1"]);
            $data['count_datadiklapa2'] = count($data["datadiklapa2"]);


             $data['count_lulus_diktukba'] = count($data["lulus_diktukba"]);
             $data['count_lulus_diktukpa'] = count($data["lulus_diktukpa"]);
             $data['count_lulus_diklapa1'] = count($data["lulus_diklapa1"]);
             $data['count_lulus_diklapa2'] = count($data["lulus_diklapa2"]);
             $data['count_datams'] = count($data["datams"]);
             $data['count_datatms'] = count($data["datatms"]);
            //print_r($data['count_datapersonel_kotama']);die();
           
            $this->load->view("kotama/dashboard",$data);
        }
    }

    function nilai_satker($kesatuan){
         if(_is_user_login($this)){
            $data = array();
            $this->load->model('kotama_model');
            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model"); 
            $this->load->model('satker_model');

            $user_id = _get_current_user_id($this); 
            $data['kesatuan'] = urldecode($kesatuan);
            $data['kotama']=@$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $data['datanilai_satker'] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan(urldecode($kesatuan));
            $data["datapersonel_satker"] = @$this->personel_model->get_personel_by_satker(urldecode($kesatuan)); 

            $data["datadiktukba"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year(urldecode($kesatuan));
            //print_r(urldecode($kesatuan).'<->'.$data["datadiktukba"]);die();
            $data["datadiktukpa"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year(urldecode($kesatuan));
            $data["datadiklapa1"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year(urldecode($kesatuan));
            $data["datadiklapa2"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year(urldecode($kesatuan));


            $data["datalulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_lulus(urldecode($kesatuan));
            $data["datatdklulus"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan_and_tdklulus(urldecode($kesatuan));


            $data["datalulus_diktuba"] = @$this->seldik_model->get_lulus_diktukba_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diktupa"] = @$this->seldik_model->get_lulus_diktukpa_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diklapa1"] = @$this->seldik_model->get_lulus_diklapasatu_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datalulus_diklapa2"] = @$this->seldik_model->get_lulus_diklapadua_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datams"] = @$this->seldik_model->get_ms_by_kesatuan_this_year(urldecode($kesatuan));
            $data["datatms"] = @$this->seldik_model->get_tms_by_kesatuan_this_year(urldecode($kesatuan));


            
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


            $this->load->view("kotama/nilai_satker",$data);
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
               
                $this->load->view("kotama/change_password",$data);

        }
    }


    function diktukba_kotama(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("kotama_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          

            $user_id = _get_current_user_id($this);



            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            //print_r($data['kotama']);die();

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukba_by_kotama_this_year($data['kotama']->nama_kotama);


            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $this->load->view("kotama/data",$data);

            }

        }   
          function diktukpa_kotama(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("kotama_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          

            $user_id = _get_current_user_id($this);



            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            //print_r($data['kotama']);die();

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukpa_by_kotama_this_year($data['kotama']->nama_kotama);


            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $this->load->view("kotama/data",$data);

            }

        }   

         function diklapasatu_kotama(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("kotama_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          

            $user_id = _get_current_user_id($this);



            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            //print_r($data['kotama']);die();

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapasatu_by_kotama_this_year($data['kotama']->nama_kotama);


            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $this->load->view("kotama/data",$data);

            }

        }

         function diklapadua_kotama(){
        if(_is_user_login($this)){
            $data = array();

            $this->load->model("kotama_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          

            $user_id = _get_current_user_id($this);



            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            //print_r($data['kotama']);die();

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapadua_by_kotama_this_year($data['kotama']->nama_kotama);


            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $this->load->view("kotama/data",$data);

            }

        }

    function diktukba_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model"); 

         
           
            $id_user = _get_current_user_id($this);

            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukba_by_satker_this_year($kesatuan);

            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data",$data);

            }

        }

        function diktukpa_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diktukpa_by_satker_this_year($kesatuan);

            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data",$data);

            }

        }

         function diklapa1_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapasatu_by_satker_this_year($kesatuan);


            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data",$data);

            }

        }

    function diklapa2_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->seldik_model->get_personel_diklapadua_by_satker_this_year($kesatuan);

            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data",$data);

            }

        }

    function datapersonel_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);
            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->personel_model->get_personel_by_satker($kesatuan);

            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data_personel_satker",$data);

            }

        }

        function datanilai_satker($kesatuan){
        if(_is_user_login($this)){
            $data = array();
            $kesatuan = urldecode($kesatuan);

            $this->load->model("personel_model");
            $this->load->model("datanilai_model");  
            $this->load->model("seldik_model");          
           
            $id_user = _get_current_user_id($this);


            $data['datapersonel'] = @$this->personel_model->get_personel_by_id_user($id_user);

            $data["data_selidik"] = @$this->datanilai_model->get_datanilai_filter_by_flag_del_and_kesatuan($kesatuan);

            $this->load->model('satker_model');
            $this->load->model('kotama_model');
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);

            $this->load->view("kotama/data_peserta_seldik_satker",$data);

            }

        }


        function data_personel(){
            if(_is_user_login($this)){
            $data = array();
            //$this->load->model("datanilai_model");
            $this->load->model("personel_model");
            $this->load->model('satker_model');
            $this->load->model("kotama_model");
            $user_id = _get_current_user_id($this);
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);

            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $data["users"] = $this->personel_model->get_personel_filter_by_flag_del();
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("kotama/data_personel",$data);
        }
        }


        function pers_seldik(){
            if(_is_user_login($this)){
            $data = array();
          
            $this->load->model("datanilai_model");
            //$this->load->model("personel_model");
            $this->load->model("kotama_model");
            $user_id = _get_current_user_id($this);
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);

            $data["users"] = $this->datanilai_model->get_datanilai_filter_by_flag_del();
            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
          
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("kotama/tabel_nilai",$data);
        }
        }

        function cek($id){
             $this->load->model("datanilai_model");
             $cek = $this->datanilai_model->cek_nilai_by_id($id)->num_rows();
             return $cek;
        }

        function tidak_ikut_seldik(){
            if(_is_user_login($this)){
            
            $data = array();
            $this->load->model("personel_model");
            $this->load->model('satker_model');
            $this->load->model("kotama_model");
            $this->load->model("datanilai_model");
            $user_id = _get_current_user_id($this);
            $data['kotama']= @$this->kotama_model->get_kotama_by_id_user($user_id);
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $data['users'] = $this->personel_model->get_personel_filter_by_flag_del();
           //print_r($data['users']);
            foreach($data['users'] as $users){
                //$where = array('id_data_personil'=>$users->id);
                $cek = $this->cek($users->id);
                if(!$cek){
                   
                    $data['tidak_ikut'] = $this->datanilai_model->get_data_pers_tidak_seldik_filter_by_flag_del($users->id);
                    //print_r($data['tidak_ikut']);
                }
               
                // if($cek){
                //     
                //     print_r($tidak_ikut);
                // }
            } 
          
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("kotama/tabel_tidak_seldik",$data);
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
            //print_r($data['nilai_total']);
            @$nilai_b = ($nilai_total['pull_up']->nilai_pull_up + $nilai_total['sit_up']->nilai_sit_up + $nilai_total['push_up']->nilai_push_up+$nilai_total['shuttle_run']->nilai_shuttle_run) / 4;
            //print_r($nilai_total['sit_up']->nilai_sit_up);die();
            $nilai_renang = $nilai_total['renang']->nilai_renang;
            //print_r($nilai_renang);
            $data['nilai_b'] = round($nilai_b,2);
            $nilai_ab = ($nilai_b + $nilai_total['lari']->nilai_lari) / 2;
            $data['nilai_ab']= round($nilai_ab,2);
            //print_r($nilai_ab);die();
            $data["nilai"] = $nilai;
            //print_r($nilai);
            @$penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur,$nilai_total['lari']->nilai_lari,$nilai_total['pull_up']->nilai_pull_up,$nilai_total['sit_up']->nilai_sit_up,$nilai_total['push_up']->nilai_push_up,$nilai_total['shuttle_run']->nilai_shuttle_run);
             //print_r($penilaian);
            // print_r($kategori.'<br>'.$nilai_ab.'<br>'.$nilai_total);die();
            $data['jumlah_nilai'] = round($nilai[0]->nilai,2);
            $data['keterangan'] = $penilaian['keterangan'];
            $data['status'] = $penilaian['status'];


            $this->load->model('satker_model');
            $data["satuan"]       = @$this->satker_model->get_all_satker_by_kotama($data['kotama']->nama_kotama);
            $this->load->view("kotama/nilai",$data);
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