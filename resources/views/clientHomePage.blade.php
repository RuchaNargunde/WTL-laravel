 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
	<title>My Profile</title>

	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="/css/clientHomepage.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Sen:800&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body>

<div class="my-navbar">
<nav class="navbar navbar-height">

  <!-- Links -->
  <ul class="navbar-nav">
  	<li class="" style="padding-bottom: 75px;">
  		<div class="mx-auto" style="width: 80px;height: 80px;">
  			<img src="{{ URL::asset('/images/icon4.png') }}" class="img-fluid" >
  			<h5 class="user" style="padding-top: 20px;">Hello User!</h5>
  		</div>
  	</li>
    <hr class="my-hr"><li class="nav-item">
      <a class="nav-link mynavbar-item" href="clientProfile" target="client-content">Profile</a>
    </li><hr class="my-hr">
    <li class="nav-item">
      <a class="nav-link mynavbar-item" href="caseRecords" target="client-content">Case Records</a>
    </li><hr class="my-hr">
    <li class="nav-item">
      <a class="nav-link mynavbar-item" href="registerNewCase" target="client-content">Register a new case</a>
    </li><hr class="my-hr">
    <li class="nav-item">
      <a class="nav-link mynavbar-item" href="viewOurLawyers" target="client-content">View our lawyers</a>
    </li><hr class="my-hr">
    <li class="nav-item">
      <a class="nav-link mynavbar-item" href="#">Logout</a>
    </li><hr class="my-hr">

  </ul>

</nav>
</div>

<div class="content">
	<iframe src=" {{ route('announcements') }}" class="content-container" frameborder="0" name="client-content">
		
	</iframe>
</div>

<script src="/js/clientHomePage.js"></script>

</body>
</html>
