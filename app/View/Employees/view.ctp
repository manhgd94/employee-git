<table cellpadding="0" cellspacing="0" class="table table-striped">
	<tbody>
		<tr>
			<td><b><?php echo __('Id'); ?></b></td>
			<td><?php echo h($employee['Employee']['id']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Name'); ?></b></td>
			<td><?php echo h($employee['Employee']['name']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Manager'); ?></b></td>
			<td><?php echo h($employee['Department']['name']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Photo'); ?></b></td>
			<td><?php echo $this->Html->image(h($employee['Employee']['photo']), array('alt' => 'avatar', 'class'=> 'avatar-img')); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Job Title'); ?></b></td>
			<td><?php echo h($employee['Employee']['job_title']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Cellphone'); ?></b></td>
			<td><?php echo h($employee['Employee']['cellphone']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Email'); ?></b></td>
			<td><?php echo h($employee['Employee']['email']); ?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class'=>'button btn btn-info')); ?>