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

                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header-tab-animation card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                    Sales Report
                                                </div>
                                                <ul class="nav">
                                                    <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">Last</a></li>
                                                    <li class="nav-item"><a href="javascript:void(0);" class="nav-link second-tab-toggle">Current</a></li>
                                                </ul>
                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tabs-eg-77">
                                                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                                            <div class="widget-chat-wrapper-outer">
                                                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                                                    <canvas id="canvas"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container">
                                                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42" class="rounded-circle" src="{{ asset('public/assets/images/avatars/9.jpg') }}" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                                                    <div class="widget-subheading">Web Developer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="font-size-xlg text-muted">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>129</span>
                                                                                        <small class="text-danger pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42" class="rounded-circle" src="{{ asset('public/assets/images/avatars/5.jpg') }}" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ruben Tillman</div>
                                                                                    <div class="widget-subheading">UI Designer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="font-size-xlg text-muted">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>54</span>
                                                                                        <small class="text-success pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42" class="rounded-circle" src="{{ asset('public/assets/images/avatars/4.jpg') }}" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                                                    <div class="widget-subheading">Java Programmer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="font-size-xlg text-muted">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>429</span>
                                                                                        <small class="text-warning pl-2">
                                                                                            <i class="fa fa-dot-circle"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42" class="rounded-circle" src="{{ asset('public/assets/images/avatars/3.jpg') }}" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                                                    <div class="widget-subheading">Web Developer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="font-size-xlg text-muted">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>129</span>
                                                                                        <small class="text-danger pl-2">
                                                                                            <i class="fa fa-angle-down"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="list-group-item">
                                                                        <div class="widget-content p-0">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left mr-3">
                                                                                    <img width="42" class="rounded-circle" src="{{ asset('public/assets/images/avatars/2.jpg') }}" alt="">
                                                                                </div>
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-heading">Ruben Tillman</div>
                                                                                    <div class="widget-subheading">UI Designer</div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="font-size-xlg text-muted">
                                                                                        <small class="opacity-5 pr-1">$</small>
                                                                                        <span>54</span>
                                                                                        <small class="text-success pl-2">
                                                                                            <i class="fa fa-angle-up"></i>
                                                                                        </small>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                                    Bandwidth Reports
                                                </div>
                                                <div class="btn-actions-pane-right">
                                                    <div class="nav">
                                                        <a href="javascript:void(0);" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab 1</a>
                                                        <a href="javascript:void(0);" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab 2</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="tab-eg-55">
                                                    <div class="widget-chart p-3">
                                                        <div style="height: 350px">
                                                            <canvas id="line-chart"></canvas>
                                                        </div>
                                                        <div class="widget-chart-content text-center mt-5">
                                                            <div class="widget-description mt-0 text-warning">
                                                                <i class="fa fa-arrow-left"></i>
                                                                <span class="pl-1">175.5%</span>
                                                                <span class="text-muted opacity-8 pl-1">increased server resources</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="pt-2 card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers fsize-3 text-muted">63%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">Generated Leads</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers fsize-3 text-muted">32%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">Submitted Tickers</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers fsize-3 text-muted">71%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">Server Allocation</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="widget-content">
                                                                    <div class="widget-content-outer">
                                                                        <div class="widget-content-wrapper">
                                                                            <div class="widget-content-left">
                                                                                <div class="widget-numbers fsize-3 text-muted">41%</div>
                                                                            </div>
                                                                            <div class="widget-content-right">
                                                                                <div class="text-muted opacity-6">Generated Leads</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-progress-wrapper mt-1">
                                                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
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
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-header">Active Users
                                                <div class="btn-actions-pane-right">
                                                    <div role="group" class="btn-group-sm btn-group">
                                                        <button class="active btn btn-focus">Last Week</button>
                                                        <button class="btn btn-focus">All Month</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th>Name</th>
                                                            <th class="text-center">City</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">#345</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="{{ asset('public/assets/images/avatars/4.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">John Doe</div>
                                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">Madrid</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-warning">Pending</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#347</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="{{ asset('public/assets/images/avatars/3.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Ruben Tillman</div>
                                                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">Berlin</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-success">Completed</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#321</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="{{ asset('public/assets/images/avatars/2.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Elliot Huber</div>
                                                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">London</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-danger">In Progress</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center text-muted">#55</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="{{ asset('public/assets/images/avatars/1.jpg') }}" alt=""></div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">Amsterdam</td>
                                                        <td class="text-center">
                                                            <div class="badge badge-info">On Hold</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-block text-center card-footer">
                                                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                                <button class="btn-wide btn btn-success">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab-animated1-1" role="tabpanel">
                                <div class="row col-md-12">
                                    <!-- <div class="app-page-title">
                                        <div class="page-title-wrapper">
                                            <div class="page-title-actions">
                                                <div class="d-inline-block dropdown">
                                                    <button type="button" class="btn mr-2 mb-2 btn btn-info" id="productModal" data-toggle="modal" data-target=".productModal">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i class="fa fa-business-time fa-w-20"></i>
                                                        </span>
                                                        Order
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="card-body table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Contact</th>
                                                        <th>Address</th>
                                                        <th>Total Amount</th>
                                                        <th>Payment Status</th>
                                                        <th>Operational Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $order->customer_id ? $order->customer->user_name : $order->customer_name }}</td>
                                                        <td>{{ $order->customer_id ? $order->customer->phone_no : $order->customer_phone_number }}</td>
                                                        <td>{{ $order->customer_id ? $order->customer->address : $order->address }}</td>
                                                        <td>{{ $oreder->paid_amount}}</td>
                                                        <td>{{ $oreder->payment_status}}</td>
                                                        <td>{{ $oreder->sale_operational_statusprice}}</td>
                                                        <td>
                                                            <a href="{{ route('oreder.show', $oreder->id)}}" class="mr-2" title="view" ><info class="fa fa-eye bg-white"></i></a>
                                                            <a href="{{ route('oreder.edit', $oreder->id)}}" class="mr-2" title="edit" ><info class="fa fa-edit bg-white"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                                                        Create New Product
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
                                <div class="row col-md-12">
                                    <div class="app-page-title">
                                        <div class="page-title-wrapper">
                                            <div class="page-title-actions">
                                                <div class="d-inline-block dropdown">
                                                    <button type="button" class="btn mr-2 mb-2 btn btn-info" id="productModal" data-toggle="modal" data-target=".categoryModal">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i class="fa fa-business-time fa-w-20"></i>
                                                        </span>
                                                        Create New Category
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
                                                        <th>Name</th>
                                                        <th>Slug</th>
                                                        <th>Banner</th>
                                                        <th>Parent Category</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $i = 0;
                                                    @endphp
                                                    @foreach($categoryList as $category)
                                                    <tr>
                                                        <td>{{ ++$i }}</td>
                                                        <td>{{ $category->name}}</td>
                                                        <td>{{ $category->slug}}</td>
                                                        <td>{{ $category->banner}}</td>
                                                        <td>{{ $category->parent_category ? $category->parent_category->name : ''}}</td>
                                                        <td>{{ $category->status}}</td>
                                                        <td>
                                                            <a href="{{ route('category.show', $category->id)}}" class="mr-2" title="view" ><info class="fa fa-eye bg-white"></i></a>
                                                            <a href="{{ route('category.edit', $category->id)}}" class="mr-2" title="edit" ><info class="fa fa-edit bg-white"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-animated1-4" role="tabpanel">
                                <div class="row col-md-12">
                                    <div class="app-page-title">
                                        <div class="page-title-wrapper">
                                            <div class="page-title-actions">
                                                <div class="d-inline-block dropdown">
                                                    <button type="button" class="btn mr-2 mb-2 btn btn-info" id="userModal" data-toggle="modal" data-target=".userModal">
                                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                            <i class="fa fa-business-time fa-w-20"></i>
                                                        </span>
                                                        Create New User
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

<!-- Large modal for create user-->
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
                                    <input type="date" class="form-control" id="validationCustom01" name="birth_date" placeholder="birth date">
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

<!-- Large modal for create Product-->
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

<!-- Large modal for create category-->
<div class="modal fade categoryModal" tabindex="-1" id="categoryModal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Create A New Category</h5>
                        <form action="{{ route('category.store')}}" class="needs-validation" method="post" role="form" enctype="multipart/form-data" novalidate>
                             @csrf
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Name">
                                    <div class="invalid-feedback">
                                        Please choose a unique Category Name.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Banner</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="validationCustomUsername" name="image"  placeholder="Banner" aria-describedby="inputGroupPrepend">
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom03">Parent Category</label>
                                    <select id="validationCustom03"  name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id}}">{{ $category->name }}</option>
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