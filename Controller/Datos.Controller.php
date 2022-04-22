<?php
    class Datos
    {
        public $smarty;
    
        public function __construct()
        {
            $this->smarty=new Smarty();
        }
    
        public function Procesar()
        {
            //$dato=$_POST['d'];
    
            $array = array("foo", "bar", "hello", "world");
    
            $usuario =array(
                array('phone' => '555-555-1234',
                    'fax' => '555-555-5678',
                    'cell' => '555-555-0357'),
                array('phone' => '800-555-4444',
                    'fax' => '800-555-3333',
                    'cell' => '800-555-2222')
            );
    
            //var_dump($usuario);
    
            //$this->smarty->assign('dato',$dato);
            //$this->smarty->assign('info', $array);
    
            //$this->smarty->assign('usuario', $usuario);
    
            //$this->smarty->assign('title','Datos');
            $this->smarty->display('Sass.tpl');
        }
    }
?>