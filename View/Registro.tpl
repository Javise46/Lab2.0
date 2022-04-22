        
{include file="Cabecera/Header.tpl"}
  {include file="Encabezados/Encabezado.tpl"}
    <h1 class="center">Registro de cuenta de gmail</h1>

    <form method="post" action="?Controller=Datos&Method=Procesar">
        
        <div class="input-field col s12">
            <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
             <input id="icon_prefix" type="text" class="validate">
               <label for="icon_prefix">Ingrese su cuenta de gmail</label>

               <div class="input-field col s12">
             <input id="password" type="password" class="validate">
              <label for="password">Ingrese su contraseña</label>

            <div class="input-field col s1">
                <input   type="submit" value="Enviar">
                
            </div>
        </div>
    </form>

<div >
   {include file="Encabezados/PiePagina.tpl"}
{include file="Cabecera/Footer.tpl"}
</div>

