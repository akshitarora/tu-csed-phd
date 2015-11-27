<?php require 'header.php';
?>
    <body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <button type="button" class="btn btn-default btn-back navbar-left pull-left hidden " onclick="history.back()">
      <i class="fa fa-lg fa-chevron-left"></i>
      <span>Back</span>
    </button>
    <button type="button" class="btn btn-default btn-menu navbar-left pull-left offcanvas-toggle">
      <i class="fa fa-lg fa-bars"></i>
      <span>Menu</span>
    </button>
    <a class="navbar-brand" title="Customers v{{getAppVersion}}" href="/">Customers</a>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="#">
            <i class="fa fa-users"></i> 
            Contacts
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-building-o"></i> 
            Companies
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-gears"></i> 
            Settings
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

</body>

</html>