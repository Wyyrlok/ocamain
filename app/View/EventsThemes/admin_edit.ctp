<div class="eventsThemes form">
<?php echo $this->Form->create('EventsTheme'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Events Theme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('events_id');
		echo $this->Form->input('themes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EventsTheme.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EventsTheme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Events Themes'), array('action' => 'index')); ?></li>
	</ul>
</div>
