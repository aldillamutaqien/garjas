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
            //$this->load->model("personel_model");

            $data["users"] = $this->datanilai_model->get_datanilai_filter_by_flag_del();
            //print("<pre>".print_r($data["users"],true)."</pre>");die();


         
            $this->load->view("datanilaifront/tabel_nilai",$data);
        }
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

    function get_bmi($tinggi,$berat){
        $bmi = $berat / (($tinggi/100)*($tinggi/100));
        return $bmi;
    }
 
  
}