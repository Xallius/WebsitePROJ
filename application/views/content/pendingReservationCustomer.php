<div class="container">
	<div class="col s12">
	<table  class="highlight grey lighten-5">
		<thead>
			<tr>
				<th>Service Availed</th>
				<th>Staff Requested</th>
				<th>Date</th>
				<th>Start Time</th>
				<th>End Time</th>
				<th>Duration</th>
				<th>Companions</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($resRow as $item): ?>
			<tr>
				<td><?php echo $item->rService; ?></td>
				<td><?php echo $item->rStaff; ?></td>
				<td><?php echo $item->date; ?></td>
				<td><?php echo date("g:i a", strtotime($item->rStartTime)); ?></td>
				<td><?php echo date("g:i a", strtotime($item->rEndTime)); ?></td>
				<td><?php echo date("g", strtotime($item->duration))." hours"; ?></td>
				<td><?php echo $item->companion; ?></td>
				<?php if($item->rStatus == 0): ?>
					<td><a class=" btn pink waves-effect waves-light" href="<?php echo base_url("Formsub/delete_row/$item->id")?>">Cancel</a></td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<br>
	</div>
</div>