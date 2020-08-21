@extends('backend.master');

@section('content')
<div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3 card">
                    <div class="card-body">
                        <ul class="tabs-animated-shadow nav-justified nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" id="tab-c1-0" data-toggle="tab" href="#tab-animated1-0">
                                    <span class="nav-text">
                                        <div class="card widget-content bg-midnight-bloom">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Dashboard</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>1896</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-1" data-toggle="tab" href="#tab-animated1-1">
                                    <span class="nav-text">
                                        <div class="card widget-content bg-arielle-smile">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Order</div>
                                                    <div class="widget-subheading">Total Clients Profit</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-2" data-toggle="tab" href="#tab-animated1-2">
                                    <span class="nav-text">
                                        <div class="card widget-content bg-danger">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Product</div>
                                                    <div class="widget-subheading">People Interested</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>46%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-3" data-toggle="tab" href="#tab-animated1-3">
                                    <span class="nav-text">
                                        <div class="card widget-content bg-grow-early">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Category</div>
                                                    <div class="widget-subheading">People Interested</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>46%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-c1-4" data-toggle="tab" href="#tab-animated1-4">
                                    <span class="nav-text">
                                        <div class="card widget-content bg-warning">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">User</div>
                                                    <div class="widget-subheading">People Interested</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>46%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-animated1-0" role="tabpanel">
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <i class="fa fa-star"></i>
                                    </button>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Create Category
                                        </button>
                                    </div>
                                </div>
                                <p class="mb-0">jamil
                                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown
                                    printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                            </div>
                            <div class="tab-pane" id="tab-animated1-2" role="tabpanel">
                                <div class="row col-md-12">
                                    <div class="app-page-title">
                                        <div class="page-title-wrapper">
                                            <div class="page-title-actions">
                                                <div class="d-inline-block dropdown">
                                                    <button type="button" class="btn mr-2 mb-2 btn btn-info" id="productModal" data-toggle="modal" data-target=".productModal">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i class="fa fa-business-time fa-w-20"></i>
                                                        </span>
                                                        Create New
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.</th>
                                                        <th>Title</th>
                                                        <th>Brand</th>
                                                        <th>Bought Price</th>
                                                        <th>Sales Price</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach($products as $product)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $product->title}}</td>
                                                        <td>{{ $product->brand}}</td>
                                                        <td>{{ $product->bought_price}}</td>
                                                        <td>{{ $product->sale_price}}</td>
                                                        <td>{{ $product->quantity}}</td>
                                                        <td>
                                                            <a href="{{ route('product.show', $product->id)}}" class="mr-2" title="view" ><info class="fa fa-eye bg-white"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-animated1-3" role="tabpanel">
                                <p class="mb-0">test</p>
                            </div>
                            <div class="tab-pane" id="tab-animated1-4" role="tabpanel">
                                <div class="row col-md-12">
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-dark">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.</th>
                                                        <th>Name</th>
                                                        <th>Contact Number</th>
                                                        <th>User Type</th>
                                                        <th>Area</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach($users as $user)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $user->user_name}}</td>
                                                        <td>{{ $user->phone_no}}</td>
                                                        <td>{{ $user->userType->name}}</td>
                                                        <td>{{ $user->area ? $user->area->name : $user->address }}</td>
                                                        <td>
                                                            <a href="{{ route('user.show', $user->id)}}" class="mr-2" title="view" ><info class="fa fa-eye bg-white"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Large modal -->
<div class="modal fade userModal" tabindex="-1" id="userModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Create A New User</h5>
                        <form action="{{ route('user.store')}}" class="needs-validation" method="post" role="form" enctype="multipart/form-data" novalidate>
                             @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">First Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="First name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Last Name</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Last name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">User Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustomUsername" name="user_name" placeholder="User name" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a unique username.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Contact Number</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="phone_no" placeholder="Contact number">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Password</label>
                                    <input type="password" class="form-control" id="validationCustom02" name="password" placeholder="password" required>
                                    <div class="invalid-feedback">
                                        Please provide a password with minimum six digits.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" name="email" placeholder="email" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a unique email.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Address</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="address" placeholder="adrees">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">NID</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="nid" placeholder="nid">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="validationCustomUsername" name="image"  placeholder="image" aria-describedby="inputGroupPrepend">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Birth Date</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="birth_date" placeholder="birth date">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Guardian Name</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="guardian_name" placeholder="guardian name">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Guardian Phone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustomUsername" name="guardian_phone" placeholder="guardian phone" aria-describedby="inputGroupPrepend">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">User Type</label>
                                    <select id="validationCustom03"  name="user_type_id" class="form-control" required>
                                        <option value="">Select User Type</option>
                                        @foreach($userTypes as $userType)
                                        <option value="{{ $userType->id}}">{{ $userType->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid type.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Area</label>
                                    <select id="validationCustom04"  name="area_id" class="form-control" required>
                                        <option value="">Select Area</option>
                                        @foreach($areas as $area)
                                        <option value="{{ $area->id}}">{{ $area->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid Area.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info float-right" type="submit">Create</button>
                        </form>

                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Large modal Product-->
<div class="modal fade productModal" tabindex="-1" id="productModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Create A New Product</h5>
                        <form action="{{ route('product.store')}}" class="needs-validation" method="post" role="form" enctype="multipart/form-data" novalidate>
                             @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Title</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="title" placeholder="Title">
                                    <div class="invalid-feedback">
                                        Please choose a unique title.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Brand</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="brand" placeholder="Brand">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="validationCustomUsername" name="product_pic"  placeholder="image" aria-describedby="inputGroupPrepend">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Bought Price</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustomUsername" name="bought_price" placeholder="Bought Price" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a unique bought price.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Sale Price</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="sale_price" placeholder="Sale Price" required>
                                    <div class="invalid-feedback">
                                        Please choose a unique sale price.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Offer Price</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="offer_price" placeholder="Offer Price">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Quantity</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="validationCustomUsername" name="quantity" placeholder="Quantity" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Please choose a unique email.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Unit</label>
                                    <input type="text" class="form-control" id="validationCustom02" name="unit" placeholder="Unit">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Description</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="description" placeholder="Description">
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Category</label>
                                    <select id="validationCustom03"  name="category_id" class="form-control" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid type.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Supplier</label>
                                    <select id="validationCustom04"  name="supplier_id" class="form-control" required>
                                        <option value="">Select Supplier</option>
                                        @foreach($suppliers as $supplier)
                                        <option value="{{ $supplier->id}}">{{ $supplier->user_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-info float-right" type="submit">Create</button>
                        </form>

                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    var forms = document.getElementsByClassName('needs-validation');
                                    // Loop over them and prevent submission
                                    var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                            if (form.checkValidity() === false) {
                                                event.preventDefault();
                                                event.stopPropagation();
                                            }
                                            form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
