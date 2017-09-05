<div class="row">
        <div class="col s6 offset-s3">
          <div class="card grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Message us!</span>
              <p>Do you have any questions? Concerns? Message us here!</p>
            </div>
            <?php echo form_open("Formsub/send_message"); ?>
            <div class="input-field col-s4">
              <textarea id="textArea1" class="materialize-textarea"></textarea>
              <label for="textArea1">Your message here</label>
            </div>
            <div class="row">
            <button class="col s3 offset-s4 btn pink waves-effect waves-light" type="submit" name="appSubmit">Send!</button>
            </div>
          </div>
        </div>
      </div>