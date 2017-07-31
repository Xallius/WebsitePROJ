


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
                <select class="col s5" name="rOptions1" required="required">
                    <option value="">First</option>
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
                <select class="col s5 offset-s1" name="rStaff1" required="required">
                    <option value="">First</option>
                    <option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
                    <option name=two value="JR Valenzuela"> JR Valenzuela</option>
                    <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                    <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
                    <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                </select>
                </div>
                <div class="row">
                <select class="col s5" name="rOptions2">
                    <option value="">Second</option>
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
                <select class="col s5 offset-s1" name="rStaff2">
                    <option value="">Second</option>
                    <option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
                    <option name=two value="JR Valenzuela"> JR Valenzuela</option>
                    <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                    <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
                    <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                </select>
                </div>
                <div class="row">
                    <select class="col s5" name="rOptions3" >
                        <option value="">Third</option>
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
                    <select class="col s5 offset-s1" name="rStaff3">
                        <option value="">Third</option>
                        <option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option name=two value="JR Valenzuela"> JR Valenzuela</option>
                        <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                    <div class="row">
                    <select class="col s5" name="rOptions4">
                        <option value="">Fourth</option>
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
                    <select class="col s5 offset-s1" name="rStaff4">
                        <option value="">Fourth</option>
                        <option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option name=two value="JR Valenzuela"> JR Valenzuela</option>
                        <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                <div class="row">
                    <select class="col s5" name="rOptions5">
                        <option value="">Fifth</option>
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
                    <select class="col s5 offset-s1" name="rStaff5">
                        <option value="">Fifth</option>
                        <option name=one value="Joel Valenzuela"> Joel Valenzuela </option>
                        <option name=two value="JR Valenzuela"> JR Valenzuela</option>
                        <option name=three value="Colleen Jean Parotcha"> Colleen Jean Parotcha </option>
                        <option name=four value="Jerry Valenzuela"> Jerry Valenzuela </option>
                        <option value="Jocelyn Valenzuela"> Jocelyn Valenzuela </option>
                    </select>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                    <name id=date>Requested Date:</name>
                      <input type="text" class="datepicker" name="date" required="required">
                    </div>
                    <div class="input-field col s5 offset-s1">
                    <name id=time>Appointment Time:</name>
                    <input name="appTime" type="text" class="timepicker" required="required">
                    </div>
                </div>
                <div class="row">
                    <button class="col s3 offset-s4 btn pink waves-effect waves-light" type="submit" name="appSubmit">Submit</button>
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>