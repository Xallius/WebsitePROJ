<?php if ($this->session->userdata('uid') === '0'){
  redirect('Main/index');
} ?>

<div class="container">
  <table class="highlight grey lighten-5">
    <thead>
      <tr>
        <th colspan="4" style="text-align: center;">Basic Hair Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesData as $sRow): ?>
          <?php if($sRow->sCategory === "Basic Hair Services"): ?>
          <tr>
            <td><?php echo $sRow->sService; ?></td>
            <td><?php echo $sRow->sPrice; ?></td>
            <td><a data-target="modal2<?php echo $sRow->id ?>" class="modal-trigger"><i class="material-icons">create</i></a></td>
            <td><a href="<?php echo base_url("admin/delete_service/$sRow->id") ?>" class="modal-trigger"><i class="material-icons">delete</i></a></td>
          </tr>
          <?php endif; ?>
              <!-- Modal Structure for editing services -->
              <div id="modal2<?php echo $sRow->id; ?>" class="modal">
                <div class="modal-content">
                <h5>Edit a Service</h5>
                  <p>Edit according to your liking!</p>
                    <?php echo form_open('admin/edit_service'); ?>
                    <input type="hidden" name="servID" value="<?php echo $sRow->id; ?>"> 
                    <label for="servName">Service Name</label>
                    <div class="row">
                      <div class="col s7">
                        <input type="text" name="servName" value="<?php echo $sRow->sService; ?>" required="required">
                      </div>
                    </div>
                    <label for="servPrice">Service Price</label>
                    <div class="row">
                      <div class="col s4">
                        <input type="text" name="servPrice" value="<?php echo $sRow->sPrice; ?>" required="required">
                      </div>
                    </div>
                    <div class="row">
                      <select class="col s4" name="serviceCategory" id="serviceCategory">
                        <option value="" disabled>Pick a category</option>
                        <option value='Basic Hair Services'>Basic Hair Services</option>
                        <option value='Special Services'>Special Services</option>
                        <option value="Nails Services">Nails Services</option>
                      </select> 
                    </div>
                      <input type="hidden" name="servCategory" id="servCategory" />
                </div>
                <div class="modal-footer">
                  <button class="btn waves-light waves-effect" type="submit">Edit</button>
                </div>
                <?php echo form_close(); ?>
               </div>
        <?php endforeach; ?>
    </tbody>
    <thead>
      <tr>
        <th colspan="4" style="text-align: center;">Special Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesData as $sRow): ?>
          <?php if($sRow->sCategory === "Special Services"): ?>
            <tr>
              <td><?php echo $sRow->sService; ?></td>
              <td><?php echo $sRow->sPrice; ?></td>
              <td><a data-target="modal2<?php echo $sRow->id ?>" class="modal-trigger"><i class="material-icons">create</i></a></td>
              <td><a href="<?php echo base_url("admin/delete_service/$sRow->id") ?>" class="modal-trigger"><i class="material-icons">delete</i></a></td>
            </tr>
          <?php endif; ?>
            <!-- Modal Structure for editing services -->
              <div id="modal2<?php echo $sRow->id; ?>" class="modal">
                <div class="modal-content">
                <h5>Edit a Service</h5>
                  <p>Edit according to your liking!</p>
                    <?php echo form_open('admin/edit_service'); ?>
                    <input type="hidden" name="servID" value="<?php echo $sRow->id; ?>"> 
                    <label for="servName">Service Name</label>
                    <div class="row">
                      <div class="col s7">
                        <input type="text" name="servName" value="<?php echo $sRow->sService; ?>" required="required">
                      </div>
                    </div>
                    <label for="servPrice">Service Price</label>
                    <div class="row">
                      <div class="col s4">
                        <input type="text" name="servPrice" value="<?php echo $sRow->sPrice; ?>" required="required">
                      </div>
                    </div>
                    <div class="row">
                      <select class="col s4" name="serviceCategory" id="serviceCategory">
                        <option value="" disabled>Pick a category</option>
                        <option value='Basic Hair Services'>Basic Hair Services</option>
                        <option value='Special Services'>Special Services</option>
                        <option value="Nails Services">Nails Services</option>
                      </select> 
                    </div>
                      <input type="hidden" name="servCategory" id="servCategory" />
                </div>
                <div class="modal-footer">
                  <button class="btn waves-light waves-effect" type="submit">Edit</button>
                </div>
                <?php echo form_close(); ?>
               </div>
        <?php endforeach; ?>
    </tbody>
    <thead>
      <tr>
        <th colspan="4" style="text-align: center;">Nails Services</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($servicesData as $sRow): ?>
          <?php if($sRow->sCategory === "Nails Services"): ?>
          <tr>
            <td><?php echo $sRow->sService; ?></td>
            <td><?php echo $sRow->sPrice; ?></td>
            <td><a data-target="modal2<?php echo $sRow->id ?>" class="modal-trigger"><i class="material-icons">create</i></a></td>
              <td><a href="<?php echo base_url("admin/delete_service/$sRow->id") ?>" class="modal-trigger"><i class="material-icons">delete</i></a></td>
          </tr>
          <?php endif; ?>
          <!-- Modal Structure for editing services -->
              <div id="modal2<?php echo $sRow->id; ?>" class="modal">
                <div class="modal-content">
                <h5>Edit a Service</h5>
                  <p>Edit according to your liking!</p>
                    <?php echo form_open('admin/edit_service'); ?>
                    <input type="hidden" name="servID" value="<?php echo $sRow->id; ?>"> 
                    <label for="servName">Service Name</label>
                    <div class="row">
                      <div class="col s7">
                        <input type="text" name="servName" value="<?php echo $sRow->sService; ?>" required="required">
                      </div>
                    </div>
                    <label for="servPrice">Service Price</label>
                    <div class="row">
                      <div class="col s4">
                        <input type="text" name="servPrice" value="<?php echo $sRow->sPrice; ?>" required="required">
                      </div>
                    </div>
                    <div class="row">
                      <select class="col s4" name="serviceCategory" id="serviceCategory">
                        <option value="" disabled>Pick a category</option>
                        <option value='Basic Hair Services'>Basic Hair Services</option>
                        <option value='Special Services'>Special Services</option>
                        <option value="Nails Services">Nails Services</option>
                      </select> 
                    </div>
                      <input type="hidden" name="servCategory" id="servCategory" />
                </div>
                <div class="modal-footer">
                  <button class="btn waves-light waves-effect" type="submit">Edit</button>
                </div>
                <?php echo form_close(); ?>
               </div>
        <?php endforeach; ?>
    </tbody>
  </table>
						<!-- Modal Trigger -->
						  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Add Service</a>
						  <!-- Modal Structure -->
						  <div id="modal1" class="modal">
						    <div class="modal-content">
						    <h5>Add a Service</h5>
						    	<p>Please input: Service Name, Price and Category!</p>
							      <?php echo form_open('admin/add_service'); ?>
							      <label for="servName">Service Name</label>
							      <div class="row">
							      	<div class="col s4">
							      		<input type="text" name="servName" required="required">
							      	</div>
							      </div>
							      <label for="servPrice">Service Price</label>
							      <div class="row">
							      	<div class="col s4">
							      		<input type="text" name="servPrice" required="required">
							      	</div>
							      </div>
							      <div class="row">
							      	<select class="col s4" name="servCategory">
							      		<option value="Basic Hair Service">Basic Hair Services</option>
							      		<option value="Special Services">Special Services</option>
							      		<option value="Nails Services">Nails Services</option>
							      	</select>
							      </div>
						    </div>
						    <div class="modal-footer">
						      <button class="btn waves-light waves-effect" type="submit">Add!</button>
						    </div>
						   <?php echo form_close(); ?>
						  </div>

              
</div> 