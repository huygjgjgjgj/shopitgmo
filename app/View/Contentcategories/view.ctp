<div class="contentcategories view">
<h2><?php echo __('Contentcategory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subject'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['subject']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail Short'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['detail_short']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detail'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['detail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Large'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['image_large']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sort'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['sort']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Added'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['date_added']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Modified'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['last_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lang'); ?></dt>
		<dd>
			<?php echo h($contentcategory['Contentcategory']['lang']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contentcategory'), array('action' => 'edit', $contentcategory['Contentcategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contentcategory'), array('action' => 'delete', $contentcategory['Contentcategory']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contentcategory['Contentcategory']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contentcategories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contentcategory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
