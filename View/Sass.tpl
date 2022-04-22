
        
{include file="Cabecera/Header.tpl"}
  {include file="Encabezados/Encabezado.tpl"}

    <h1 class="center"Cuenta registada</h1>

    {if isset($dato)}
      <h2 class="center">Info recibida: {$dato}</h2>


      <br>

      <table>
        <tr>
          <td>info</td>
        </tr>

        {foreach from=$info item=$i}
          <tr>
            <td>{$i}</td>
          </tr>
        {/foreach}

      </table>

      <br><br>

        <table>
        <tr>
          <td>nombre</td>
          <td>apellido</td>
        </tr>

        {foreach from=$usuario item=$u}
          <tr>
            <td>{$us}</td>
            
          </tr>
        {/foreach}

      </table>


    {/if}

   {include file="Encabezados/PiePagina.tpl"}
{include file="Cabecera/Footer.tpl"}

