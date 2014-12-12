<div class="mfweatherstations index">
	<h2><?php echo __('Mfweatherstations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('StationID'); ?></th>
			<th><?php echo $this->Paginator->sort('StationType'); ?></th>
			<th><?php echo $this->Paginator->sort('StationName'); ?></th>
			<th><?php echo $this->Paginator->sort('Latitude'); ?></th>
			<th><?php echo $this->Paginator->sort('Longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('SourceURL'); ?></th>
			<th><?php echo $this->Paginator->sort('Metadata'); ?></th>
			<th><?php echo $this->Paginator->sort('Comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfweatherstations as $mfweatherstation): ?>
	<tr>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['StationID']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['StationType']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['StationName']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['Latitude']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['Longitude']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['SourceURL']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['Metadata']); ?>&nbsp;</td>
		<td><?php echo h($mfweatherstation['Mfweatherstation']['Comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfweatherstation['Mfweatherstation']['StationID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfweatherstation['Mfweatherstation']['StationID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfweatherstation['Mfweatherstation']['StationID']), array(), __('Are you sure you want to delete # %s?', $mfweatherstation['Mfweatherstation']['StationID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfweatherstation'), array('action' => 'add')); ?></li>
	</ul>
</div>
