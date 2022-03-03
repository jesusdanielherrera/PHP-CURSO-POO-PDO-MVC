<?php 
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }
        public function home()
        {
            $data['page_id']= 1;
            $data['tag_page'] = "Homee";
            $data['page_title'] = "Pagina Principal";
            $data['page_name'] = "home";
            $this->views->getView($this, "home", $data);
        }   
        /*public function insertar(){
            $data=$this->model->setUser("armando",30);
            print_r($data);
        }
        public function verusuario($id){
            $data=$this->model->getUser($id);
            print_r($data);
        }
        public function actualizar(){
            $data=$this->model->updateUser(1,'carlitos',12); 
        }
        public function allusuario(){
            $data=$this->model->getUsers(); 
            print_r($data);
        }
        public function eliminarUsuario($id){
            $data=$this->model->delUser($id); 
    
        }*/
    } 
?> 