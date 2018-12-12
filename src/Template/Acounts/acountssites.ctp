<!-- File: src/Template/Acounts/index.ctp -->

<h3 class="text-center  font-weight-bold border-bottom text-primary mt-3">Cuentas de sitios</h3>

<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <?= $this->Html->link('Agregar cuenta de sitio', array('action' => 'add'),array('class' => 'btn btn-secondary')) ?>
  </div>
  <div class="input-group">
    <div class="input-group-prepend">
      <div class="input-group-text" id="btnGroupAddon">Buscar</div>
    </div>
    <input type="text" class="form-control" placeholder="..." aria-label="Buscar" aria-describedby="btnGroupAddon">
  </div>
</div>



    <div class="card-columns">
        <?php foreach ($acounts as $acount): ?>
        <div class="card">
            <div class="card-header"> 
                <?= $acount->site->site ?>
            </div>
            <div class="card-body" style="min-height:5.5em;">
                    <?= $this->Html->link($acount->site->url, $acount->site->url) ?>
            </div> 
            <div class="card-footer">
                <p>
                    <?= $acount->name ?>
                </P>
                <p>
                    <?= $acount->password ?>
                </p>

                <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <?= $this->Html->link('Editar', ['action' => 'edit', $acount->id],array('class' => 'btn btn-secondary')) ?>
                        <?= $this->Form->postLink(
                        'Borrar',
                        ['action' => 'delete', $acount->id],array('class' => 'btn btn-secondary'),  
                        ['confirm' => '¿Estas seguro?'])
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>