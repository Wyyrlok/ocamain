<div class="eventsThemes form">
<?php echo $this->Form->create('EventsTheme'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Events Theme'); ?></legend>
	<?php
		echo $this->Form->input('events_id');
		echo $this->Form->input('themes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Events Themes'), array('action' => 'index')); ?></li>
	</ul>
</div>
