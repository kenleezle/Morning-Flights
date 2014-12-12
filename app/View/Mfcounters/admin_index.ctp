<div class="mfcounters index">
	<h2><?php echo __('Mfcounters'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CounterID'); ?></th>
			<th><?php echo $this->Paginator->sort('CountFirst'); ?></th>
			<th><?php echo $this->Paginator->sort('CountMid'); ?></th>
			<th><?php echo $this->Paginator->sort('CountLast'); ?></th>
			<th><?php echo $this->Paginator->sort('CountEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('CountComments'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mfcounters as $mfcounter): ?>
	<tr>
		<td><?php echo h($mfcounter['Mfcounter']['CounterID']); ?>&nbsp;</td>
		<td><?php echo h($mfcounter['Mfcounter']['CountFirst']); ?>&nbsp;</td>
		<td><?php echo h($mfcounter['Mfcounter']['CountMid']); ?>&nbsp;</td>
		<td><?php echo h($mfcounter['Mfcounter']['CountLast']); ?>&nbsp;</td>
		<td><?php echo h($mfcounter['Mfcounter']['CountEmail']); ?>&nbsp;</td>
		<td><?php echo h($mfcounter['Mfcounter']['CountComments']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mfcounter['Mfcounter']['CounterID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mfcounter['Mfcounter']['CounterID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mfcounter['Mfcounter']['CounterID']), array(), __('Are you sure you want to delete # %s?', $mfcounter['Mfcounter']['CounterID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Mfcounter'), array('action' => 'add')); ?></li>
	</ul>
</div>
