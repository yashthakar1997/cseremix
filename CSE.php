 <?php 
 include 'comp/header.php';
 ?>
  <div class="content">
    <div class="upper-block">
      <div class="row">
        <div class="col-xs-3">
          <div class="panel panel-primary sidebar">
            <div class="panel-heading">
              <a href="CSE.php" class="white"><h3 class="panel-title">Computer Science &amp; Engineering</h3></a>
            </div>
            <div class="panel-body no-padding">
              <div class="list-group scroll">
                 <?php 
                  include'comp/cse-faculty.php';
                 ?>
                 <?php
                  include'comp/cse-lab.php';
                 ?>
                <a href="#" class="list-group-item no-vertical-border">B. Tech</a>
                <a href="#" class="list-group-item no-vertical-border">M. Tech</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-9">
              <?php
                include'comp/cse-main.php';
               ?> 
        </div>

      </div>
    </div>
  </div>
<?php 
 include 'comp/footer.php';
?>