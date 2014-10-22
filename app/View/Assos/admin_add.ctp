<div class="assos form">
<?php echo $this->Form->create('Asso'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Asso'); ?></legend>
	<?php
		echo $this->Form->inputs(array('legend' => 'Ajouter une asso'));
		/*echo $this->Form->input('content');
		echo $this->Form->input('website');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('picture');*/
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
	</ul>
</div>
