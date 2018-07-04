<div class="specialproducts view">
<h2><?php echo __('Specialproduct'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($specialproduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $specialproduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['date_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($specialproduct['Specialproduct']['lang']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Specialproduct'), array('action' => 'edit', $specialproduct['Specialproduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Specialproduct'), array('action' => 'delete', $specialproduct['Specialproduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $specialproduct['Specialproduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialproducts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialproduct'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
