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
				<th>Time</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($resRow as $item): ?>
			<tr>
				<td><?php echo $item->rService; ?></td>
				<td><?php echo $item->rStaff; ?></td>
				<td><?php echo $item->date; ?></td>
				<td><?php echo $item->time; ?></td>
				<td><?php if($item->rStatus == 0){echo "Pending";} elseif($item->rStatus==1){echo "Booked";} ?></td>
				<?php if($item->rStatus == 0): ?>
					<td><a class=" btn pink waves-effect waves-light" href="<?php echo base_url("Formsub/delete_row/$item->id")?>">Cancel</a></td>
				<?php elseif($item->rStatus == 1): ?>
					<td><a class=" btn pink waves-effect waves-light disabled" href="<?php echo base_url("Formsub/delete_row/$item->id")?>">Cancel</a></td>
				<?php endif; ?>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<br>
	</div>
	<a id="buttonmenu" href="#" data-activates="slide-out" class="btn button-collapse">Menu</a>
</div>