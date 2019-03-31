<?php


class Users extends CI_Controller {
    

//    
//    public function show($user_id) {
//        
//        $data['results'] = $this->user_model->get_users($user_id, "rico");
//        
//        $this->load->view('user_view', $data);
//        
//        
////        $this->load->model('user_model');
//        
////       $result =  $this->user_model->get_users();
//        
////        $data['welcome'] = "Welcome to my page";
//        
//        
////      foreach ($result as $object) { // echo $object->password. "<br>"; // }
//        
//    }
//    
//    public function insert() {
//        
//      
//        
//         $username = "petre";
//        $password = "secret";
//        
//        $this->user_model->create_users([
//            'username' => $username,
//            'password'=> $password
//            
//        ]);
//    }
//    
//    
//    
//    
//    
//    
//        public function update() {
//            
//        $id = 3;
//        
//         $username = "Wiliam";
//        $password = "not so secret";
//        
//        $this->user_model->update_users([
//            'username' => $username,
//            'password'=> $password
//        ], $id);
//    }
// 
//    
//    public function delete() {
//        
//        $id = 3;
//        
//        $this->user_model->delete_users($id);
//        
//    }
//    
    
public function login() {
    
   echo  $this->input->post('username');
    
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

















?>
