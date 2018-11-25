<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datanilai extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
                date_default_timezone_set("Asia/Bangkok");
    }
	public function index()
	{
		if(_is_user_login($this)){
            $data = array();
            //$this->load->model("datanilai_model");
            $this->load->model("personel_model");

            $data["users"] = $this->personel_model->get_personel_filter_by_flag_del();
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("datanilai/index",$data);
        }
    }

    public function tabel_nilai()
    {
        if(_is_user_login($this)){
            $data = array();
            $this->load->model("datanilai_model");
            //$this->load->model("personel_model");

            $data["users"] = $this->datanilai_model->get_datanilai_filter_by_flag_del();
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("datanilai/tabel_nilai",$data);
        }
    }


    public function add_nilai($user_id){
        if(_is_user_login($this)){
            $data = array();
            $this->load->model("personel_model");
            $this->load->model("users_model");
            $this->load->model("seldik_model");            
            $data['seldik'] = $this->seldik_model->get_seldik();
            $data["user_types"] = $this->users_model->get_user_type();
            $user = $this->personel_model->get_personel_by_id($user_id);
            $data["user"] = $user;
            $tgl_lahir = $user->tanggal_lahir;
            $kelompok_umur = $this->kelompok_umur_by_usia($tgl_lahir);
            $data["kelompok_umur"] = $kelompok_umur;
            //print_r($this->kelompok_umur_by_usia($tgl_lahir));die();
            //print_r($user->tanggal_lahir);die();
            if($_POST){
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('kelompok_umur', 'Kelompok Umur', 'trim|required');
                $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'trim|required');
                $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'trim|required');
                $this->form_validation->set_rules('waktu_lari', 'Lari', 'trim|required');
                $this->form_validation->set_rules('pull_up', 'Pull Up', 'trim|required');
                $this->form_validation->set_rules('sit_up', 'Sit Up', 'trim|required');
                $this->form_validation->set_rules('push_up', 'Push Up', 'trim|required');
                $this->form_validation->set_rules('waktu_renang', 'Waktu Renang', 'trim|required');                
                if ($this->form_validation->run() == FALSE) 
        		{
        		  
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
                    
        		}else
                {
                        $this->load->model("datanilai_model");
                        $tinggi_badan = $this->input->post("tinggi_badan");
                        $pok_umur = $this->input->post("kelompok_umur");
                        $jenis_kelamin = $this->input->post("jenis_kelamin");
                        $berat_badan = $this->input->post("berat_badan");
                        $nama_seldik = $this->input->post("seldik");
                        $waktu_lari = "00:".$this->input->post("waktu_lari");
                        $pull_up = $this->input->post("pull_up");
                        $sit_up = $this->input->post("sit_up");
                        $push_up = $this->input->post("push_up");
                        $suttle_run = $this->input->post("suttle_run");
                        $waktu_renang = "00:".$this->input->post("waktu_renang");
                        $tgl_pelaksanaan = $this->input->post("tgl_pelaksanaan");

                        $nilai = $this->datanilai_model->get_datanilai_by_id($user_id);
                         //print("<pre>".print_r($nilai,true)."</pre>");die();
                        $bmi = round( $this->get_bmi($tinggi_badan,$berat_badan),2);
                        //print_r($bmi);die();
                        $postur = $this->kelas_postur($bmi);
                        //print_r($postur);die();
                        $kelas_postur = $postur['kelas'];
                        //print_r($kelas_postur);die();
                        $nilai_postur = $postur['nilai'];
                        if($kelas_postur=="Luar Limit Atas" || $kelas_postur == "Limit Atas" || $kelas_postur == "Luar Limit Bawah" || $kelas_postur == "Limit Bawah"){
                            $kategori = "Tidak Memenuhi Sarat";
                        } else {
                            $kategori = "Memenuhi Sarat";
                        }
          

                        $nilai_garjas = $this->get_nilai_b($pok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$waktu_lari,$suttle_run,$waktu_renang);
                        $nilai_renang = $nilai_garjas['renang']->nilai_renang;
                        $nilai_b = ($nilai_garjas['pull_up']->nilai_pull_up + $nilai_garjas['sit_up']->nilai_sit_up + $nilai_garjas['push_up']->nilai_push_up+$nilai_garjas['shuttle_run']->nilai_shuttle_run) / 4;
                        $nilai_ab = ($nilai_b + $nilai_garjas['lari']->nilai_lari) / 2;

                        $penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur,$nilai_garjas['lari']->nilai_lari,$nilai_garjas['pull_up']->nilai_pull_up,$nilai_garjas['sit_up']->nilai_sit_up,$nilai_garjas['push_up']->nilai_push_up,$nilai_garjas['shuttle_run']->nilai_shuttle_run);
                        $keterangan = $penilaian['keterangan'];
                        $nilai_total = $penilaian['nilai_total'];
                       //print_r($nilai_total);die();
                       

                        $insert_array = array(
                                "id_data_personil"=>$user_id,
                                "kelompok_umur"=>$pok_umur,
                                "tinggi_badan"=>$tinggi_badan,
                                "berat_badan"=>$berat_badan,
                                "kelas"=>$kelas_postur,
                                "nilai_bmi"=>$bmi,
                                "nilai_postur"=>$nilai_postur,
                                "kategori"=>$kategori,
                                "lari"=>$waktu_lari,
                                "pull_up"=>$pull_up,
                                "sit_up"=>$sit_up,
                                "push_up"=>$push_up,
                                "shuttle_run"=>$suttle_run,
                                "renang"=>$waktu_renang,
                                "nilai" => $nilai_total,
                                "nama_seldik"=>$nama_seldik,
                                "keterangan" =>$keterangan,
                                "date_created"=>date("Y-m-d",strtotime($tgl_pelaksanaan)),
                                 "flag_del"=>0
                                );
                        //print_r($insert_array);die();
                      
                        //print_r($update_array);die();
                            $this->load->model("common_model");
                            $this->common_model->data_insert("tb_nilai",$insert_array);
                               echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/datanilai/tabel_nilai";</script>
                                ';
                            $data["error"] =  "<script type='text/javascript'>
                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
                                            </script>";
                        
                }
            }
            
            
            $this->load->view("datanilai/add_nilai",$data);
        }
    }

    function kelompok_umur_by_usia($tanggal_lahir){
            list($year,$month,$day) = explode("-",$tanggal_lahir);
                $year_diff  = date("Y") - $year;
                $month_diff = date("m") - $month;
                $day_diff   = date("d") - $day;
                if ($month_diff < 0) {
                    $year_diff--;
                } else if (($month_diff==0) && ($day_diff < 0)) {$year_diff--;}

                if($year_diff>=18 && $year_diff<=21){
                    $kelompok_umur = "I";
                } else if ($year_diff>=22 && $year_diff<=25){
                    $kelompok_umur = "II";
                } else if ($year_diff>=26 && $year_diff<=29){
                    $kelompok_umur = "III";
                } else if ($year_diff>=30 && $year_diff<=33){
                    $kelompok_umur = "IV";
                } else if ($year_diff>=34 && $year_diff<=37){
                    $kelompok_umur = "V";
                } else if ($year_diff>=38 && $year_diff<=41){
                    $kelompok_umur = "VI";
                } else if ($year_diff>=42 && $year_diff<=45){
                    $kelompok_umur = "VII";
                } else if ($year_diff>=46 && $year_diff<=49){
                    $kelompok_umur = "VIII";
                } else if ($year_diff>=50 && $year_diff<=53){
                    $kelompok_umur = "IX";
                } else if ($year_diff>=54 ){
                    $kelompok_umur = "X";
                } 


                return $kelompok_umur;
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
            $nilai_b = ($nilai_total['pull_up']->nilai_pull_up + $nilai_total['sit_up']->nilai_sit_up + $nilai_total['push_up']->nilai_push_up+$nilai_total['shuttle_run']->nilai_shuttle_run) / 4;
            //print_r($nilai_total['sit_up']->nilai_sit_up);die();
            $nilai_renang = $nilai_total['renang']->nilai_renang;
            //print_r($nilai_renang);
            $data['nilai_b'] = round($nilai_b,2);
            $nilai_ab = ($nilai_b + $nilai_total['lari']->nilai_lari) / 2;
            $data['nilai_ab']= round($nilai_ab,2);
            //print_r($nilai_ab);die();
            $data["nilai"] = $nilai;
            
            $penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur,$nilai_total['lari']->nilai_lari,$nilai_total['pull_up']->nilai_pull_up,$nilai_total['sit_up']->nilai_sit_up,$nilai_total['push_up']->nilai_push_up,$nilai_total['shuttle_run']->nilai_shuttle_run);
            // print_r($penilaian);die();
            // print_r($kategori.'<br>'.$nilai_ab.'<br>'.$nilai_total);die();
            $data['jumlah_nilai'] = round($nilai[0]->nilai,2);
            $data['keterangan'] = $penilaian['keterangan'];
            $data['status'] = $penilaian['status'];

         
            $this->load->view("datanilai/nilai",$data);
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


     public function update_nilai($user_id){
        if(_is_user_login($this)){
            $data = array();
             $this->load->model("seldik_model");            
            $data['seldik'] = $this->seldik_model->get_seldik();
            $this->load->model("datanilai_model");
            $nilai = $this->datanilai_model->get_datanilai_by_id($user_id);
           // print("<pre>".print_r($nilai[0]->id_data_personil,true)."</pre>");die();
            $data["nilai"] = $nilai;
            //print("<pre>".print_r($data["nilai"],true)."</pre>");die();
            $this->load->model("personel_model");
            $this->load->model("users_model");
            $data["user_types"] = $this->users_model->get_user_type();
            $user = $this->personel_model->get_personel_by_id($nilai[0]->id_data_personil);
            //print("<pre>".print_r($user,true)."</pre>");die();
            $data["user"] = $user;
            $tgl_lahir = $user->tanggal_lahir;
            $kelompok_umur = $this->kelompok_umur_by_usia($tgl_lahir);
            $data["kelompok_umur"] = $kelompok_umur;
            
            if($_POST){
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('kelompok_umur', 'Kelompok Umur', 'trim|required');
                $this->form_validation->set_rules('tinggi_badan', 'Tinggi Badan', 'trim|required');
                $this->form_validation->set_rules('berat_badan', 'Berat Badan', 'trim|required');
                $this->form_validation->set_rules('waktu_lari', 'Lari', 'trim|required');
                $this->form_validation->set_rules('pull_up', 'Pull Up', 'trim|required');
                $this->form_validation->set_rules('sit_up', 'Sit Up', 'trim|required');
                $this->form_validation->set_rules('push_up', 'Push Up', 'trim|required');
                $this->form_validation->set_rules('waktu_renang', 'Waktu Renang', 'trim|required');             
                
                if ($this->form_validation->run() == FALSE) 
             {
                  
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
                    
             }else
                {
                        $this->load->model("datanilai_model");
                        $tinggi_badan = $this->input->post("tinggi_badan");
                        $jenis_kelamin = $this->input->post("jenis_kelamin");
                        $pok_umur = $this->input->post("kelompok_umur");
                        $berat_badan = $this->input->post("berat_badan");
                        $waktu_lari = $this->input->post("waktu_lari");
                        $pull_up = $this->input->post("pull_up");
                        $nama_seldik = $this->input->post("seldik");
                        $sit_up = $this->input->post("sit_up");
                        $push_up = $this->input->post("push_up");
                        $suttle_run = $this->input->post("suttle_run");
                        $waktu_renang = $this->input->post("waktu_renang");
                        $tgl_pelaksanaan = $this->input->post("tgl_pelaksanaan");

                        //print_r(date("Y-m-d",strtotime($tgl_pelaksanaan)));die();

                        $nilai = $this->datanilai_model->get_datanilai_by_id($user_id);
                         //print("<pre>".print_r($nilai,true)."</pre>");die();
                        $bmi = round( $this->get_bmi($tinggi_badan,$berat_badan),2);
                        //print_r($bmi);die();
                        $postur = $this->kelas_postur($bmi);
                        //print_r($postur);die();
                        $kelas_postur = $postur['kelas'];
                        //print_r($kelas_postur);die();
                        $nilai_postur = $postur['nilai'];
                        if($kelas_postur=="Luar Limit Atas" || $kelas_postur == "Limit Atas" || $kelas_postur == "Luar Limit Bawah" || $kelas_postur == "Limit Bawah"){
                            $kategori = "Tidak Memenuhi Sarat";
                        } else {
                            $kategori = "Memenuhi Sarat";
                        }
          

                        $nilai_garjas = $this->get_nilai_b($pok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$waktu_lari,$suttle_run,$waktu_renang);
                        $nilai_renang = $nilai_garjas['renang']->nilai_renang;
                        $nilai_b = ($nilai_garjas['pull_up']->nilai_pull_up + $nilai_garjas['sit_up']->nilai_sit_up + $nilai_garjas['push_up']->nilai_push_up+$nilai_garjas['shuttle_run']->nilai_shuttle_run) / 4;
                        $nilai_ab = ($nilai_b + $nilai_garjas['lari']->nilai_lari) / 2;

                        $penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur,$nilai_garjas['lari']->nilai_lari,$nilai_garjas['pull_up']->nilai_pull_up,$nilai_garjas['sit_up']->nilai_sit_up,$nilai_garjas['push_up']->nilai_push_up,$nilai_garjas['shuttle_run']->nilai_shuttle_run);
                        $keterangan = $penilaian['keterangan'];
                        $nilai_total = $penilaian['nilai_total'];
                        
                        $update_array = array(
                                "kelas"=>$kelas_postur,
                                "nilai_bmi"=>$bmi,
                                "nilai_postur"=>$nilai_postur,
                                "kategori"=>$kategori,
                                "nilai" => $nilai_total,
                                "keterangan" =>$keterangan,
                                "tinggi_badan"=>$tinggi_badan,
                                "kelompok_umur"=>$pok_umur,
                                "berat_badan"=>$berat_badan,
                                "lari"=>$waktu_lari,
                                "pull_up"=>$pull_up,
                                "sit_up"=>$sit_up,
                                "push_up"=>$push_up,
                                "shuttle_run"=>$suttle_run,
                                "nama_seldik"=>$nama_seldik,
                                "renang"=>$waktu_renang,
                                "date_created"=>date("Y-m-d",strtotime($tgl_pelaksanaan)),
                                "date_updated"=>date("Y-m-d H:i:s")
                                );
                        //print("<pre>".print_r($update_array,true)."</pre>");die();
                        
                        //print_r($update_array);die();
                            $this->load->model("common_model");
                            $this->common_model->data_update("tb_nilai",$update_array,array("id"=>$user_id)
                                );
                               echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/datanilai/tampil_nilai/'.$user_id.'";</script>
                                ';
                            $data["error"] =  "<script type='text/javascript'>
                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
                                            </script>";
                        
                }
            }
            
            
            $this->load->view("datanilai/edit_nilai",$data);
        }
    }

 
  
}