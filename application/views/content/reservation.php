

<?php $message = $this->session->flashdata('trymsg');
$timeMess = $this->session->flashdata('timeError');
if (isset($message)): ?>
    <div class="row">
     <div class="card-panel col s10 offset-s1"><?php echo $message; ?></div>
    </div>
<?php elseif(isset($timeMess)): ?>
    <div class="row">
     <div class="card-panel col s10 offset-s1"><?php echo $timeMess; ?></div>
    </div>
<?php endif; ?>

<div id="container1">
<div class="row">
        <div id="signupcard" class="col s10 offset-s1">
            <div class="card-panel grey lighten-5">
                <div class="row">
                    <h2 class="col s7 offset-s3 pink-text" id=reserve> Book an Appointment</h2>
                </div>
            <div class="row">
            <name class="col s1 pink-text" id="rservices">Service/s:</name>
            <name class="col s3 offset-s5" id="staffs">Staff/s:</name>
            </div>
            <?php echo form_open('Formsub/check_reservation'); ?>
                <div class="row">
                <select class="col s5" name="rOptions1" id="rOptions1" required>
                    <option value="" disabled selected>First Service</option>
                    <option value="Women's Haircut"> Women's Haircut </option>
                    <option value="Men's Haircut"> Men's Haircut </option>
                    <option value="Blow Dry and Styling"> Blow Dry and Styling </option>
                    <option value="Hair Color"> Hair Color </option>
                    <option value="Rebond"> Rebond </option>
                    <option value="Relax"> Relax</option>
                    <option value="Brazillian"> Brazillian </option>
                    <option value="Hair and Make-up"> Hair and Make-up</option>
                    <option value="Manicure"> Manicure</option>
                    <option value="Pedicure"> Pedicure</option>
                    <option value="Nail Art"> Nail Art</option>
                </select>
                <select class="col s5 offset-s1" name="rStaff1" required>
                    <option value="Any Staff">Any Staff</option>
                    <option value="Joel Valenzuela"> Joel Valenzuela </option>
                    <option value="JR Valenzuela"> JR Valenzuela</option>
                    <option value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                    <option value="Jerry Valenzuela"> Jerry Valenzuela </option>
                    <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                </select>
                </div>
                <div class="row">
                <select class="col s5" name="rOptions2" id="rOptions2" >
                    <option value="">Second Service</option>
                    <option value="Women's Haircut"> Women's Haircut </option>
                    <option value="Men's Haircut"> Men's Haircut </option>
                    <option value="Blow Dry and Styling"> Blow Dry and Styling </option>
                    <option value="Hair Color"> Hair Color </option>
                    <option value="Rebond"> Rebond </option>
                    <option value="Relax"> Relax</option>
                    <option value="Brazillian"> Brazillian </option>
                    <option value="Hair and Make-up"> Hair and Make-up</option>
                    <option value="Manicure"> Manicure</option>
                    <option value="Pedicure"> Pedicure</option>
                    <option value="Nail Art"> Nail Art</option>

                </select>
                <select class="col s5 offset-s1" name="rStaff2" id="rStaff2">
                    <option value="Any Staff">Any Staff</option>
                    <option value="Joel Valenzuela"> Joel Valenzuela </option>
                    <option value="JR Valenzuela"> JR Valenzuela</option>
                    <option value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                    <option value="Jerry Valenzuela"> Jerry Valenzuela </option>
                    <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                </select>
                </div>
                <div class="row">
                    <select class="col s5" name="rOptions3" id="rOptions3" >
                        <option value="">Third Service</option>
                        <option value="Women's Haircut"> Women's Haircut </option>
                        <option value="Men's Haircut"> Men's Haircut </option>
                        <option value="Blow Dry and Styling"> Blow Dry and Styling </option>
                        <option value="Hair Color"> Hair Color </option>
                        <option value="Rebond"> Rebond </option>
                        <option value="Relax"> Relax</option>
                        <option value="Brazillian"> Brazillian </option>
                        <option value="Hair and Make-up"> Hair and Make-up</option>
                        <option value="Manicure"> Manicure</option>
                        <option value="Pedicure"> Pedicure</option>
                        <option value="Nail Art"> Nail Art</option>
                    </select>
                    <select class="col s5 offset-s1" name="rStaff3" id="rStaff3" >
                        <option value="Any Staff">Any Staff</option>
                        <option value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option value="JR Valenzuela"> JR Valenzuela</option>
                        <option value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                    <div class="row">
                    <select class="col s5" name="rOptions4" id="rOptions4" >
                        <option value="">Fourth Service</option>
                        <option value="Women's Haircut"> Women's Haircut </option>
                        <option value="Men's Haircut"> Men's Haircut </option>
                        <option value="Blow Dry and Styling"> Blow Dry and Styling </option>
                        <option value="Hair Color"> Hair Color </option>
                        <option value="Rebond"> Rebond </option>
                        <option value="Relax"> Relax</option>
                        <option value="Brazillian"> Brazillian </option>
                        <option value="Hair and Make-up"> Hair and Make-up</option>
                        <option value="Manicure"> Manicure</option>
                        <option value="Pedicure"> Pedicure</option>
                        <option value="Nail Art"> Nail Art</option>
                    </select>
                    <select class="col s5 offset-s1" name="rStaff4" id="rStaff4" >
                        <option value="Any Staff">Any Staff</option>
                        <option value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option value="JR Valenzuela"> JR Valenzuela</option>
                        <option value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                <div class="row">
                    <select class="col s5" name="rOptions5" id="rOptions5">
                        <option value="">Fifth Service</option>
                        <option value="Women's Haircut"> Women's Haircut </option>
                        <option value="Men's Haircut"> Men's Haircut </option>
                        <option value="Blow Dry and Styling"> Blow Dry and Styling </option>
                        <option value="Hair Color"> Hair Color </option>
                        <option value="Rebond"> Rebond </option>
                        <option value="Relax"> Relax</option>
                        <option value="Brazillian"> Brazillian </option>
                        <option value="Hair and Make-up"> Hair and Make-up</option>
                        <option value="Manicure"> Manicure</option>
                        <option value="Pedicure"> Pedicure</option>
                        <option value="Nail Art"> Nail Art</option>
                    </select>
                    <select class="col s5 offset-s1" name="rStaff5" id="rStaff5">
                        <option value="Any Staff">Any Staff</option>
                        <option value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option value="JR Valenzuela"> JR Valenzuela</option>
                        <option value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                    <name id=date>Requested Date:</name>
                      <input type="date" class="datepicker" name="date" required="required">
                    </div>
                    <div class="input-field col s5 offset-s1">
                    <name id=time>Appointment Time:</name>
                    <input name="appTime" type="time" class="timepicker" required="required">
                    </div>
                </div>
                <div class="row">
                    <button class="col s3 offset-s4 btn pink waves-effect waves-light" type="submit" name="appSubmit">Submit</button>
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>