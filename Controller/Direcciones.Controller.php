<?php
    class Direcciones
    {
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
        public function IrSass()
        {
            $this->smarty->assign('title','Sass');
            $this->smarty->display('Sass.tpl');
        }

        public function IrComponente()
        {
            $this->smarty->assign('title','Registro');
            $this->smarty->display('Registro.tpl');
        }
        public function IrPaisajes()
        {
            $this->smarty->assign('title','Imagenes');
            $this->smarty->display('Imagenes.tpl');
        }
    }
?>