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
                <a href="CSEScheme.html" class="list-group-item no-vertical-border">B. Tech</a>
                <a href="CSEScheme.html" class="list-group-item no-vertical-border">M. Tech</a>
              </div>
            </div>
          </div>
          </div>
           <div class="col-xs-9">


			<h2> Web Technology lab</h2>
			<h4>
				Web technologies are infrastructural building blocks of any effective computer network: Local Area Network (LAN), Metroplitan Area Network (MAN) or a Wide Area Network (WAN), such as the Internet. Communication on a computer could never be as effective as they are without the plethora of web technologies in existence.
			</h4>
			<h4>
				 Laboratories are outfitted with high performance servers and computers with latest configurations
			</h4>


		</div>
</div>
</div>

<?php
 include 'comp/footer.php';
?>