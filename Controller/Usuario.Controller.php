<?php
    class Usuario{

        public $smarty;

        public function __construct()
        {
            $this->smarty =new Smarty();
        }

        public function Inicio()
        {
            $this->smarty->assign('title','Home');
            $this->smarty->display('Home.tpl');
        }

        public function login()
        {
            $user=$_POST['nombre'];
            $password=$_POST['pass'];

            $smarty = new Smarty();
            $vec=array();
            $vec=[
                ['usuario'=>'admin','pass'=>'1234'],
                ['usuario'=> 'Javier', 'pass'=>'456']
            ];
            $smarty->assign('datos', $vec);
            
               
            $estado=false;
             $cont=0;   

            foreach($vec as $u)
            {
                if($u['usuario']==$user && $u['pass']==$password)   
                {
                    $estado=true;
                    $cont++;    
                } 
            }
            if($estado==true)
            {
                $this->smarty->assign('title','Paisajes');
                $this->smarty->display('Imagenes.tpl');
            }
            else
            {
                echo "Usuario No existente";
            }
           
        }
    
        public function Fin()
        {
            echo 'fin';
        }
    }
?>
