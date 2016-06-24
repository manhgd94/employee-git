<table cellpadding="0" cellspacing="0" class="table table-striped">
	<tbody>
		<tr>
			<td><b><?php echo __('Id'); ?></b></td>
			<td><?php echo h($department['Department']['id']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Name'); ?></b></td>
			<td><?php echo h($department['Department']['name']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Office Phone'); ?></b></td>
			<td><?php echo h($department['Department']['office_phone']); ?></td>
		</tr>
		<tr>
			<td><b><?php echo __('Manager'); ?></b></td>
			<td><?php echo h($department['Employee']['name']); ?></td>
		</tr>
	</tbody>
</table>
<?php echo $this->Html->link(__('Back'), array('action' => 'index'), array('class'=>'button btn btn-info')); ?>