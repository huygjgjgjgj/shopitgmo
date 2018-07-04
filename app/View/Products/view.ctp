<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($product['Product']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent'); ?></dt>
		<dd>
			<?php echo h($product['Product']['parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($product['Product']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail Short'); ?></dt>
		<dd>
			<?php echo h($product['Product']['detail_short']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($product['Product']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Large'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image_large']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($product['Product']['sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($product['Product']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($product['Product']['date_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($product['Product']['lang']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($product['Product']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $product['Product']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Newproducts'), array('controller' => 'newproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Newproduct'), array('controller' => 'newproducts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orderdetails'), array('controller' => 'orderdetails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Orderdetail'), array('controller' => 'orderdetails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Specialproducts'), array('controller' => 'specialproducts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Specialproduct'), array('controller' => 'specialproducts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Newproducts'); ?></h3>
	<?php if (!empty($product['Newproduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Sort'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Added'); ?></th>
		<th><?php echo __('Last Modified'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Newproduct'] as $newproduct): ?>
		<tr>
			<td><?php echo $newproduct['id']; ?></td>
			<td><?php echo $newproduct['product_id']; ?></td>
			<td><?php echo $newproduct['sort']; ?></td>
			<td><?php echo $newproduct['status']; ?></td>
			<td><?php echo $newproduct['date_added']; ?></td>
			<td><?php echo $newproduct['last_modified']; ?></td>
			<td><?php echo $newproduct['lang']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'newproducts', 'action' => 'view', $newproduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'newproducts', 'action' => 'edit', $newproduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'newproducts', 'action' => 'delete', $newproduct['id']), array('confirm' => __('Are you sure you want to delete # %s?', $newproduct['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Newproduct'), array('controller' => 'newproducts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Orderdetails'); ?></h3>
	<?php if (!empty($product['Orderdetail'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Orderdetail'] as $orderdetail): ?>
		<tr>
			<td><?php echo $orderdetail['id']; ?></td>
			<td><?php echo $orderdetail['order_id']; ?></td>
			<td><?php echo $orderdetail['product_id']; ?></td>
			<td><?php echo $orderdetail['quantity']; ?></td>
			<td><?php echo $orderdetail['price']; ?></td>
			<td><?php echo $orderdetail['status']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'orderdetails', 'action' => 'view', $orderdetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'orderdetails', 'action' => 'edit', $orderdetail['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'orderdetails', 'action' => 'delete', $orderdetail['id']), array('confirm' => __('Are you sure you want to delete # %s?', $orderdetail['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Orderdetail'), array('controller' => 'orderdetails', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Specialproducts'); ?></h3>
	<?php if (!empty($product['Specialproduct'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Sort'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Added'); ?></th>
		<th><?php echo __('Last Modified'); ?></th>
		<th><?php echo __('Lang'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Specialproduct'] as $specialproduct): ?>
		<tr>
			<td><?php echo $specialproduct['id']; ?></td>
			<td><?php echo $specialproduct['product_id']; ?></td>
			<td><?php echo $specialproduct['sort']; ?></td>
			<td><?php echo $specialproduct['status']; ?></td>
			<td><?php echo $specialproduct['date_added']; ?></td>
			<td><?php echo $specialproduct['last_modified']; ?></td>
			<td><?php echo $specialproduct['lang']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'specialproducts', 'action' => 'view', $specialproduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'specialproducts', 'action' => 'edit', $specialproduct['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'specialproducts', 'action' => 'delete', $specialproduct['id']), array('confirm' => __('Are you sure you want to delete # %s?', $specialproduct['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Specialproduct'), array('controller' => 'specialproducts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
