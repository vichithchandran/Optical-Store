<!DOCTYPE html>
<html>
<body>
<?php include('header.php');?>

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container" >
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="#">Product</a></li>
				<li><a href="#">Add Product</a></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

		<!-- section -->
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container" style="width:500px;">
		
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] , input[type=file] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #F8694A;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
  background-color: #4A4E5A;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container1 {
  padding: 16px;
  border-radius: 5px;
  background-color: #f2f2f2;

}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


<h2>Add Product</h2>

<form action="/action_page.php" method="post">
  <div class="container1">

    <label> Select Type</label>
   <select name="selecttype" placeholder="Select Type" Style="width: 100%;padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc;box-sizing: border-box;" required>
   	<option value="msunglasses"> Sunglasses</option>
   	<option value="weyeglasses"> Eyeglasses</option>
   	<option value="keyeglasses">Kids Eyeglasses</option>
   	<option value="clens"> Contact Lens</option>
   	<option value="colorbind">Color Bind Glasses</option>
   	</select>

   	<label> Select Sub Category</label>
   <select name="selectsubcat" placeholder="Select Sub Category" Style="width: 100%;padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc;box-sizing: border-box;" required>
   	<option value="msunglasses"> Men</option>
   	<option value="weyeglasses"> Women</option>
   	</select>

  	<label><b>Product Name</b></label>
    <input type="Text" placeholder="Enter Product Name" name="name" required>

    <label><b>Image</b></label>
   	<input type="file" name="fileToUpload" id="fileToUpload">

   	<label><b> Quantity</b></label>
    <input type="Text" placeholder="Enter Quantity" name="qty" required

     <label><b> Price</b></label>
    <input type="Text" placeholder="Enter Price" name="price" required>

     <label><b> GST</b></label>
    <input type="Text" placeholder="Enter GST" name="gst" required>

     <label><b> Total Price</b></label>
    <input type="Text" placeholder="Enter Total Price" name="tprice" required>

    <label><b> Description</b></label><br>
    <textarea placeholder="Enter Description" name="description" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;box-sizing: border-box;" required></textarea>

	<button type="submit">Add</button>
    
  </div>

  <div class="container1" style="background-color:#f1f1f1">
    
    
  </div>
</form>


</div>

			<!-- row -->
			<div class="row">
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->



	<?php include('footer.php');?>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
