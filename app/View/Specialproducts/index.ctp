<div class="specialproducts index">
	<h2><?php echo __('Specialproducts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sort'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_added'); ?></th>
			<th><?php echo $this->Paginator->sort('last_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($specialproducts as $specialproduct): ?>
	<tr>
		<td><?php echo h($specialproduct['Specialproduct']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($specialproduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $specialproduct['Product']['id'])); ?>
		</td>
		<td><?php echo h($specialproduct['Specialproduct']['sort']); ?>&nbsp;</td>
		<td><?php echo h($specialproduct['Specialproduct']['status']); ?>&nbsp;</td>
		<td><?php echo h($specialproduct['Specialproduct']['date_added']); ?>&nbsp;</td>
		<td><?php echo h($specialproduct['Specialproduct']['last_modified']); ?>&nbsp;</td>
		<td><?php echo h($specialproduct['Specialproduct']['lang']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $specialproduct['Specialproduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specialproduct['Specialproduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specialproduct['Specialproduct']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $specialproduct['Specialproduct']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Specialproduct'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
