<div class="contributions form">
<?php echo $this->Form->create('Contribution'); ?>
	<fieldset>
		<legend><?php echo __('Add Contribution'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('reward_id');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contributions'), array('action' => 'index')); ?></li>
	</ul>
</div>
