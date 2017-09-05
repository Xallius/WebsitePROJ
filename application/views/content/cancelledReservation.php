<?php if ($this->session->userdata('uid') === '0'){
  redirect('Main/index');
} ?>

<div class="container">
	<div class="row">

	<ul id="slide-out" class="side-nav">
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="<?php echo base_url("Main/admin") ?>">Pending Reservation</a></li>
		<li><a href="<?php echo base_url("Main/admin2") ?>">Cancelled Reservation</a></li>

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
				<th>Username</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($resRow as $item): ?>
			<tr>
				<td><?php echo $item->rService; ?></td>
				<td><?php echo $item->rStaff; ?></td>
				<td><?php echo $item->date; ?></td>
				<td><?php echo $item->time; ?></td>
				<td><?php echo $item->username; ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
	<br>
	<br>
	</div>
	<a id="buttonmenu" href="#" data-activates="slide-out" class="btn button-collapse">Menu</a>
</div>