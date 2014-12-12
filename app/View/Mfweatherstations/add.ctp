<div class="mfweatherstations form">
<?php echo $this->Form->create('Mfweatherstation'); ?>
	<fieldset>
		<legend><?php echo __('Add Mfweatherstation'); ?></legend>
	<?php
		echo $this->Form->input('StationType');
		echo $this->Form->input('StationName');
		echo $this->Form->input('Latitude');
		echo $this->Form->input('Longitude');
		echo $this->Form->input('SourceURL');
		echo $this->Form->input('Metadata');
		echo $this->Form->input('Comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mfweatherstations'), array('action' => 'index')); ?></li>
	</ul>
</div>
