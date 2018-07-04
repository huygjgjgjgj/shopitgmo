<div class="contentcategories form">
<?php echo $this->Form->create('Contentcategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Contentcategory'); ?></legend>
	<?php
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
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contentcategories'), array('action' => 'index')); ?></li>
	</ul>
</div>
