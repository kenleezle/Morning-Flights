<div class="wcmweathers index">
	<h2><?php echo __('Wcmweathers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('WCMID'); ?></th>
			<th><?php echo $this->Paginator->sort('HoursID'); ?></th>
			<th><?php echo $this->Paginator->sort('StationID'); ?></th>
			<th><?php echo $this->Paginator->sort('WeatherTime'); ?></th>
			<th><?php echo $this->Paginator->sort('TempAvg'); ?></th>
			<th><?php echo $this->Paginator->sort('TempMin'); ?></th>
			<th><?php echo $this->Paginator->sort('TempMax'); ?></th>
			<th><?php echo $this->Paginator->sort('RelHumAvg'); ?></th>
			<th><?php echo $this->Paginator->sort('RelHumMin'); ?></th>
			<th><?php echo $this->Paginator->sort('RelHumMax'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointAvg'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointMin'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointMax'); ?></th>
			<th><?php echo $this->Paginator->sort('Precip'); ?></th>
			<th><?php echo $this->Paginator->sort('WindSpeedAvg'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirAvg'); ?></th>
			<th><?php echo $this->Paginator->sort('WindSpeedMax'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirMax'); ?></th>
			<th><?php echo $this->Paginator->sort('Comments'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirAlpha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wcmweathers as $wcmweather): ?>
	<tr>
		<td><?php echo h($wcmweather['Wcmweather']['WCMID']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['HoursID']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['StationID']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WeatherTime']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['TempAvg']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['TempMin']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['TempMax']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['RelHumAvg']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['RelHumMin']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['RelHumMax']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['DewPointAvg']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['DewPointMin']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['DewPointMax']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['Precip']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WindSpeedAvg']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WindDirAvg']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WindSpeedMax']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WindDirMax']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['Comments']); ?>&nbsp;</td>
		<td><?php echo h($wcmweather['Wcmweather']['WindDirAlpha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wcmweather['Wcmweather']['WCMID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wcmweather['Wcmweather']['WCMID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wcmweather['Wcmweather']['WCMID']), array(), __('Are you sure you want to delete # %s?', $wcmweather['Wcmweather']['WCMID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wcmweather'), array('action' => 'add')); ?></li>
	</ul>
</div>
