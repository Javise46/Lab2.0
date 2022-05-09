
        
{include file="Cabecera/Header.tpl"}
  {include file="Encabezados/EncabezadoInicio.tpl"}
<br/><br/>
                 <div class="center">
                 {if isset ($msn)}
                    <h3>{$msn}</h1>
                    {else}
                        <h3></h3>
                 {/if}    
                 </div>               
                 <form method="post" action="?Controller=Usuario&Method=login" >
                      <div class = "center">
                            <div  class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input  type="text" name="nombre" placeholder="Ingrese su Usuario">   
                                                               
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">lock</i>
                                        <input type="password" name="pass" placeholder="Ingrese su Contraseña">                                   
                               </div>
                            </div>
                      </div>
                      <div class = "center">
                         <input class="waves-effect waves-light btn " type= "submit" value="Ingresar">
                      </div>                   
                 </form>
              </div>
              </div>
                </div>
                <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/>
{include file="Cabecera/Footer.tpl"}

