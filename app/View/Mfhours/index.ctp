<div class="mfhours index">
	<h2><?php echo __('Mfhours'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('HoursID'); ?></th>
			<th><?php echo $this->Paginator->sort('DateID'); ?></th>
			<th><?php echo $this->Paginator->sort('HourNum'); ?></th>
			<th><?php echo $this->Paginator->sort('HourTime'); ?></th>
			<th><?php echo $this->Paginator->sort('Minutes'); ?></th>
			<th><?php echo $this->Paginator->sort('Comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfhours as $mfhour): ?>
	<tr>
		<td><?php echo h($mfhour['Mfhour']['HoursID']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mfhour['Mfcountdate']['DateID'], array('controller' => 'mfcountdates', 'action' => 'view', $mfhour['Mfcountdate']['DateID'])); ?>
		</td>
		<td><?php echo h($mfhour['Mfhour']['HourNum']); ?>&nbsp;</td>
		<td><?php echo h($mfhour['Mfhour']['HourTime']); ?>&nbsp;</td>
		<td><?php echo h($mfhour['Mfhour']['Minutes']); ?>&nbsp;</td>
		<td><?php echo h($mfhour['Mfhour']['Comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfhour['Mfhour']['HoursID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfhour['Mfhour']['HoursID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfhour['Mfhour']['HoursID']), array(), __('Are you sure you want to delete # %s?', $mfhour['Mfhour']['HoursID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfhour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcountdates'), array('controller' => 'mfcountdates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcountdate'), array('controller' => 'mfcountdates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounts'), array('controller' => 'mfcounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcount'), array('controller' => 'mfcounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
