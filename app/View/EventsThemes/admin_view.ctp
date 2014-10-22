<div class="eventsThemes view">
<h2><?php echo __('Events Theme'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventsTheme['EventsTheme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Events Id'); ?></dt>
		<dd>
			<?php echo h($eventsTheme['EventsTheme']['events_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Themes Id'); ?></dt>
		<dd>
			<?php echo h($eventsTheme['EventsTheme']['themes_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Events Theme'), array('action' => 'edit', $eventsTheme['EventsTheme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Events Theme'), array('action' => 'delete', $eventsTheme['EventsTheme']['id']), array(), __('Are you sure you want to delete # %s?', $eventsTheme['EventsTheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Events Theme'), array('action' => 'add')); ?> </li>
	</ul>
</div>
