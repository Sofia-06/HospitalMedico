{include file="Cabeceras/Header.tpl"}
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente....</h1>
<form  method="POST" action="?controller=Doc&method=BuscHist">
  <div class="input-field col s6">
          <i class="material-icons prefix">chrome_reader_mode</i>
          <input id="icon_telephone" type="tel" class="validate" name="DPI">
          <label for="icon_telephone">DPI</label>
          
        </div>
        
        <div class="row">
            <div class="input-field col s6">
                <input class="btn waves-effect waves-light" type="submit"  name="action"/>
            </div>
            <br/>
        </div>
  </div>
</form>
<table class="striped">
    <thead>
      <tr>
        <th>DPI</th>
        <th>Diagnóstico</th>
        <th>Medicamentos</th>
        <th>Exámenes</th>
      </tr>
    </thead>
    {foreach from=$paci item=$h}
    <tr>
      <td>{$h['dpi']}</td>
      <td>{$h['diagnostico']}</td>
      <td>{$h['medicina']}</td>
      <td>{$h['examenes']}</td>
    </tr>
    {/foreach}
  
</body>


</table>
</div>

{include file="Cabeceras/Footer.tpl"}