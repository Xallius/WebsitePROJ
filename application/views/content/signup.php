<div class="container">
    <!-- signup tabs -->
    <ul id="tabtab" class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Personal Info</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1" role="tab">Create Account </a>
        </li>
    </ul>
    <!-- content -->
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active" role="tabpanel">
            <div class="modal fade" id="thankyouModal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Thank you for pre-registering!</h4>
                        </div>
                        <div class="modal-body">
                            <p>Thanks for getting in touch!</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <form id="reg1" method="post" onclick="return isEmpty();" action="#menu1">
                <br><br>
                <name id=fname1>First Name:</name>
                <input id= fname2 type="text" name="fname2">
                <br>
                <name id=lname1>Last Name:</name>
                <input id= lname2 type="text" >
                <br>
                <name id=add1>Address:</name>
                <input type="text"
                cols="2"
                rows="2"
                style="width:270px; height:80px;"
                name="add2"
                id="add2"
                />
                <br>
                <name id=bday1>Birthday:</name>
                <input id=bday2 type="date" name="bday2">
                <br>
                <name id=gender>Gender:</name>
                <input id=m type="radio" name="gender" value="male">
                <name id= male >Male</name>
                <input id=f type="radio" name="gender" value="female">
                <name id=female>Female</name>
                <br>
                <input id="btnNext" type="submit" value="Next">
            </form>
        </div>
        
        <div id="menu1" class="tab-pane fade" role="tabpanel">
            <form method="post" action="#menu2">
                <br><br>
                <name id="uName">Username: </name>
                <input id="uName2" type="text" name="uName2">
                <br>
                <name id="pass">Password:</name>
                <input id="pass2" type="password" name="pass2">
                <br>
                <name id="pass3">Confirm Password:</name>
                <input id="pass4" type="password" name="pass4">
                <br>
                <input id="btnBack" type="back" value="Back">
                <input id="btnSubmit" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</div>
