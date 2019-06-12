@extends('layouts.admin')

@section('content')
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>Admin Dashboard</h2>
            <h5>Welcome {{ Auth::user()->name }} , Love to see you back. </h5>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3>120 GB </h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Disk Space Available

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3>120 GB </h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Disk Space Available

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3>120 GB </h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Disk Space Available

                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-primary text-center no-boder bg-color-green">
                <div class="panel-body">
                    <i class="fa fa-bar-chart-o fa-5x"></i>
                    <h3>120 GB </h3>
                </div>
                <div class="panel-footer back-footer-green">
                    Disk Space Available

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
