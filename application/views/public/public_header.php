<!DOCTYPE html>
<html>
<head>
	<title>Articles List</title>
	<?= link_tag('assets/css/bootstrap.min.css') ?>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Articles</a>
      
      <?= form_open('user/search',['class'=>'navbar-form navbar-left','role'=>'search']) ?>
   
      <!-- <form class="navbar-form navbar-left" role="search"> -->
        <div class="form-group">
          <input type="text" name="query" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      <?= form_close(); ?>
      <?= form_error('query', "<p class='navbar-text text-danger'>",'</p>' ) ?>
      <ul class="nav navbar-nav navbar-right">
      <?= anchor('logins','Login') ?>
      </ul>
    </div>
  </div>
</nav>