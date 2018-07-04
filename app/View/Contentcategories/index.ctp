<div class="contentcategories index">
	<h2><?php echo __('Contentcategories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('parent'); ?></th>
			<th><?php echo $this->Paginator->sort('subject'); ?></th>
			<th><?php echo $this->Paginator->sort('detail_short'); ?></th>
			<th><?php echo $this->Paginator->sort('detail'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('image_large'); ?></th>
			<th><?php echo $this->Paginator->sort('sort'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_added'); ?></th>
			<th><?php echo $this->Paginator->sort('last_modified'); ?></th>
			<th><?php echo $this->Paginator->sort('lang'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($contentcategories as $contentcategory): ?>
	<tr>
		<td><?php echo h($contentcategory['Contentcategory']['id']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['code']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['name']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['parent']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['subject']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['detail_short']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['detail']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['image']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['image_large']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['sort']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['status']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['date_added']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['last_modified']); ?>&nbsp;</td>
		<td><?php echo h($contentcategory['Contentcategory']['lang']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contentcategory['Contentcategory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contentcategory['Contentcategory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contentcategory['Contentcategory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contentcategory['Contentcategory']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Contentcategory'), array('action' => 'add')); ?></li>
	</ul>
</div>
