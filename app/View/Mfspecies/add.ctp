<div class="mfspecies form">
<?php echo $this->Form->create('Mfspecy'); ?>
	<fieldset>
		<legend><?php echo __('Add Mfspecy'); ?></legend>
	<?php
		echo $this->Form->input('FamilySci');
		echo $this->Form->input('FamilyCommon');
		echo $this->Form->input('Genus');
		echo $this->Form->input('SpeciesSci');
		echo $this->Form->input('SpeciesCommon');
		echo $this->Form->input('FormSwitch');
		echo $this->Form->input('FormRank');
		echo $this->Form->input('TaxonRank');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Mfspecies'), array('action' => 'index')); ?></li>
	</ul>
</div>
