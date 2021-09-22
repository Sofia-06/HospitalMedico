{include file="Cabeceras/Header.tpl"}
<div class="row">
<h1>Actualizar salas</h1>
    <form  method="POST" action="?controller=Doc&method=ActSalas" class="col s12">

    <div class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="estado">
          <label for="icon_prefix">Estado de la sala:</label>
        </div>
    </div>
    
    <div class="row">
        <div class="input-field col s12">
        <select class="browser-default" name="sala">
        {foreach from=$actualizarsalas item=$s}
            <option value="{$s['idSalas']}">{$s['Nombre']}</option>
        {/foreach}
        <label for="sala">Sala</label>
        </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="row">
            <div class="input-field col s12">
                <input class="btn waves-effect waves-light" type="submit" name="action">
            </div>
    </div>
    </form>
  </div>
  </div>
{include file="Cabeceras/Header.tpl"}