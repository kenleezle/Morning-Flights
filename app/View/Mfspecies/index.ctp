<div class="mfspecies index">
	<h2><?php echo __('Mfspecies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('SpeciesID'); ?></th>
			<th><?php echo $this->Paginator->sort('FamilySci'); ?></th>
			<th><?php echo $this->Paginator->sort('FamilyCommon'); ?></th>
			<th><?php echo $this->Paginator->sort('Genus'); ?></th>
			<th><?php echo $this->Paginator->sort('SpeciesSci'); ?></th>
			<th><?php echo $this->Paginator->sort('SpeciesCommon'); ?></th>
			<th><?php echo $this->Paginator->sort('FormSwitch'); ?></th>
			<th><?php echo $this->Paginator->sort('FormRank'); ?></th>
			<th><?php echo $this->Paginator->sort('TaxonRank'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfspecies as $mfspecy): ?>
	<tr>
		<td><?php echo h($mfspecy['Mfspecy']['SpeciesID']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['FamilySci']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['FamilyCommon']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['Genus']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['SpeciesSci']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['SpeciesCommon']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['FormSwitch']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['FormRank']); ?>&nbsp;</td>
		<td><?php echo h($mfspecy['Mfspecy']['TaxonRank']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfspecy['Mfspecy']['SpeciesID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfspecy['Mfspecy']['SpeciesID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfspecy['Mfspecy']['SpeciesID']), array(), __('Are you sure you want to delete # %s?', $mfspecy['Mfspecy']['SpeciesID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Mfspecy'), array('action' => 'add')); ?></li>
	</ul>
</div>
