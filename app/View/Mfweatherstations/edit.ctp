<div class="mfweatherstations form">
<?php echo $this->Form->create('Mfweatherstation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mfweatherstation'); ?></legend>
	<?php
		echo $this->Form->input('StationID');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mfweatherstation.StationID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mfweatherstation.StationID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mfweatherstations'), array('action' => 'index')); ?></li>
	</ul>
</div>
