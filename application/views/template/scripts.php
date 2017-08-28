</body>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/materialize.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.min.js'); ?>" type="text/javascript"></script>
<script>  
    $(document).ready(function() {
    $('select').material_select();
    });
</script>
<script> //datepicker reservation
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false, // Close upon selecting a date,
    format: 'yyyy-mm-dd'
  });
</script>
<script> //timepicker reservation
     $('.timepicker').pickatime({
        default: 'now', // Set default time: 'now', '1:30AM', '16:30'
        fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
        twelvehour: false, // Use AM/PM or 24-hour format
        donetext: 'OK', // text for done-button
        cleartext: 'Clear', // text for clear-button
        canceltext: 'Cancel', // Text for cancel-button
        autoclose: false, // automatic close timepicker
        ampmclickable: true, // make AM PM clickable
        aftershow: function(){} //Function for after opening timepicker
      });
</script>
<script> //sidenav 
   $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,
      onOpen: function(el) {  }, // A function to be called when sideNav is opened
      onClose: function(el) { }, // A function to be called when sideNav is closed
    }
  );
</script>

<script> //modal summoner
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>


<script>
//disables every option except first one until the previous one is filled out
  $(document).ready(function(){
    $("#rOptions2").prop("disabled", true);
    $("#rStaff2").prop("disabled", true);
    $("#rOptions3").prop("disabled", true);
    $("#rStaff3").prop("disabled", true);
    $("#rOptions4").prop("disabled", true);
    $("#rStaff4").prop("disabled", true);
    $("#rOptions5").prop("disabled", true);
    $("#rStaff5").prop("disabled", true);

    $("#rOptions1").on('change', function(){
      var empty = $('#rOptions1 option:selected').val();
      if (empty !== ""){
        $("#rOptions2").prop("disabled", false);
        $("#rStaff2").prop("disabled", false);
        $('select').material_select();
      }
    })

    $("#rOptions2").on('change', function(){
      var empty2 = $('#rOptions2 option:selected').val();
      if (empty2 !== ""){
        $("#rOptions3").prop("disabled", false);
        $("#rStaff3").prop("disabled", false);
        $('select').material_select();
      }
    })

    $("#rOptions3").on('change', function(){
      var empty3 = $('#rOptions3 option:selected').val();
      if (empty3 !== ""){
        $("#rOptions4").prop("disabled", false);
        $("#rStaff4").prop("disabled", false);
        $('select').material_select();
      }
    })

    $("#rOptions4").on('change', function(){
      var empty4 = $('#rOptions4 option:selected').val();
      if (empty4 !== ""){
        $("#rOptions5").prop("disabled", false);
        $("#rStaff5").prop("disabled", false);
        $('select').material_select();
      }
    })
    $('select').material_select();
  });  
</script>
<script>
$(document).ready(function() {
    $('#serviceCategory').material_select();
    $('select').on('change', function() {
      $('#servCategory').val($('#serviceCategory').val());
    })
});
</script>
</html>