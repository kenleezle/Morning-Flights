<div class="ncdcweathers index">
	<h2><?php echo __('Ncdcweathers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('NCDCID'); ?></th>
			<th><?php echo $this->Paginator->sort('HoursID'); ?></th>
			<th><?php echo $this->Paginator->sort('StationID'); ?></th>
			<th><?php echo $this->Paginator->sort('WeatherTime'); ?></th>
			<th><?php echo $this->Paginator->sort('SkyCondition'); ?></th>
			<th><?php echo $this->Paginator->sort('SkyConditionFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('Visibility'); ?></th>
			<th><?php echo $this->Paginator->sort('VisibilityFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('WeatherType'); ?></th>
			<th><?php echo $this->Paginator->sort('WeatherTypeFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DryBulbFarenheit'); ?></th>
			<th><?php echo $this->Paginator->sort('DryBulbFarenheitFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DryBulbCelsius'); ?></th>
			<th><?php echo $this->Paginator->sort('DryBulbCelsiusFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('WetBulbFarenheit'); ?></th>
			<th><?php echo $this->Paginator->sort('WetBulbFarenheitFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('WetBulbCelsius'); ?></th>
			<th><?php echo $this->Paginator->sort('WetBulbCelsiusFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointFarenheit'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointFarenheitFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointCelsius'); ?></th>
			<th><?php echo $this->Paginator->sort('DewPointCelsiusFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('RelativeHumidity'); ?></th>
			<th><?php echo $this->Paginator->sort('RelativeHumidityFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('WindSpeed'); ?></th>
			<th><?php echo $this->Paginator->sort('WindSpeedFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirection'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirectionFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('ValueforWindCharacter'); ?></th>
			<th><?php echo $this->Paginator->sort('ValueforWindCharacterFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('StationPressure'); ?></th>
			<th><?php echo $this->Paginator->sort('StationPressureFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('PressureTendency'); ?></th>
			<th><?php echo $this->Paginator->sort('PressureTendencyFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('PressureChange'); ?></th>
			<th><?php echo $this->Paginator->sort('PressureChangeFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('SeaLevelPressure'); ?></th>
			<th><?php echo $this->Paginator->sort('SeaLevelPressureFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('RecordType'); ?></th>
			<th><?php echo $this->Paginator->sort('RecordTypeFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('HourlyPrecip'); ?></th>
			<th><?php echo $this->Paginator->sort('HourlyPrecipFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('Altimeter'); ?></th>
			<th><?php echo $this->Paginator->sort('AltimeterFlag'); ?></th>
			<th><?php echo $this->Paginator->sort('Comments'); ?></th>
			<th><?php echo $this->Paginator->sort('WindDirAlpha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ncdcweathers as $ncdcweather): ?>
	<tr>
		<td><?php echo h($ncdcweather['Ncdcweather']['NCDCID']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['HoursID']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['StationID']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WeatherTime']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['SkyCondition']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['SkyConditionFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['Visibility']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['VisibilityFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WeatherType']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WeatherTypeFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DryBulbFarenheit']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DryBulbFarenheitFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DryBulbCelsius']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DryBulbCelsiusFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WetBulbFarenheit']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WetBulbFarenheitFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WetBulbCelsius']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WetBulbCelsiusFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DewPointFarenheit']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DewPointFarenheitFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DewPointCelsius']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['DewPointCelsiusFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['RelativeHumidity']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['RelativeHumidityFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WindSpeed']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WindSpeedFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WindDirection']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WindDirectionFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['ValueforWindCharacter']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['ValueforWindCharacterFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['StationPressure']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['StationPressureFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['PressureTendency']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['PressureTendencyFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['PressureChange']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['PressureChangeFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['SeaLevelPressure']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['SeaLevelPressureFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['RecordType']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['RecordTypeFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['HourlyPrecip']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['HourlyPrecipFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['Altimeter']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['AltimeterFlag']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['Comments']); ?>&nbsp;</td>
		<td><?php echo h($ncdcweather['Ncdcweather']['WindDirAlpha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ncdcweather['Ncdcweather']['NCDCID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ncdcweather['Ncdcweather']['NCDCID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ncdcweather['Ncdcweather']['NCDCID']), array(), __('Are you sure you want to delete # %s?', $ncdcweather['Ncdcweather']['NCDCID'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ncdcweather'), array('action' => 'add')); ?></li>
	</ul>
</div>
