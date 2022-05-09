
        
{include file="Cabecera/Header.tpl"}
  {include file="Encabezados/Encabezado.tpl"}
 
        <title>Proyecto 5to.BACO</title>
   
    <div class="container">
        <h1 align="center">Area y Perimetro</h1>
    </div>
    <br><br>

    <form method="post" action="?Controller=areaperimetro&Method=areaPerimetro">
        <div class="row">
            
            <div class="input-field col s6">
                <input name="n1" id="n1" type="number" >
                <label class="active" for="n1">Base</label>
            </div>
            <div class="input-field col s6">
                <input name="n2" id="n2" type="number">
                <label class="active" for="n2">Altura</label>
            </div>
        </div>
        <div class="container" align="center"> 
            <br><br>
            <input name="operacion"  type="submit" value="Cuadrado" class="waves-effect waves-light btn">
            <input name="operacion"  type="submit" value="Rectangulo" class="waves-effect waves-light btn">
        </div>
        
        
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
    </script>
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
<br/> <br/> <br/> <br/> <br/> <br/>

{include file="Cabecera/Footer.tpl"}