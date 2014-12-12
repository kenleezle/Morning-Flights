<div class="mfcounters view">
<h2><?php echo __('Mfcounter'); ?></h2>
	<dl>
		<dt><?php echo __('CounterID'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CounterID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountFirst'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CountFirst']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountMid'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CountMid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountLast'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CountLast']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountEmail'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CountEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CountComments'); ?></dt>
		<dd>
			<?php echo h($mfcounter['Mfcounter']['CountComments']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mfcounter'), array('action' => 'edit', $mfcounter['Mfcounter']['CounterID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mfcounter'), array('action' => 'delete', $mfcounter['Mfcounter']['CounterID']), array(), __('Are you sure you want to delete # %s?', $mfcounter['Mfcounter']['CounterID'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfcounters'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfcounter'), array('action' => 'add')); ?> </li>
	</ul>
</div>
