<div class="mfweatherstations view">
<h2><?php echo __('Mfweatherstation'); ?></h2>
	<dl>
		<dt><?php echo __('StationID'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['StationID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StationType'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['StationType']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('StationName'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['StationName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Latitude'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['Latitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Longitude'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['Longitude']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('SourceURL'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['SourceURL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Metadata'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['Metadata']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($mfweatherstation['Mfweatherstation']['Comments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfweatherstation'), array('action' => 'edit', $mfweatherstation['Mfweatherstation']['StationID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfweatherstation'), array('action' => 'delete', $mfweatherstation['Mfweatherstation']['StationID']), array(), __('Are you sure you want to delete # %s?', $mfweatherstation['Mfweatherstation']['StationID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfweatherstations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfweatherstation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
