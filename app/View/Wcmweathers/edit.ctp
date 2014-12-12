<div class="wcmweathers form">
<?php echo $this->Form->create('Wcmweather'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wcmweather'); ?></legend>
	<?php
		echo $this->Form->input('WCMID');
		echo $this->Form->input('HoursID');
		echo $this->Form->input('StationID');
		echo $this->Form->input('WeatherTime');
		echo $this->Form->input('TempAvg');
		echo $this->Form->input('TempMin');
		echo $this->Form->input('TempMax');
		echo $this->Form->input('RelHumAvg');
		echo $this->Form->input('RelHumMin');
		echo $this->Form->input('RelHumMax');
		echo $this->Form->input('DewPointAvg');
		echo $this->Form->input('DewPointMin');
		echo $this->Form->input('DewPointMax');
		echo $this->Form->input('Precip');
		echo $this->Form->input('WindSpeedAvg');
		echo $this->Form->input('WindDirAvg');
		echo $this->Form->input('WindSpeedMax');
		echo $this->Form->input('WindDirMax');
		echo $this->Form->input('Comments');
		echo $this->Form->input('WindDirAlpha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wcmweather.WCMID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Wcmweather.WCMID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wcmweathers'), array('action' => 'index')); ?></li>
	</ul>
</div>
