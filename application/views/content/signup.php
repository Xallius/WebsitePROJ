
<div class="container">
    <div class="row">
        <div id="signupcard" class="col s6 offset-s3">
            <div class="card-panel grey lighten-5">
                <?php echo form_open('Signup/test2'); ?>
                <div class="row">
                    <div class="input-field col s12">
                        <label class="active" for="fname">First Name</label>
                        <?php echo form_input(array("class" => "form-control", "required" => "required", "name" => "fname", "type" => "text"), set_value('fname')) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label class="active" for="lname">Last Name</label>
                        <?php echo form_input(array("class" => "form-control", "required" => "required", "name" => "lname", "type" => "text"), set_value('lname')) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label class="active" for="contact">Contact #</label>
                        <?php echo form_input(array("class" => "form-control", "required" => "required", "name" => "contact", "type" => "text"), set_value('contact')) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label class="active" for="bday">Birthday (mm/dd/yyyy)</label>
                        <?php echo form_input(array("class" => "form-control", "required" => "required", "name" => "bday", "type" => "text"), set_value('bday')) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <label class="active" for="address">Address</label>
                        <textarea id="address" class="materialize-textarea" name='address'></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <select name="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                        <label>Gender</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3 offset-s4">
                    <button class="btn pink waves-effect waves-light" type="submit">Next</button>
                    </div>
                </div>
                 <?php echo form_close(); ?>
                
            </div>
        </div>
    </div>
</div>