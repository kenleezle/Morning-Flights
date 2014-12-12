<div class="mfhours view">
<h2><?php echo __('Mfhour'); ?></h2>
	<dl>
		<dt><?php echo __('HoursID'); ?></dt>
		<dd>
			<?php echo h($mfhour['Mfhour']['HoursID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mfcountdate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mfhour['Mfcountdate']['DateID'], array('controller' => 'mfcountdates', 'action' => 'view', $mfhour['Mfcountdate']['DateID'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HourNum'); ?></dt>
		<dd>
			<?php echo h($mfhour['Mfhour']['HourNum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HourTime'); ?></dt>
		<dd>
			<?php echo h($mfhour['Mfhour']['HourTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minutes'); ?></dt>
		<dd>
			<?php echo h($mfhour['Mfhour']['Minutes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($mfhour['Mfhour']['Comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfhour'), array('action' => 'edit', $mfhour['Mfhour']['HoursID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfhour'), array('action' => 'delete', $mfhour['Mfhour']['HoursID']), array(), __('Are you sure you want to delete # %s?', $mfhour['Mfhour']['HoursID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfhours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfhour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcountdates'), array('controller' => 'mfcountdates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcountdate'), array('controller' => 'mfcountdates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounts'), array('controller' => 'mfcounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcount'), array('controller' => 'mfcounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Mfcounts'); ?></h3>
	<?php if (!empty($mfhour['Mfcount'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('CountID'); ?></th>
		<th><?php echo __('HoursID'); ?></th>
		<th><?php echo __('SpeciesID'); ?></th>
		<th><?php echo __('SpeciesCount'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($mfhour['Mfcount'] as $mfcount): ?>
		<tr>
			<td><?php echo $mfcount['CountID']; ?></td>
			<td><?php echo $mfcount['HoursID']; ?></td>
			<td><?php echo $mfcount['SpeciesID']; ?></td>
			<td><?php echo $mfcount['SpeciesCount']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'mfcounts', 'action' => 'view', $mfcount['CountID'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'mfcounts', 'action' => 'edit', $mfcount['CountID'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mfcounts', 'action' => 'delete', $mfcount['CountID']), array(), __('Are you sure you want to delete # %s?', $mfcount['CountID'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Mfcount'), array('controller' => 'mfcounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
