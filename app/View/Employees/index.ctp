<div class="employees index">
	<h2><?php echo __('Employees'); ?></h2>
	<?php if(isset($userlogin)): ?>
	<div class="panel panel-primary">
		<div class="panel-body">
			<?php echo $this->Html->link(__('Add Employee'), array('action' => 'add'), array('class'=>'button btn btn-success')); ?>
		</div>
	</div>
	<?php endif ?>
	<div class="search panel panel-success">
		<div class="panel-heading">
			<h2 class="panel-title">
				Search
			</h2>
		</div>
		<div class="panel-body">
			<?php echo $this->Form->create('Search',array('class'=>'form','inputDefaults'=>array()));
			echo $this->Form->input('name',array('div'=>false,'label'=>false,'placeholder'=>'Employee Name','class'=>'form-control'));
			echo $this->Form->input('department_id', array(
                	'type' => 'select',
					'options' => $options, // typically set from $this->find('list') in controller 
					'label'=> false,
					'empty'=> "Department",
					'escape' => false,  // prevent HTML being automatically escaped
					'error' => false,
					'class' => 'form-control'
				));
			echo $this->Form->submit('Search',array('class'=>'button btn btn-success'));
			echo $this->Form->button('Clear', array('type' => 'reset', 'class'=>'button btn btn-default'));
			echo $this->Form->end();?>
		</div>
	</div>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('#'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('department_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_title'); ?></th>
			<th><?php echo $this->Paginator->sort('cellphone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<?php if(isset($userlogin)): ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
			<?php endif ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($employees as $employee): ?>
	<tr>
		<td><?php echo h($employee['Employee']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__(h($employee['Employee']['name'])), array('action' => 'view', $employee['Employee']['id'])); ?></td>
		<td><?php echo $this->Html->link(__(h($employee['Department']['name'])), array('controller'=>'departments', 'action' => 'view', $employee['Department']['id'])); ?></td>
		<td><?php echo h($employee['Employee']['job_title']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['cellphone']); ?>&nbsp;</td>
		<td><?php echo h($employee['Employee']['email']); ?>&nbsp;</td>
		<?php if(isset($userlogin)): ?>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $employee['Employee']['id']), array('class'=>'button btn btn-success')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $employee['Employee']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['id']), 'class'=>'button btn btn-danger')); ?>
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
