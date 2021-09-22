{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Disponibilidad de las salas</h1>
    <form  method="POST" action="" class="col s12">
    <table>
    <thead>
      <tr>
          <th>Número de sala</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Disponibilidad</th>
      </tr>
    </thead>
      {foreach from=$sal item=$sa}
        <tr>
        <td>{$sa['idSalas']}</td>
          <td>{$sa['Nombre']}</td>
          <td>{$sa['Descripcion']}</td>
          <td>{$sa['Estado']}</td>
        </tr>
        {/foreach}
    <tbody>
    </tbody>
  </table>
    </form>
  </div>
{include file="Cabeceras/Header.tpl"}