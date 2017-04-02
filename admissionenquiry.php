<?php
  include 'comp/header.php';
?>


  <div class="content">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal">
          <fieldset>
            <legend class="center-wrap" style="padding-bottom:10px;">Post Online Enquiry</legend>
            <div class="form-group">
              <label for="inputName" class="col-xs-2 control-label">Name</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-xs-2 control-label">Email</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="inputContact" class="col-xs-2 control-label">Contact no.</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputContact" placeholder="Contact Number">
              </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-xs-2 control-label">Message</label>
              <div class="col-xs-10">
                <textarea class="form-control" rows="10" id="message"></textarea>
                <span class="help-block">Maximum 250 words.</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-10 col-xs-offset-2">
                <button class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>

<?php
   include'comp/footer.php';
?>
