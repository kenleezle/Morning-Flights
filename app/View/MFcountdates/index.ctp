<div class="mfcountdates index">
	<h2><?php echo __('Mfcountdates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('DateID'); ?></th>
			<th><?php echo $this->Paginator->sort('MFDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Sunrise'); ?></th>
			<th><?php echo $this->Paginator->sort('BeginTime'); ?></th>
			<th><?php echo $this->Paginator->sort('EndTime'); ?></th>
			<th><?php echo $this->Paginator->sort('CounterID'); ?></th>
			<th><?php echo $this->Paginator->sort('Comments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfcountdates as $mfcountdate): ?>
	<tr>
		<td><?php echo h($mfcountdate['Mfcountdate']['DateID']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['MFDate']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['Sunrise']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['BeginTime']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['EndTime']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['CounterID']); ?>&nbsp;</td>
		<td><?php echo h($mfcountdate['Mfcountdate']['Comments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfcountdate['Mfcountdate']['DateID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfcountdate['Mfcountdate']['DateID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfcountdate['Mfcountdate']['DateID']), array(), __('Are you sure you want to delete # %s?', $mfcountdate['Mfcountdate']['DateID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfcountdate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Mfcounters'), array('controller' => 'mfcounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcounter'), array('controller' => 'mfcounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
	</ul>
</div>
