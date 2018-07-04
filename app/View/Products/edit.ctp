<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('parent');
		echo $this->Form->input('subject');
		echo $this->Form->input('detail_short');
		echo $this->Form->input('detail');
		echo $this->Form->input('image');
		echo $this->Form->input('image_large');
		echo $this->Form->input('sort');
		echo $this->Form->input('status');
		echo $this->Form->input('date_added');
		echo $this->Form->input('last_modified');
		echo $this->Form->input('lang');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Product.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Newproducts'), array('controller' => 'newproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newproduct'), array('controller' => 'newproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderdetails'), array('controller' => 'orderdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderdetail'), array('controller' => 'orderdetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialproducts'), array('controller' => 'specialproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialproduct'), array('controller' => 'specialproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>
