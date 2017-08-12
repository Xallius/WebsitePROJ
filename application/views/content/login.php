<?php $message = $this->session->flashdata('message');
if (isset($message)) {
     echo '<div class="alert alert-info">' . $message . '</div>';
} ?>

<?php if($this->session->userdata('login') && ($this->session->userdata('uid') == 1)){
    redirect('Main/admin');
} elseif ($this->session->userdata('login') && ($this->session->userdata('uid') == 0)) {
    redirect('Main/index');
    } ?>
<div class="container">
    <div class="row">
        <div id="signupcard2" class="col s6 offset-s3">
            <div class="card-panel grey lighten-5">
                <?php echo form_open('signup/login'); ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <label class="active" for="username">Username</label>
                            <?php echo form_input(array('class' => 'form-control', 'required' => 'required', 'name' => 'username', 'type' => 'text'), set_value('username')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label class="active" for="password">Password</label>
                            <?php echo form_input(array('class' => 'form-control', 'required' => 'required', 'name' => 'password', 'type' => 'password'), set_value('password')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s3 offset-s4">
                        <button class="btn pink waves-effect waves-light" type="submit">Submit</button>
                    </div>
                <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>