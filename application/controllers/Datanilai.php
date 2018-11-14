<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datanilai extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
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
                        
                        $tinggi_badan = $this->input->post("tinggi_badan");
                        $pok_umur = $this->input->post("kelompok_umur");
                        $berat_badan = $this->input->post("berat_badan");
                        $waktu_lari = "00:".$this->input->post("waktu_lari");
                        $pull_up = $this->input->post("pull_up");
                        $sit_up = $this->input->post("sit_up");
                        $push_up = $this->input->post("push_up");
                        $suttle_run = $this->input->post("suttle_run");
                        $waktu_renang = "00:".$this->input->post("waktu_renang");
                        $tgl_pelaksanaan = $this->input->post("tgl_pelaksanaan");
                        $insert_array = array(
                                "id_data_personil"=>$user_id,
                                "kelompok_umur"=>$pok_umur,
                                "tinggi_badan"=>$tinggi_badan,
                                "berat_badan"=>$berat_badan,
                                "lari"=>$waktu_lari,
                                "pull_up"=>$pull_up,
                                "sit_up"=>$sit_up,
                                "push_up"=>$push_up,
                                "shuttle_run"=>$suttle_run,
                                "renang"=>$waktu_renang,
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
             //print("<pre>".print_r($nilai[0]->kelompok_umur,true)."</pre>");die();
            $bmi = round( $this->get_bmi($nilai[0]->tinggi_badan,$nilai[0]->berat_badan),2);
            //print_r($bmi);die();
            $data['bmi'] = $bmi;
            $postur = $this->kelas_postur($bmi);
            //print_r($postur);die();
            $kelas_postur = $postur['kelas'];
             $data['kelas_postur'] = $kelas_postur;
            //print_r($kelas_postur);die();
            $nilai_postur = $postur['nilai'];
            
           
           
            $data['nilai_postur'] = $nilai_postur;
           
            if($kelas_postur=="Luar Limit Atas" || $kelas_postur == "Limit Atas" || $kelas_postur == "Luar Limit Bawah" || $kelas_postur == "Limit Bawah"){
                $kategori = "Tidak Memenuhi Sarat";
            } else {
                $kategori = "Memenuhi Sarat";
            }
             $data['kategori'] = $kategori;

            $kelompok_umur = $nilai[0]->kelompok_umur;
            //print_r($kelompok_umur);die();
            $jenis_kelamin = $nilai[0]->jenis_kelamin;
            $pull_up = $nilai[0]->pull_up;
            $sit_up = $nilai[0]->sit_up;
            $push_up = $nilai[0]->push_up;
            $lari = $nilai[0]->lari;
            $shuttle_run = $nilai[0]->shuttle_run;
            //print_r($shuttle_run);die();
            $push_up = $nilai[0]->push_up;
            $shuttle_run = $nilai[0]->shuttle_run;
            //$cek_nilai = $this->cek_nilai_max($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run);
            $nilai_total = $this->get_nilai_b($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run);
            $data['nilai_total'] = $nilai_total;
            $nilai_b = ($nilai_total['pull_up']->nilai_pull_up + $nilai_total['sit_up']->nilai_sit_up + $nilai_total['push_up']->nilai_push_up+$nilai_total['shuttle_run']->nilai_shuttle_run) / 4;
            //print_r($nilai_total['sit_up']->nilai_sit_up);die();
            $data['nilai_b'] = $nilai_b;
            $nilai_ab = ($nilai_b + $nilai_total['lari']->nilai_lari) / 2;
            $data['nilai_ab']= $nilai_ab;
            //print_r($nilai_ab);die();
            $data["nilai"] = $nilai;
            $nilai_renang = 85;
            $penilaian = $this->nilai_total($kategori,$nilai_ab,$nilai_renang,$nilai_postur);
            // print_r($penilaian);die();
            // print_r($kategori.'<br>'.$nilai_ab.'<br>'.$nilai_total);die();
            $data['jumlah_nilai'] = $penilaian['nilai_total'];
            $data['keterangan'] = $penilaian['keterangan'];
            $data['status'] = $penilaian['status'];

         
            $this->load->view("datanilai/nilai",$data);
    }

    function nilai_total($kategori,$nilai_garjas,$nilai_renang,$nilai_postur){
        $penilaian = array();
        if($kategori=="Memenuhi Sarat"){
            $penilaian['nilai_total'] = (($nilai_garjas * 90) / 100) + (($nilai_renang * 10) / 100);

        } else {
             $penilaian['nilai_total'] = (($nilai_garjas * 80) / 100) + (($nilai_renang * 10) / 100) + (($nilai_postur * 10) / 100);
        }

          if($penilaian['nilai_total']<70){
                $penilaian['keterangan'] = "Tidak Lulus";
            } else {
                $penilaian['keterangan'] = "Lulus";
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

    function get_nilai_b($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run){
        $nilai = array();
         $this->load->model("datanilai_model");
         if($jenis_kelamin=="Pria"){
            $tabel = "nilai_b_pria";
            $tabel_lari = "lari_pria";
         } else { $tabel ="nilai_b_wanita";  $tabel_lari = "lari_wanita";}

         $nilai["pull_up"] = $this->datanilai_model->get_nilai_pull_up_by_id($tabel,$kelompok_umur,$pull_up);
         $nilai["sit_up"] = $this->datanilai_model->get_nilai_sit_up_by_id($tabel,$kelompok_umur,$sit_up);
         $nilai["push_up"] = $this->datanilai_model->get_nilai_push_up_by_id($tabel,$kelompok_umur,$push_up);
         $nilai["lari"] = $this->datanilai_model->get_nilai_lari_by_id($tabel_lari,$kelompok_umur,$lari);
         $nilai["shuttle_run"] = $this->datanilai_model->get_nilai_shuttle_run_by_id($tabel,$kelompok_umur,$shuttle_run);
         return $nilai;
    }

    //  function cek_nilai_max($kelompok_umur,$jenis_kelamin,$pull_up,$sit_up,$push_up,$lari,$shuttle_run){
    //     $nilai = array();
    //      $this->load->model("datanilai_model");
    //      if($jenis_kelamin=="Pria"){
    //         $tabel = "nilai_b_pria";
    //         $tabel_lari = "lari_pria";
    //      } else { $tabel ="nilai_b_wanita";  $tabel_lari = "lari_wanita";}

    //      $nilai["pull_up"] = $this->datanilai_model->get_nilai_pull_up_by_id($tabel,$kelompok_umur,$pull_up);
    //      $nilai["sit_up"] = $this->datanilai_model->get_nilai_sit_up_by_id($tabel,$kelompok_umur,$sit_up);
    //      $nilai["push_up"] = $this->datanilai_model->get_nilai_push_up_by_id($tabel,$kelompok_umur,$push_up);
    //      $nilai["lari"] = $this->datanilai_model->get_nilai_lari_by_id($tabel_lari,$kelompok_umur,$lari);
    //      $nilai["shuttle_run"] = $this->datanilai_model->get_nilai_shuttle_run_by_id($tabel,$kelompok_umur,$shuttle_run);
    //      return $nilai;
    // }

    function get_bmi($tinggi,$berat){
        $bmi = $berat / (($tinggi/100)*($tinggi/100));
        return $bmi;
    }
// function delete_user($user_id){
//         $data = array();
//             $this->load->model("users_model");
//             $user  = $this->users_model->get_user_by_id($user_id);
//            if($user){
//                 $this->db->query("update users set flag_del = 1 where user_id = '".$user->user_id."'");
//                 redirect("users");
//            }
//     }

 // function change_password(){
 //        if(_is_frontend_user_login($this)){
 //            $this->load->model("users_model");
 //                $user_data  = $this->users_model->get_user_by_id(_get_current_user_id($this));
 //                $data["user_data"] = $user_data;

 //            if($_POST){
                
 //                $this->load->model("users_model");
           
 //                $this->load->library('form_validation');
                
 //                $this->form_validation->set_rules('c_password', 'Current Password', 'trim|required');
 //                $this->form_validation->set_rules('n_password', 'New Password', 'trim|required');
 //                $this->form_validation->set_rules('r_password', 'Re Password', 'trim|required');
                
 //                if ($this->form_validation->run() == FALSE) {
                   
 //        		    $error_array = $this->form_validation->error_string();
 //                    $error_json = json_encode(strip_tags($error_array));
 //                    $error_clean = str_replace(['"', '"'], '', $error_json);
 //                    $data["error"] =  "<script type='text/javascript'>
 //                                                    var teks = ' ".$error_clean."';
 //                                                    swal({   
 //                                                            title: '',   
 //                                                            text: teks,   
 //                                                            type: 'warning',   
 //                                                            showCancelButton: false,   
 //                                                            confirmButtonColor: '#DD6B55',   
 //                                                            confirmButtonText: 'OK', 
 //                                                            closeOnConfirm: false 
 //                                                        });
 //                                            </script>";
 //        		}else {
                   
 //                    if($user_data->user_password == md5($this->input->post("c_password"))){
                     
 //                        $n_password = $this->input->post("n_password");
 //                        $r_password = $this->input->post("r_password");

                       
                        
 //                        if($n_password == $r_password){
 //                            $this->load->model("common_model");
 //                            $resid = $this->common_model->data_update("users",
 //                                array("user_password"=>md5($n_password)),array("user_id"=>_get_current_user_id($this)));
                           
 //                            echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/users/change_password";</script>
 //                                ';
 //                            $data["error"] = "<script type='text/javascript'>
 //                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
 //                                            </script>";
 //                        }
                        
 //                    }else{
 //                        $data["error"] = "<script type='text/javascript'>
 //                                                    swal({   
 //                                                            title: '',   
 //                                                            text: 'Password tidak cocok',   
 //                                                            type: 'warning',   
 //                                                            showCancelButton: false,   
 //                                                            confirmButtonColor: '#DD6B55',   
 //                                                            confirmButtonText: 'OK', 
 //                                                            closeOnConfirm: false 
 //                                                    });
 //                                         </script>";

 //                    }         
                        
 //                }
 //            }    
               
 //                $this->load->view("users/change_password",$data);

 //        }
 //    }   
 
  
}