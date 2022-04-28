<?php
    class AreaPerimetro
    {
        public $smarty;
    
        public function __construct()
        {
            $this->smarty=new Smarty();
        }
        public function areaPerimetro()
        {
          
            $total = 0;
            $total2 = 0;
                $num1=$_POST['n1'];
                $num2=$_POST['n2'];
                $operacion=$_POST['operacion'];
                        $total= ($num1 + $num2)*2;
                        $total2 = ($num1 * $num2);
                    $this->smarty->assign('respuesta',$total);
                    $this->smarty->assign('respuesta1',$total2);
                    $this->smarty->assign('title','Resultado');
                    $this->smarty->display('calcular.tpl');
        }
    }
?>