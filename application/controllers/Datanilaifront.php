<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datanilaifront extends CI_Controller {
    public function __construct()
    {
                parent::__construct();
                // Your own constructor code
                $this->load->database();
                $this->load->helper('login_helper');
    }


    public function tabel_nilai(){
        if(_is_user_login($this)){
            $data = array();
            $this->load->model("datanilai_model");
            $this->load->model("personel_model");
            $id_user = _get_current_user_id($this);

            $data["personel"] = $this->personel_model->get_personel_by_id_user($id_user);


            $data["users"] = $this->datanilai_model->get_datanilai_filter_by_flag_del_and_by_id_personel($data["personel"]->id);
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("datanilaifront/tabel_nilai",$data);
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


         
            $this->load->view("datanilaifront/nilai",$data);
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