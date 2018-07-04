<div class="newproducts form">
<?php echo $this->Form->create('Newproduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Newproduct'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('sort');
		echo $this->Form->input('status');
		echo $this->Form->input('date_added');
		echo $this->Form->input('last_modified');
		echo $this->Form->input('lang');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Newproduct.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Newproduct.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Newproducts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
