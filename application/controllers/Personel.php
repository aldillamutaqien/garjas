<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personel extends CI_Controller {
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
            $this->load->model("personel_model");

            $data["users"] = $this->personel_model->get_personel_filter_by_flag_del();
            $this->load->view("personel/index",$data);
        }
    }
    public function add_personel(){
        if(_is_user_login($this)){
            $data["error"] = "";
            $this->load->model("personel_model");
            if($_POST){
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
                $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');
               
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
               
                $this->form_validation->set_rules('matra', 'Matra', 'trim|required');
                $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
               
                $this->form_validation->set_rules('id_user', 'Id User', 'trim|required');
                if ($this->form_validation->run() == FALSE) 
        		{
        		  
                $error_array = $this->form_validation->error_string();
                $error_json = json_encode(strip_tags($error_array));
                $error_clean = str_replace(['"', '"'], '', $error_json);

                
               
                    
		    $data["msg"] =  $error_clean;


                    
        		}else
                {       $this->load->model("satker_model");
                        $this->load->model("kotama_model");
                        
                        $nama = $this->input->post("nama");
                        
                        $pangkat = $this->input->post("pangkat");
                        
                        $korps = $this->input->post("korps");

                        $nrp = $this->input->post("nrp");

                        $jenis_kelamin = $this->input->post("jenis_kelamin");
                        
                        $tanggal_lahir = $this->input->post("tanggal_lahir");
                      //  print_r($tanggal_lahir);die();
                        
                        $matra = $this->input->post("matra");

                      

                        $jabatan = $this->input->post("jabatan");
                        
                        $id_satker = $this->input->post("satker");

                        if(!$id_satker){
                            $satker = "NULL";
                        } else {
                        $kesatuan = $this->satker_model->get_satker_by_id($id_satker)->result();
                        
                        $satker = $kesatuan[0]->nama_satker;
                        }

                       

                        $id_kotama = $this->input->post("kotama");

                        $kotama = $this->kotama_model->get_kotama_by_id($id_kotama)->result();

                        $nama_kotama = $kotama[0]->nama_kotama;

                         //print_r($nama_kotama);die();
                        
                        $id_user = $this->input->post("id_user");
                        //$tgl_lahir = date("Y-m-d",strtotime($tanggal_lahir));
                        //print_r($tgl_lahir);die();
                        $array = array(
                                "nama"=>$nama,
                                "pangkat"=>$pangkat,
                                "korps"=>$korps,
                                "jenis_kelamin"=>$jenis_kelamin,
                                "tanggal_lahir"=>date('Y-m-d', strtotime($tanggal_lahir)),
                                "matra"=>$matra,
                                "jabatan"=>$jabatan,
                                "id_satker"=>$id_satker,
                                "kesatuan"=>$satker,
                                "id_kotama"=>$id_kotama,
                                "nama_kotama"=>$nama_kotama,
                                "id_user"=>$id_user,
                                "date_created"=>date("Y-m-d H:i:sa"),
                                "flag_del"=>0);
                        //print_r($array);die();
                        
                            $this->load->model("common_model");
                            $this->common_model->data_insert("personel",
                                array(
                                "nama"=>$nama,
                                "pangkat"=>$pangkat,
                                "korps"=>$korps,
                                "nrp"=>$nrp,
                                "jenis_kelamin"=>$jenis_kelamin,
                                "tanggal_lahir"=>date("Y-m-d",strtotime($tanggal_lahir)),
                                "matra"=>$matra,
                                "jabatan"=>$jabatan,
                                "id_satker"=>$id_satker,
                                "kesatuan"=>$satker,
                                "id_kotama"=>$id_kotama,
                                "nama_kotama"=>$nama_kotama,
                                "id_user"=>$id_user,
                                "date_created"=>date("Y-m-d H:i:sa"),
                                "flag_del"=>0));

                           // echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/personel/";</script>
                           //     ';

                           
			   $data["sukses"] =  "data berhasil disimpan";
                        
                }
            }
            $data["kotama"] = $this->personel_model->get_kotama();
             $data["satker"] = $this->personel_model->get_satker();
            //print_r($data["kotama"]);die();
            $data["user"] = $this->personel_model->get_user()->result();
            $this->load->view("personel/add_personel",$data);
        }
    }


   


    public function upload_data(){
        if(_is_user_login($this)){

             $this->load->view("personel/upload_data");
        }

        if(isset($_POST['upload'])){
             if($_FILES["file_upload"]["size"]>0){
                // print_r($_FILES);
              $filepath = "uploads/".$_FILES["file_upload"]["name"];
              $res = move_uploaded_file($_FILES["file_upload"]["tmp_name"],$filepath);
            
              //print_r($res);die();
              if($res){
                ini_set('display_errors', TRUE);
                    ini_set('display_startup_errors', TRUE);
                    
                    define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
                    
                    date_default_timezone_set('Asia/Jakarta');
                      $date = date("Y-m-d H:i:s");
                    /** Include PHPExcel_IOFactory */
                    //require_once  'libraries/PHPExcel/IOFactory.php';
                    $this->load->library('PHPExcel');
                     if (!file_exists($filepath)) {
                        
                        exit("Please run 05featuredemo.php first." . EOL);
                    }
                     try {
                        $inputFileType = PHPExcel_IOFactory::identify($filepath);
                        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                        $objPHPExcel = $objReader->load($filepath);
                    } catch(Exception $e) {
                        die('Error loading file "'.pathinfo($filepath,PATHINFO_BASENAME).'": '.$e->getMessage());
                    }
                    $sheet = $objPHPExcel->getSheet(0); 
                    $highestRow = $sheet->getHighestRow(); 
                    $highestColumn = $sheet->getHighestColumn();
                    // print_r($sheet.'<br>'. $highestRow.'<br>'.$highestColumn);die();
                    $sql_user = "INSERT into users (user_name,user_password,user_type_id,user_status,on_date,date_created,flag_del) VALUES";
                    $sql_org = "Insert into personel (id_user,nama, pangkat, korps, nrp, jenis_kelamin, tanggal_lahir, kesatuan, jabatan, matra,date_created,flag_del) VALUES";
                    $sql_users = $sql_user;
                    $sql = $sql_org;

                        for ($row = 2; $row <= $highestRow; $row++){ 
                        //  Read a row of data into an array
                        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
                                                        NULL,
                                                        TRUE,
                                                        FALSE);
                        //  Insert row data array into your database of choice here
                        
                        
                        $rows = $rowData[0];
                        
                       $this->db->select();
                       $this->db->from('personel');
                       $this->db->where('nrp',$rows[3]);
                       $q = $this->db->get();
                        $record_found =  $q->row();
                       //print_r($record_found->nrp);die();
                        
                        if(!empty($record_found))
                        {
                            
                            $data = array(
                                   'pangkat' => $rows[1],
                                   'korps' =>$row[2],
                                   'kesatuan' => $rows[6],
                                   'jabatan' => $rows[7]
                                );
                           //print_r($data);die();
                            $this->db->where('id', $record_found->id);
                            $this->db->update('personel', $data); 
                             echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/personel/";</script>
                                ';
                            
                        }
                        else
                        {//ON DUPLICATE KEY UPDATE attended='".$row[1]."',attendence_reason='".$row[2]."'

                            $sql_users .=" ('".$rows[3]."','".md5($rows[3]."!")."','1','1','".$date."','".$date."','0') ";
                            if($row<$highestRow){
                                $sql .=",";     
                           }
                          // print_r($sql_users);
                           $this->db->query($sql_users);
                           $this->db->select('user_id');
                           $this->db->from('users');
                           $this->db->where('user_name',$rows[3]); 
                            $q = $this->db->get();
                            $user = $q->result();
                           // print_r($user);print_r($rows[5]);
                            $sql .=" ('".$user[0]->user_id."','".$rows[0]."','".$rows[1]."','".$rows[2]."','".$rows[3]."','".$rows[4]."','".$rows[5]."','".$rows[6]."','".$rows[7]."','".$rows[8]."','".$date."','0') ";
                            if($row<$highestRow){
                                $sql .=",";     
                           }

                           //print_r($sql);die();      
                        
                       }
                        
                     
                 // redirect('attendence/add_attendence'); 
                    }
                    if($sql!=$sql_org){
                      $this->db->query($sql);   
                       echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/personel/";</script>
                                ';
                    }

              }
             }
            
        }

    }

