<div class="assos index">
	<h2><?php echo __('Assos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($assos as $asso): ?>
	<tr>
		<td><?php echo h($asso['Asso']['id']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['title']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['content']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['website']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['email']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['phone']); ?>&nbsp;</td>
		<td><?php echo h($asso['Asso']['picture']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $asso['Asso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $asso['Asso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $asso['Asso']['id']), array(), __('Are you sure you want to delete # %s?', $asso['Asso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Asso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
