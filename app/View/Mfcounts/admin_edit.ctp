<div class="mfcounts form">
<?php echo $this->Form->create('Mfcount'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Mfcount'); ?></legend>
	<?php
		echo $this->Form->input('CountID');
		echo $this->Form->input('HoursID');
		echo $this->Form->input('SpeciesID');
		echo $this->Form->input('SpeciesCount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mfcount.CountID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mfcount.CountID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcounts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfspecies'), array('controller' => 'mfspecies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfspecy'), array('controller' => 'mfspecies', 'action' => 'add')); ?> </li>
	</ul>
</div>
