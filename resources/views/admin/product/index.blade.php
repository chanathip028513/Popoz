
  @include ('layouts.admin.head')

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    @include ('layouts.admin.header')
    <!--header end-->

    <!--sidebar start-->
    @include ('layouts.admin.sidebar')


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Contents </h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-table"></i>Table</li>
              <li><i class="fa fa-th-list"></i>Basic Table</li>
            </ol>
          </div>
        </div>
       
        <form method="POST" action="{{route('product.c')}}" enctype="multipart/form-data">

{{csrf_field()}}
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
</div>
<div class="form-group">
<label for="description">Description</label>
<input type="text" class="form-control" name="description" id="description" placeholder="Description">
</div>
<div class="form-group">
<label for="image">Image</label>
<input type="file" class="form-control" name="image" id="image" required>
</div>
<div class="form-group">
<label for="type">Category</label>
<select class="form-control" name="category">
<option value="men">Men</option>
<option value="women">WoMen</option>
</select>
</div>
<div class="form-group">
<label for="type">Price</label>
<input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
</div>
<button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
      
      </section>
    </section>
    <!--main content end-->
    @include ('layouts.admin.footer')
  </section>


</body>

</html>
