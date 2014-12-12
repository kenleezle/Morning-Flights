<div class="mfcounts index">
	<h2><?php echo __('Mfcounts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CountID'); ?></th>
			<th><?php echo $this->Paginator->sort('HoursID'); ?></th>
			<th><?php echo $this->Paginator->sort('SpeciesID'); ?></th>
			<th><?php echo $this->Paginator->sort('SpeciesCount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfcounts as $mfcount): ?>
	<tr>
		<td><?php echo h($mfcount['Mfcount']['CountID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mfcount['Mfhour']['HoursID'], array('controller' => 'mfhours', 'action' => 'view', $mfcount['Mfhour']['HoursID'])); ?>
		</td>
		<td><?php echo h($mfcount['Mfcount']['SpeciesID']); ?>&nbsp;</td>
		<td><?php echo h($mfcount['Mfcount']['SpeciesCount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfcount['Mfcount']['CountID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfcount['Mfcount']['CountID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfcount['Mfcount']['CountID']), array(), __('Are you sure you want to delete # %s?', $mfcount['Mfcount']['CountID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfcount'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfspecies'), array('controller' => 'mfspecies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfspecy'), array('controller' => 'mfspecies', 'action' => 'add')); ?> </li>
	</ul>
</div>
