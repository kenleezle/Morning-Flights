<div class="mfspecies view">
<h2><?php echo __('Mfspecy'); ?></h2>
	<dl>
		<dt><?php echo __('SpeciesID'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['SpeciesID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilySci'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['FamilySci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FamilyCommon'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['FamilyCommon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genus'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['Genus']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpeciesSci'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['SpeciesSci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpeciesCommon'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['SpeciesCommon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FormSwitch'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['FormSwitch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FormRank'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['FormRank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TaxonRank'); ?></dt>
		<dd>
			<?php echo h($mfspecy['Mfspecy']['TaxonRank']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfspecy'), array('action' => 'edit', $mfspecy['Mfspecy']['SpeciesID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfspecy'), array('action' => 'delete', $mfspecy['Mfspecy']['SpeciesID']), array(), __('Are you sure you want to delete # %s?', $mfspecy['Mfspecy']['SpeciesID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfspecies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfspecy'), array('action' => 'add')); ?> </li>
	</ul>
</div>
