{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Ver pacientes</h1>

<br/>
<br/>
    <form  method="POST" action="" class="col s12">
      <div class="row">
        
        
        <table class="striped">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>DPI</th>
              <th>Especialidad Medica</th>
              <th>Fecha</th>
            </tr>
          </thead>
          {foreach from=$pacientes item=$p}
          <tr>
          <td>{$p['Nombre']}</td>
            <td>{$p['DPI']}</td>
            <td>{$p['EspecialidadMedica']}</td>
            <td>{$p['Fecha']}</td>
          </tr>
          {/foreach}

        
        </body>
          
        </tbody>
      </table>
      </div>
    </form>
  </div>
{include file="Cabeceras/Footer.tpl"}