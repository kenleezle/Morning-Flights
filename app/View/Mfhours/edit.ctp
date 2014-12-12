<div class="mfhours form">
<?php echo $this->Form->create('Mfhour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mfhour'); ?></legend>
	<?php
		echo $this->Form->input('HoursID');
		echo $this->Form->input('DateID');
		echo $this->Form->input('HourNum');
		echo $this->Form->input('HourTime');
		echo $this->Form->input('Minutes');
		echo $this->Form->input('Comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mfhour.HoursID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mfhour.HoursID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcountdates'), array('controller' => 'mfcountdates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcountdate'), array('controller' => 'mfcountdates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounts'), array('controller' => 'mfcounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcount'), array('controller' => 'mfcounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
