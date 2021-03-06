{include file="Cabeceras/Header.tpl"}
<div class="container" align="center">
<div class="col 7" align="center">
<h1>Ingresa el DPI del Paciente...</h1>
<form method="POST" action="?controller=Secre&method=PacienteE">
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
        <th>Nombre</th>
        <th>Apellido</th>
        <th>DPI</th>
        <th>Especialidad Medica</th>
        <th>Fecha</th>
      </tr>
    </thead>
    {foreach from=$paci item=$pa}
    <tr>
      <td>{$pa['Nombre']}</td>
      <td>{$pa['Apellido']}</td>
      <td>{$pa['DPI']}</td>
      <td>{$pa['EspecialidadMedica']}</td>
      <td>{$pa['Fecha']}</td>
    </tr>
    {/foreach}
  

</body>
</thead>
</table>
</div>
{include file="Cabeceras/Footer.tpl"}