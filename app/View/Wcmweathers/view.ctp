<div class="wcmweathers view">
<h2><?php echo __('Wcmweather'); ?></h2>
	<dl>
		<dt><?php echo __('WCMID'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WCMID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('HoursID'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['HoursID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StationID'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['StationID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WeatherTime'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WeatherTime']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TempAvg'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['TempAvg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TempMin'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['TempMin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TempMax'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['TempMax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RelHumAvg'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['RelHumAvg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RelHumMin'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['RelHumMin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RelHumMax'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['RelHumMax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DewPointAvg'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['DewPointAvg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DewPointMin'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['DewPointMin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DewPointMax'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['DewPointMax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precip'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['Precip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WindSpeedAvg'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WindSpeedAvg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WindDirAvg'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WindDirAvg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WindSpeedMax'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WindSpeedMax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WindDirMax'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WindDirMax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['Comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('WindDirAlpha'); ?></dt>
		<dd>
			<?php echo h($wcmweather['Wcmweather']['WindDirAlpha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wcmweather'), array('action' => 'edit', $wcmweather['Wcmweather']['WCMID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wcmweather'), array('action' => 'delete', $wcmweather['Wcmweather']['WCMID']), array(), __('Are you sure you want to delete # %s?', $wcmweather['Wcmweather']['WCMID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wcmweathers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wcmweather'), array('action' => 'add')); ?> </li>
	</ul>
</div>
