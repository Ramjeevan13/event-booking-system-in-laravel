<head>
<style type="text/css">
.navbar-custom{

			background-color: #25003e /*#00CED1*/;
			opacity: 0.8;			
		
	}
.nav-link{
		color: black;
		font-size: 18px;

	}
	
	
	</style>
	</head>
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand active" href="admin_main">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
         Manage Venues
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="addVenue">Add Venue</a></li>
          <li><a class="dropdown-item" href="removeVenue">Remove Venue</a></li>
        </ul>
      </li>
	 
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          View Reviews
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="admin_feedback">View Feedback</a></li>
          <li><a class="dropdown-item" href="admin_view_reviews">View Reviews</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_contactus" >Customer Enquiry</a>
      </li>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> -->
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
	<form class="form-inline my-2 my-lg-0">
    <?php if(session()->has('user')): ?>
    <a href="logout" class="btn  font-weight-normal pr-5 " style="color:white;"> <i class="fa fa-user"></i> SIGN OUT </a>
    <?php endif; ?>
  </form>
  </div>
</nav>

<?php echo $__env->make("master2", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\K.RAM JEEVAN\laravel\G-06_EventManagementSystem-master\resources\views/admin_header.blade.php ENDPATH**/ ?>