 {{-- <html>
<head>
    <title>Laravel Multiple Select Dropdown with Checkbox Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <style type="text/css">
        .dropdown-toggle{
            height: 40px;
            width: 400px !important;
        }
    </style>
</head> --}}
{{-- <body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h6 class="text-white">Laravel Multiple Select Dropdown with Checkbox Example - ItSolutionStuff.com</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('product-update/'.$product->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-lg">
                                    <label for="name"> Name</label>
                                    <input type="text" name="name" id="name" required class="form-control" value="{{$product->name}}">
                                </div>
                                <div class="col-lg">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" required class="form-control" value="{{$product->price}}">
                                </div>
                              </div>
                              <div class="my-2">
                                <label for="category">Short description</label>
                                <input type="text" name="category" id="category" required class="form-control" value="{{$product->category}}">
                              </div>
                              <div class="my-2">
                                <label for="description">Long description</label>
                                <input type="text" name="description" id="description" required class="form-control" value="{{$product->description}}">
                              </div>
                              <div class="my-2">
                                <label for="category_id">Category</label>
                                <select class="form-control" id="category_id" required name="category_id">
                                    @foreach ($SubMenuItems as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                              </div>

                            <div class="">
                                <label><strong>Select Size :</strong></label><br/>
                                <select class="selectpicker" multiple data-live-search="true" name="cat[]" >
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                  <option value="XXL">XXL</option>
                                  <option value="XXXL">XXXL</option>
                                </select>
                            </div>
                            <div class="my-2">
                                <label for="gallery">Gallery</label>
                                <input type="file" name="gallery" class="form-control" required>
                              </div>

                            <div class="text-center" style="margin-top: 10px;">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body> --}}

<!-- Initialize the plugin: -->
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>

</html> --}}




@extends('layouts.main')

@section('main-container')

<!-- BEGIN: Content-->
 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row">
        <div class="content-header-left col-md-4 col-12 mb-2">
          <h3 class="content-header-title">Add Product</h3>
        </div>
        <div class="content-header-right col-md-8 col-12">
          <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Form Layouts</a>
                </li>
                <li class="breadcrumb-item active"><a href="#">Add product</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body"><!-- Basic form layout section start -->
<section id="basic-form-layouts">
  <div class="row match-height">
      <div class="col-md-6">
          <div class="card">
              <div class="card-header">
                  {{-- <h4 class="card-title" id="basic-layout-form">Menu Items</h4>
                  <a class="heading-elements-toggle">
                      <i class="la la-ellipsis-v font-medium-3"></i>
                  </a> --}}

              </div>
              <div class="card-content collapse show">
                  <div class="card-body">
                    <form method="post" action="{{url('product-update/'.$product->id)}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field('PUT')}}
                        <div class="row">
                            <div class="col-lg">
                                <label for="name"> Name</label>
                                <input type="text" name="name" id="name" required class="form-control" value="{{$product->name}}">
                            </div>
                            <div class="col-lg">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" required class="form-control" value="{{$product->price}}">
                            </div>
                          </div>
                          <div class="my-2">
                            <label for="category">Short description</label>
                            <input type="text" name="category" id="category" required class="form-control" value="{{$product->category}}">
                          </div>
                          <div class="my-2">
                            <label for="description">Long description</label>
                            <input type="text" name="description" id="description" required class="form-control" value="{{$product->description}}">
                          </div>
                          <div class="my-2">
                            <label for="category_id">Category</label>
                            <select class="form-control" id="category_id" required name="category_id">
                                @foreach ($SubMenuItems as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                          </div>

                        <div class="">
                            <label><strong>Select Size :</strong></label><br/>
                            <select class="selectpicker" multiple data-live-search="true" name="cat[]" >
                              <option value="S">S</option>
                              <option value="M">M</option>
                              <option value="L">L</option>
                              <option value="XL">XL</option>
                              <option value="XXL">XXL</option>
                              <option value="XXXL">XXXL</option>
                            </select>
                        </div>
                        <div class="my-2">
                            <label for="gallery">Gallery</label>
                            <input type="file" name="gallery" class="form-control" required>
                          </div>

                        <div class="text-center" style="margin-top: 10px;">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>


</section>
<!-- // Basic form layout section end -->
      </div>
    </div>
  </div>
  <!-- END: Content-->
  @endsection

