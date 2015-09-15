<h1>Actualizar datos</h1>
<div class="form">    
    <?php $form= $this->beginWidget('booster.widgets.TbActiveForm',array('id' => 'verticalForm',)); ?>
    <div class="label_original">
        <h2>Empresa: <?php echo $empresa_original ?> </h2>            
    </div>
    <div class="dato_nuevo">
        <?php 
                $this->widget('booster.widgets.TbGridView', array(
                    'id' => 'dispositivo-grid-list',
                    'dataProvider' => $empresa->search(),
                    'filter' => $empresa,
                    'columns' => array(                        
                        array(
                            'name' => 'cuit',
                            'header'=>'CUIT',                                                        
                        ),
                        array(                            
                            'name' => 'razonsocial',
                            'header'=>'Razon Social'
                        ),
                         array(
                            'id' => 'selecteempresa',
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 1, //Numero de filas que se pueden seleccionar
                        ),                        
                    ),
                    
                ));                
            ?>   
    </div>
    <div class="label_original">
        <h2>Dispositivo: <?php echo $dispositivo_original ?> </h2>            
    </div>
    <div class="dato_nuevo">
        <?php 
                $this->widget('booster.widgets.TbGridView', array(
                    'id' => 'dispositivo-grid-list',
                    'dataProvider' => $dispositivo->search(),
                    'filter' => $dispositivo,
                    'columns' => array(                        
                        array(
                            'name' => 'id_dis',
                            'header'=>'ID',
                                                        
                        ),
                        array(
                            'name' => 'mac',
                            'header'=>'MAC'
                        ),
                         array(
                            'id' => 'selectedispo',
                            'class' => 'CCheckBoxColumn',
                            'selectableRows' => 1, //Numero de filas que se pueden seleccionar
                        ),                        
                    ),
                    
                ));                
            ?>   
    </div>
    <div class="dato_nuevo">
        <?php echo $form->textAreaGroup(
			$histoasignacion,
			'observacion',
			array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'widgetOptions' => array(
					'htmlOptions' => array('rows' => 5),
				)
			)
		); ?>
    </div>
    
       
    <div class="boton">
        <?php $this->widget('booster.widgets.TbButton', 
                array(
                    'label' => 'Actualizar',
                    'context' => 'success',                    
                    'buttonType'=>'submit', 
                    'htmlOptions' => array(
                            'name'=>'ActionButton',
                            'confirm' => 'Desea realizar los cambios?',
                    ),
                    )); 
        ?>        
    </div>
    <?php $this->endWidget(); ?>    
</div>