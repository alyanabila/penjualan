<!DOCTYPE HTML>
<html>
<head>
<title>Koperasi | Sekolah</title><link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<body>
<form class="form-horizontal" action="/edit_product/{id}" method="POST" enctype="multipart/form-data">
  @csrf
<fieldset>
  <br>
  <h1><b><center>New Product</center></b></h1>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="kode" value="{{$product->no_products}}" placeholder="PRODUCT ID" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" value="{{$product->name}}" placeholder="PRODUCT NAME" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PRICE</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="price" value="{{$product->price}}" placeholder="Rp." class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="product_description" name="description" value="{{$product->description}}" ></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">CATEGORY</label>
  <div class="col-md-4">
  <input id="product_name" name="category" value="{{$product->category}}" placeholder="category" class="form-control input-md" type="text">
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
</head>
</html>