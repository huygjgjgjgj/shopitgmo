<div class="newproducts view">
<h2><?php echo __('Newproduct'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($newproduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $newproduct['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['date_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($newproduct['Newproduct']['lang']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Newproduct'), array('action' => 'edit', $newproduct['Newproduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Newproduct'), array('action' => 'delete', $newproduct['Newproduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $newproduct['Newproduct']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Newproducts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newproduct'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
