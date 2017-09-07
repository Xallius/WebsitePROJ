<div class="container">
	<div class="row">

	<ul id="slide-out" class="side-nav">
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="<?php echo base_url("Main/profile") ?>">Pending Reservation</a></li>
		<li><a href="<?php echo base_url("Main/profile2") ?>">Cancelled Reservation</a></li>

	</ul>
	</div>
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
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<br>
	</div>
</div>