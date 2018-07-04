<div class="members form">
<?php echo $this->Form->create('Member'); ?>
	<fieldset>
		<legend><?php echo __('Edit Member'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('sex');
		echo $this->Form->input('company');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('country');
		echo $this->Form->input('tel');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('uid');
		echo $this->Form->input('pwd');
		echo $this->Form->input('status');
		echo $this->Form->input('date_added');
		echo $this->Form->input('last_modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Member.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Member.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders'), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
