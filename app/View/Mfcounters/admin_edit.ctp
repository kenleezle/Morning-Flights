<div class="mfcounters form">
<?php echo $this->Form->create('Mfcounter'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Mfcounter'); ?></legend>
	<?php
		echo $this->Form->input('CounterID');
		echo $this->Form->input('CountFirst');
		echo $this->Form->input('CountMid');
		echo $this->Form->input('CountLast');
		echo $this->Form->input('CountEmail');
		echo $this->Form->input('CountComments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mfcounter.CounterID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mfcounter.CounterID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcounters'), array('action' => 'index')); ?></li>
	</ul>
</div>
