<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Event'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('picture');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('zip_code');
		echo $this->Form->input('begin_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('asso_id');
		echo $this->Form->input('Theme');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Assos'), array('controller' => 'assos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asso'), array('controller' => 'assos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
