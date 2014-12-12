<div class="mfcountdates form">
<?php echo $this->Form->create('Mfcountdate'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Mfcountdate'); ?></legend>
	<?php
		echo $this->Form->input('MFDate');
		echo $this->Form->input('Sunrise');
		echo $this->Form->input('BeginTime');
		echo $this->Form->input('EndTime');
		echo $this->Form->input('CounterID');
		echo $this->Form->input('Comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mfcountdates'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcounters'), array('controller' => 'mfcounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcounter'), array('controller' => 'mfcounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
	</ul>
</div>