function delete_personel($id){
       $data = array();
             $this->load->model("personel_model");
             $personel = $this->personel_model->get_personel_by_id($id);
             $data["personel"] = $personel;
           if($personel){
                $this->db->query("update personel set flag_del = 1 where id = '".$personel->id."'");
                
                redirect("personel");
                 
           
    
 		}
	}
	 public function edit_personel($id){
         if(_is_user_login($this)){
             $data = array();
             $this->load->model("personel_model");
             $personel = $this->personel_model->get_personel_by_id($id);
             $data["personel"] = $personel;
                if($_POST){
                $this->load->library('form_validation');
                
                $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
                $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');
               
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
                $this->form_validation->set_rules('matra', 'Matra', 'trim|required');
                $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
               
                //$this->form_validation->set_rules('id_user', 'Id User', 'trim|required');
                if ($this->form_validation->run() == FALSE) 
                {
                  
                $error_array = $this->form_validation->error_string();
                $error_json = json_encode(strip_tags($error_array));
                $error_clean = str_replace(['"', '"'], '', $error_json);

                
               
                    $data["msg"] =  $error_clean;


                    
                }else
                {
                         $this->load->model("satker_model");
                        $this->load->model("kotama_model");
                         $this->load->model("users_model");

                        
                        $nama = $this->input->post("nama");
                        
                        $pangkat = $this->input->post("pangkat");
                        
                        $korps = $this->input->post("korps");

                        $nrp = $this->input->post("nrp");

                        $jenis_kelamin = $this->input->post("jenis_kelamin");
                        
                        $tanggal_lahir = $this->input->post("tanggal_lahir");
                      //  print_r($tanggal_lahir);die();
                        
                        $matra = $this->input->post("matra");

                        $jabatan = $this->input->post("jabatan");
                        
                        $id_satker = $this->input->post("satker");

                        if(!$id_satker){
                            $satker = "NULL";
                        } else {
                        $kesatuan = $this->satker_model->get_satker_by_id($id_satker)->result();
                        
                        $satker = $kesatuan[0]->nama_satker;
                        }

                       

                        $id_kotama = $this->input->post("kotama");

                        $kotama = $this->kotama_model->get_kotama_by_id($id_kotama)->result();

                        $nama_kotama = $kotama[0]->nama_kotama;

                         //print_r($nama_kotama);die();
                        
                       // $id_user = $this->input->post("id_user");
                        //$tgl_lahir = date("Y-m-d",strtotime($tanggal_lahir));
                        //print_r($tgl_lahir);die();
                        // $array = array(
                        //         "nama"=>$nama,
                        //         "pangkat"=>$pangkat,
                        //         "korps"=>$korps,
                        //         "jenis_kelamin"=>$jenis_kelamin,
                        //         "tanggal_lahir"=>$tanggal_lahir,
                        //         "matra"=>$matra,
                        //         "jabatan"=>$jabatan,
                        //         "kesatuan"=>$kesatuan,
                        //         "id_user"=>$id_user,
                        //         "date_created"=>date("Y-m-d H:i:sa"),
                        //         "flag_del"=>0);
                        // print_r($array);die();
                        
                              $update_array = array(
                                "nama"=>$nama,
                                "pangkat"=>$pangkat,
                                "korps"=>$korps,
                                "jenis_kelamin"=>$jenis_kelamin,
                                "tanggal_lahir"=>date('Y-m-d', strtotime($tanggal_lahir)),
                                "matra"=>$matra,
                                "jabatan"=>$jabatan,
                                "id_satker"=>$id_satker,
                                "kesatuan"=>$satker,
                                "id_kotama"=>$id_kotama,
                                "nama_kotama"=>$nama_kotama,
                                //"id_user"=>$id_user,
                                "date_created"=>date("Y-m-d H:i:sa"),
                                "flag_del"=>0);
                               $this->load->model("common_model");
                            $this->common_model->data_update("personel",$update_array,array("id"=>$id)
                                );

                            //echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/personel/";</script>
                              //  ';

                            $data["sukses"] =  "data berhasil disimpan";
                        
                }
            }
            $data["kotama"] = $this->personel_model->get_kotama();
             $data["satker"] = $this->personel_model->get_satker();
            //print_r($data["kotama"]);die();
            $data["user"] = $this->personel_model->get_user()->result();
            $this->load->view("personel/edit_personel",$data);
        }
    }

}