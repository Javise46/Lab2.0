<?php
    class Usuario{

        public $smarty;

        public function __construct()
        {
            $this->smarty =new Smarty();
        }

        public function Inicio()
        {
            $this->smarty->assign('title','Mi pagina');
            $this->smarty->display('Default.tpl');
        }

        public function Fin()
        {
            echo 'fin';
        }
    }
?>
