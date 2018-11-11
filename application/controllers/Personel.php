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
                $this->form_validation->set_rules('korps', 'Korps', 'trim|required');
                $this->form_validation->set_rules('nrp', 'NRP', 'trim|required');
                $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
                $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
                $this->form_validation->set_rules('matra', 'Matra', 'trim|required');
                $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
                $this->form_validation->set_rules('kesatuan', 'Kesatuan', 'trim|required');
                $this->form_validation->set_rules('id_user', 'Id User', 'trim|required');
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
                        
                        $nama = $this->input->post("nama");
                        
                        $pangkat = $this->input->post("pangkat");
                        
                        $korps = $this->input->post("korps");

                        $nrp = $this->input->post("nrp");

                        $jenis_kelamin = $this->input->post("jenis_kelamin");
                        
                        $tanggal_lahir = $this->input->post("tanggal_lahir");
                      //  print_r($tanggal_lahir);die();
                        
                        $matra = $this->input->post("matra");

                        $jabatan = $this->input->post("jabatan");
                        
                        $kesatuan = $this->input->post("kesatuan");
                        
                        $id_user = $this->input->post("id_user");
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
                                "kesatuan"=>$kesatuan,
                                "id_user"=>$id_user,
                                "date_created"=>date("Y-m-d H:i:sa"),
                                "flag_del"=>0));

                            echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/personel/";</script>
                                ';

                            $data["error"] =  "<script type='text/javascript'>
                                                    swal('Sukses!', 'Data berhasil disimpan', 'success')
                                            </script>";
                        
                }
            }
            
            $data["user"] = $this->personel_model->get_user()->result();
            $this->load->view("personel/add_personel",$data);
        }
    }
    // public function edit_user($user_id){
    //     if(_is_user_login($this)){
    //         $data = array();
    //         $this->load->model("users_model");
    //         $data["user_types"] = $this->users_model->get_user_type();
    //         $user = $this->users_model->get_user_by_id($user_id);
    //         $data["user"] = $user;
    //         if($_POST){
    //             $this->load->library('form_validation');
                
    //             $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
    //             $this->form_validation->set_rules('user_password', 'Password', 'trim|required');
    //             $this->form_validation->set_rules('user_type', 'User Type', 'trim|required');
                
    //             if ($this->form_validation->run() == FALSE) 
    //     		{
        		  
    //             $error_array = $this->form_validation->error_string();
    //             $error_json = json_encode(strip_tags($error_array));
    //             $error_clean = str_replace(['"', '"'], '', $error_json);

                
               
    //                 $data["error"] =  "<script type='text/javascript'>
    //                                                 var teks = ' ".$error_clean."';
    //                                                 swal({   
    //                                                         title: '',   
    //                                                         text: teks,   
    //                                                         type: 'warning',   
    //                                                         showCancelButton: false,   
    //                                                         confirmButtonColor: '#DD6B55',   
    //                                                         confirmButtonText: 'OK', 
    //                                                         closeOnConfirm: false 
    //                                                     });
    //                                         </script>";
                    
    //     		}else
    //             {
                        
    //                     $user_type = $this->input->post("user_type");
    //                     $user_name = $this->input->post("user_name");
    //                     $status = ($this->input->post("status")=="on")? 1 : 0;
                        
    //                     $update_array = array(
    //                             "user_name"=>$user_name,
    //                             "user_type_id"=>$user_type,
    //                             "user_status"=>$status,
    //                             "date_updated"=>date("Y-m-d H:i:sa"));
                        
    //                     $user_password = $this->input->post("user_password");
    //                     if($user->user_password != $user_password){
                            
    //                     $update_array["user_password"]= md5($user_password);
                        
    //                     }
    //                     //print_r($update_array);die();
    //                         $this->load->model("common_model");
    //                         $this->common_model->data_update("users",$update_array,array("user_id"=>$user_id)
    //                             );
    //                            echo  '<script>alert("Data berhasil disimpan...");window.location = "'.site_url().'/users/";</script>
    //                             ';
    //                         $data["error"] =  "<script type='text/javascript'>
    //                                                 swal('Sukses!', 'Data berhasil disimpan', 'success')
    //                                         </script>";
                        
    //             }
    //         }
            
            
    //         $this->load->view("users/edit_user",$data);
    //     }
    // }
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