<div class="container">
	<div class="row">

	<ul id="slide-out" class="side-nav">
		<li><a href="#"></a></li>
		<li><a href="#"></a></li>
		<li><a href="<?php echo base_url("Main/admin") ?>">Pending Reservation</a></li>
		<li><a href="<?php echo base_url("Main/admin2") ?>">Cancelled Reservation</a></li>
		<li><a href="<?php echo base_url("Main/adminEditServices") ?>">Edit Services</a></li>
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
				<td><?php if($item->rStatus == 0){echo "Pending";} elseif($item->rStatus==1){echo "Booked";} ?></td>
				<td><?php echo $item->username; ?></td>
				<!-- if reservation is pending.. -->
				<?php if(!$item->rStatus): ?>
					<td><a class=" btn blue lighten-3 waves-effect waves-light" href="<?php echo base_url("Formsub/accept_row/$item->id")?>">Accept</a></td>
				<!-- reservation is booked -->
				<?php else: ?>
					<td> <!-- Modal Trigger -->
						  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Edit</a>
						  <!-- Modal Structure -->
						  <div id="modal1" class="modal">
						    <div class="modal-content">
						      <h4>Are you sure?</h4>
						      <p>Please edit the schedule first before accepting!</p>
						      <table>
						      	<thead>
						      		<tr>
						      		</tr>
						      	</thead>
						      	<tbody>
						      		<tr>
						      			<select>
						      				<option><?php echo $item->rService; ?></option>
						      				<option name=one value="Women's Haircut"> Women's Haircut </option>
						                    <option name=two value="Men's Haircut"> Men's Haircut </option>
						                    <option name=three value="Blow Dry and Styling"> Blow Dry and Styling </option>
						                    <option name=four value="Hair Color"> Hair Color </option>
						                    <option name=five value="Rebond"> Rebond </option>
						                    <option name=six value="Relax"> Relax</option>
						                    <option name=seven value="Brazillian"> Brazillian </option>
						                    <option name=eight value="Hair and Make-up"> Hair and Make-up</option>
						                    <option name=nine value="Manicure"> Manicure</option>
						                    <option name=ten value="Pedicure"> Pedicure</option>
						                    <option name=eleven value="Nail Art"> Nail Art</option>
						      			</select>
						      			<select>
						      				<option><?php echo $item->rStaff; ?></option>
						      				<option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
						                    <option name=two value="JR Valenzuela"> JR Valenzuela</option>
						                    <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
						                    <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
						                    <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
						      			</select>
						      			<input type="text" class="datepicker" name="date" required="required" value="<?php echo $item->date; ?>">
						      			<input name="appTime" type="text" class="timepicker" required="required" value="<?php echo $item->time; ?>">
						      		</tr>
						      </table>
						    </div>
						    <div class="modal-footer">
						      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
						    </div>
						  </div>
					</td>
				<?php endif; ?>
				<?php if(!$item->rStatus): ?>
					<td><a class=" btn pink waves-effect waves-light" href="<?php echo base_url("Formsub/delete_row/$item->id")?>">Cancel</a></td>
				<?php else: ?>
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