<div class="mfcountdates view">
<h2><?php echo __('Mfcountdate'); ?></h2>
	<dl>
		<dt><?php echo __('DateID'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['DateID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MFDate'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['MFDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sunrise'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['Sunrise']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BeginTime'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['BeginTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EndTime'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['EndTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CounterID'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['CounterID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($mfcountdate['Mfcountdate']['Comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfcountdate'), array('action' => 'edit', $mfcountdate['Mfcountdate']['DateID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfcountdate'), array('action' => 'delete', $mfcountdate['Mfcountdate']['DateID']), array(), __('Are you sure you want to delete # %s?', $mfcountdate['Mfcountdate']['DateID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcountdates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcountdate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounters'), array('controller' => 'mfcounters', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcounter'), array('controller' => 'mfcounters', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('controller' => 'mfhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Mfcounters'); ?></h3>
	<?php if (!empty($mfcountdate['Mfcounter'])): ?>
		<dl>
			<dt><?php echo __('CounterID'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CounterID']; ?>
&nbsp;</dd>
		<dt><?php echo __('CountFirst'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CountFirst']; ?>
&nbsp;</dd>
		<dt><?php echo __('CountMid'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CountMid']; ?>
&nbsp;</dd>
		<dt><?php echo __('CountLast'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CountLast']; ?>
&nbsp;</dd>
		<dt><?php echo __('CountEmail'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CountEmail']; ?>
&nbsp;</dd>
		<dt><?php echo __('CountComments'); ?></dt>
		<dd>
	<?php echo $mfcountdate['Mfcounter']['CountComments']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Mfcounter'), array('controller' => 'mfcounters', 'action' => 'edit', $mfcountdate['Mfcounter']['CounterID'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Mfhours'); ?></h3>
	<?php if (!empty($mfcountdate['Mfhour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('HoursID'); ?></th>
		<th><?php echo __('DateID'); ?></th>
		<th><?php echo __('HourNum'); ?></th>
		<th><?php echo __('HourTime'); ?></th>
		<th><?php echo __('Minutes'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mfcountdate['Mfhour'] as $mfhour): ?>
		<tr>
			<td><?php echo $mfhour['HoursID']; ?></td>
			<td><?php echo $mfhour['DateID']; ?></td>
			<td><?php echo $mfhour['HourNum']; ?></td>
			<td><?php echo $mfhour['HourTime']; ?></td>
			<td><?php echo $mfhour['Minutes']; ?></td>
			<td><?php echo $mfhour['Comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mfhours', 'action' => 'view', $mfhour['HoursID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mfhours', 'action' => 'edit', $mfhour['HoursID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mfhours', 'action' => 'delete', $mfhour['HoursID']), array(), __('Are you sure you want to delete # %s?', $mfhour['HoursID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mfhour'), array('controller' => 'mfhours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
