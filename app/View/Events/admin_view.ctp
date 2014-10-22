<div class="events view">
<h2><?php echo __('Event'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($event['Event']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($event['Event']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($event['Event']['content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($event['Event']['picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($event['Event']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($event['Event']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip Code'); ?></dt>
		<dd>
			<?php echo h($event['Event']['zip_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Begin Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['begin_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($event['Event']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Asso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($event['Asso']['title'], array('controller' => 'assos', 'action' => 'view', $event['Asso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array(), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assos'), array('controller' => 'assos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Asso'), array('controller' => 'assos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('controller' => 'themes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Themes'); ?></h3>
	<?php if (!empty($event['Theme'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($event['Theme'] as $theme): ?>
		<tr>
			<td><?php echo $theme['id']; ?></td>
			<td><?php echo $theme['name']; ?></td>
			<td><?php echo $theme['color']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'themes', 'action' => 'view', $theme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'themes', 'action' => 'edit', $theme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'themes', 'action' => 'delete', $theme['id']), array(), __('Are you sure you want to delete # %s?', $theme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
