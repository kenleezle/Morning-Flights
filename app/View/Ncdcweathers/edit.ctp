<div class="ncdcweathers form">
<?php echo $this->Form->create('Ncdcweather'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ncdcweather'); ?></legend>
	<?php
		echo $this->Form->input('NCDCID');
		echo $this->Form->input('HoursID');
		echo $this->Form->input('StationID');
		echo $this->Form->input('WeatherTime');
		echo $this->Form->input('SkyCondition');
		echo $this->Form->input('SkyConditionFlag');
		echo $this->Form->input('Visibility');
		echo $this->Form->input('VisibilityFlag');
		echo $this->Form->input('WeatherType');
		echo $this->Form->input('WeatherTypeFlag');
		echo $this->Form->input('DryBulbFarenheit');
		echo $this->Form->input('DryBulbFarenheitFlag');
		echo $this->Form->input('DryBulbCelsius');
		echo $this->Form->input('DryBulbCelsiusFlag');
		echo $this->Form->input('WetBulbFarenheit');
		echo $this->Form->input('WetBulbFarenheitFlag');
		echo $this->Form->input('WetBulbCelsius');
		echo $this->Form->input('WetBulbCelsiusFlag');
		echo $this->Form->input('DewPointFarenheit');
		echo $this->Form->input('DewPointFarenheitFlag');
		echo $this->Form->input('DewPointCelsius');
		echo $this->Form->input('DewPointCelsiusFlag');
		echo $this->Form->input('RelativeHumidity');
		echo $this->Form->input('RelativeHumidityFlag');
		echo $this->Form->input('WindSpeed');
		echo $this->Form->input('WindSpeedFlag');
		echo $this->Form->input('WindDirection');
		echo $this->Form->input('WindDirectionFlag');
		echo $this->Form->input('ValueforWindCharacter');
		echo $this->Form->input('ValueforWindCharacterFlag');
		echo $this->Form->input('StationPressure');
		echo $this->Form->input('StationPressureFlag');
		echo $this->Form->input('PressureTendency');
		echo $this->Form->input('PressureTendencyFlag');
		echo $this->Form->input('PressureChange');
		echo $this->Form->input('PressureChangeFlag');
		echo $this->Form->input('SeaLevelPressure');
		echo $this->Form->input('SeaLevelPressureFlag');
		echo $this->Form->input('RecordType');
		echo $this->Form->input('RecordTypeFlag');
		echo $this->Form->input('HourlyPrecip');
		echo $this->Form->input('HourlyPrecipFlag');
		echo $this->Form->input('Altimeter');
		echo $this->Form->input('AltimeterFlag');
		echo $this->Form->input('Comments');
		echo $this->Form->input('WindDirAlpha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ncdcweather.NCDCID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ncdcweather.NCDCID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ncdcweathers'), array('action' => 'index')); ?></li>
	</ul>
</div>
