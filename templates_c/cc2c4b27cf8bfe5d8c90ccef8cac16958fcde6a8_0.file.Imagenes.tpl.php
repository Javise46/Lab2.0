<?php
/* Smarty version 4.0.4, created on 2022-05-09 05:31:44
  from 'C:\xampp\htdocs\Lab2\View\Imagenes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_62788b203d9099_62435677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2c4b27cf8bfe5d8c90ccef8cac16958fcde6a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Lab2\\View\\Imagenes.tpl',
      1 => 1652067098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabecera/Header.tpl' => 1,
    'file:Encabezados/Encabezado.tpl' => 1,
    'file:Cabecera/Footer.tpl' => 1,
  ),
),false)) {
function content_62788b203d9099_62435677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabecera/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender("file:Encabezados/Encabezado.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <h1 class="center">Paisajes</h1>
 <table>
        <thead>
          <tr>
              <th>Imagen</th>
              <th>Lugar</th>
              <th>Direccion de Imagen</th>
          </tr>
        </thead>
          <tr>
            <td><img src="IMG/GranCañon1.png"height="200" width="400"></td>
            <td>Parque Nacional del Gran Cañón en el norte de Arizona</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/El-Gran-Canon-compressor-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG/LagoMa2.png" height="200" width="400"></td>
            <td>Valle de los 10 Picos,Alberta (Canadá)</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/lago-moraine-Canada-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\CataratasdeIga3.png"height= "200" width="400"></td>
            <td>La Garganta del Diablo,Frontera entre Argetina y Brasil</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/cataratas-del-iguazu-1-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\AOGASHIMA.png"height= "200" width="400"></td>
            <td>Hachijō, Tokio, Japón.</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/Aogashima-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\GLACIAL5.png"height= "200" width="400"></td>
            <td>Provincia de Santa Cruz, en el sudoeste de la Argentina</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/glacial-perito-moreno-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\MarCoral6.png"height= "200" width="400"></td>
            <td>Australia</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/Arrecife-de-coral-australia-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\FIORDO7.png"height= "200" width="400"></td>
            <td>Noruega</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/stavanger-fiordo-noruego-1-1.jpg"> Clic Aqui  </tr>
          <tr>
            <td><img src="IMG\ZHANGJIAJIE8.png"height= "200" width="400"></td>
            <td>China</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/ZHANGJIAJIE-1-1.jpg">  Clic Aqui </td>
            
          </tr>
          <tr>
            <td><img src="IMG\HIELOTURQUESA9.png"height= "200" width="400"></td>
            <td>Siberia</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/hielo-azul-turquesa-lago-Baikal-1-1.jpg">  Clic Aqui </td>
          </tr>
          <tr>
            <td><img src="IMG\DesiertoOlas10.png"height= "200" width="400"></td>
            <td>Arizona, Estados Unidos</td>
            <td><a href ="https://losviajesdedomi.com/wp-content/uploads/2021/09/olas-del-desierto-EEUU-1-1.jpg">  Clic Aqui </td>
      </table>

    


<?php $_smarty_tpl->_subTemplateRender("file:Cabecera/Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
