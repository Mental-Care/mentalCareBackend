@extends('layouts.master')


@section('title', 'dashboard')

@section('pageName', 'Dashboard')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Dashboard</li>
@endsection

@section('content')
    <!-- header -->
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Patients</span>
                        <span class="info-box-number"> {{ $patients }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-md"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Therapists</span>
                        <span class="info-box-number">{{ $therapists }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Users</span>
                        <span class="info-box-number">{{ $users }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">New Members</span>
                        <span class="info-box-number">{{ $newUsers }}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!--/ header -->

    <!-- card -->
    <div class="card">
        <div class="card-header border-0">
            <h3 class="card-title">Sessions</h3>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                    <tr>
                        <th>Sessions</th>
                        <th>Price</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1215
                        </td>
                        <td>$13 USD</td>
                        <td>
                            30
                        </td>

                    </tr>
                    <tr>
                        <td>
                            4563
                        </td>
                        <td>$50 USD</td>
                        <td>
                            60
                        </td>

                    </tr>
                    <tr>
                        <td>
                            2575
                        </td>
                        <td>$30 USD</td>
                        <td>
                            30
                        </td>

                    </tr>
                    <tr>
                        <td>
                            8563
                            {{-- <span class="badge bg-danger">NEW</span> --}}
                        </td>
                        <td>$19 USD</td>
                        <td>
                            30
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--/ card -->

@endsection
