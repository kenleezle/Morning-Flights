<div class="mfcounts view">
<h2><?php echo __('Mfcount'); ?></h2>
	<dl>
		<dt><?php echo __('CountID'); ?></dt>
		<dd>
			<?php echo h($mfcount['Mfcount']['CountID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfhour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mfcount['Mfhour']['HoursID'], array('controller' => 'mfhours', 'action' => 'view', $mfcount['Mfhour']['HoursID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpeciesID'); ?></dt>
		<dd>
			<?php echo h($mfcount['Mfcount']['SpeciesID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SpeciesCount'); ?></dt>
		<dd>
			<?php echo h($mfcount['Mfcount']['SpeciesCount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfcount'), array('action' => 'edit', $mfcount['Mfcount']['CountID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfcount'), array('action' => 'delete', $mfcount['Mfcount']['CountID']), array(), __('Are you sure you want to delete # %s?', $mfcount['Mfcount']['CountID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcount'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfspecies'), array('controller' => 'mfspecies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfspecy'), array('controller' => 'mfspecies', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Mfspecies'); ?></h3>
	<?php if (!empty($mfcount['Mfspecy'])): ?>
		<dl>
			<dt><?php echo __('SpeciesID'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['SpeciesID']; ?>
&nbsp;</dd>
		<dt><?php echo __('FamilySci'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['FamilySci']; ?>
&nbsp;</dd>
		<dt><?php echo __('FamilyCommon'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['FamilyCommon']; ?>
&nbsp;</dd>
		<dt><?php echo __('Genus'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['Genus']; ?>
&nbsp;</dd>
		<dt><?php echo __('SpeciesSci'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['SpeciesSci']; ?>
&nbsp;</dd>
		<dt><?php echo __('SpeciesCommon'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['SpeciesCommon']; ?>
&nbsp;</dd>
		<dt><?php echo __('FormSwitch'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['FormSwitch']; ?>
&nbsp;</dd>
		<dt><?php echo __('FormRank'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['FormRank']; ?>
&nbsp;</dd>
		<dt><?php echo __('TaxonRank'); ?></dt>
		<dd>
	<?php echo $mfcount['Mfspecy']['TaxonRank']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Mfspecy'), array('controller' => 'mfspecies', 'action' => 'edit', $mfcount['Mfspecy']['SpeciesID'])); ?></li>
			</ul>
		</div>
	</div>
	