<div class="manifs view">
<h2><?php echo __('Manif'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($manif['Manif']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($manif['Manif']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($manif['Manif']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Manif'), array('action' => 'edit', $manif['Manif']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Manif'), array('action' => 'delete', $manif['Manif']['id']), array(), __('Are you sure you want to delete # %s?', $manif['Manif']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Manifs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Manif'), array('action' => 'add')); ?> </li>
	</ul>
</div>
