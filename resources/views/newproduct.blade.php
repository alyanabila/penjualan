<!DOCTYPE HTML>
<html>
<head>
<title>Koperasi | Sekolah</title><link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="css/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="css/js/jquery.min.js"></script>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="css/index.html"><img src="css/images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="css/shop.html">Shop</a></li>
						    	<li><a href="css/team.html">Team</a></li>
						    	<li><a href="css/experiance.html">Events</a></li>
						    	<li><a href="css/experiance.html">Experiance</a></li>
						    	<li><a href="css/shop.html">Company</a></li>
								<li><a href="css/contact.html">Contact</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="css/js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="css/js/classie.js"></script>
						<script src="css/js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="css/images/edit.png" alt=""/></a>
						  		<a href="#"><img src="css/images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="css/images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="css/indexCheckout.html">Check out</a></div>
							 <div class="login_button"><a href="css/login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	</div>
<body>
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" action="/newproduct_proses" method="POST" enctype="multipart/form-data">
	@csrf
<fieldset>
	<br>
	<h1><b><center>New Product</center></b></h1>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="kode" placeholder="PRODUCT ID" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PRICE</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="price" placeholder="Rp." class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="description"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">CATEGORY</label>
  <div class="col-md-4">
  <input id="product_name" name="category" placeholder="category" class="form-control input-md" type="text">
  </div>
</div>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">Image</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="gambar" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
  </div>
  </div>

</fieldset>
</form>
</body>
<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Products</h4>
							<li><a href="#">Food</a></li>
							<li><a href="#">Drink</a></li>
							<li><a href="#">Perlengkapan sekolah</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>About</h4>
							<li><a href="#">Careers and internships</a></li>
							<li><a href="#">Sponserships</a></li>
							<li><a href="#">team</a></li>
							<li><a href="#">Catalog Request/Download</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Customer Support</h4>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Shipping and Order Tracking</a></li>
							<li><a href="#">Easy Returns</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="#">Replacement Binding Parts</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Newsletter</h4>
							<div class="footer_search">
				    		   <form>
				    			<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				    			<input type="submit" value="Go">
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="https://www.facebook.com"><span> </span></a></li>
							  <li class="twitter"><a href="https://www.twitter.com"><span> </span></a></li>
							  <li class="instagram"><a href="https://www.instagram.com"><span> </span></a></li>	
							  <li class="pinterest"><a href="https://www.pinterest.com"><span> </span></a></li>	
							  <li class="youtube"><a href="https://www.youtube.com"><span> </span></a></li>										  				
						    </ul>
		   					
						</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			           <p>© 2018 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Change Region</span></a></dt>
				        <dd>
				            <ul>
				                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
				                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
				                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
				                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
				                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
				                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				            </ul>
				         </dd>
	   				  </dl>
   				</div>
			</div>
		</div>
</div>
</head>
</html>
