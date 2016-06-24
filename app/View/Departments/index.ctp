<div class="departments index">
	<h2><?php echo __('Departments'); ?></h2>
	<?php if(isset($userlogin)): ?>
	<div class="panel panel-primary">
		<div class="panel-body">
			<?php echo $this->Html->link(__('Add Department'), array('action' => 'add'), array('class'=>'button btn btn-success')); ?>
		</div>
	</div>
	<?php endif ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('office_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('employee_id', 'Manager'); ?></th>
			<?php if(isset($userlogin)): ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
			<?php endif ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($departments as $department): ?>
	<tr>
		<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__(h($department['Department']['name'])), array('action' => 'view', $department['Department']['id'])); ?></td>
		<td><?php echo h($department['Department']['office_phone']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__(h($department['Employee']['name'])), array('controller'=>'employees', 'action' => 'view', $department['Employee']['id'])); ?></td>
		<?php if(isset($userlogin)): ?>
			<td class="actions">
				<?php echo $this->Html->link(__('Employees'), array('controller'=>'employees', 'action' => 'index', $department['Department']['id']), array('class'=>'button btn btn-info')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id']), array('class'=>'button btn btn-success')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $department['Department']['id']), 'class'=>'button btn btn-danger')); ?>
			</td>
		<?php endif ?>
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
