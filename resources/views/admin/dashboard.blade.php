@extends('admin.layout.master')
@section('title', 'Dashboard')

@section('content')
    <section class="content-title">
      <h1>Welcome to Dashboard <small></small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-user-plus text-navy"></i>
                                    <div class="text-center value">20</div>
                                    <div class="text-muted text-uppercase text-center">Patients</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-user text-light-blue"></i>
                                    <div class="text-center value">13</div>
                                    <div class="text-muted text-uppercase text-center">Nurse</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-stethoscope text-maroon"></i>
                                    <div class="text-center value">6</div>
                                    <div class="text-muted text-uppercase text-center">Doctors</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-stethoscope text-maroon"></i>
                                    <div class="text-center value">6</div>
                                    <div class="text-muted text-uppercase text-center">Pharmacist</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-stethoscope text-maroon"></i>
                                    <div class="text-center value">6</div>
                                    <div class="text-muted text-uppercase text-center">Laboratorist</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-stethoscope text-maroon"></i>
                                    <div class="text-center value">6</div>
                                    <div class="text-muted text-uppercase text-center">Accountant</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="info-box">
                                <div class="info-box-content">
                                    <i class="fa fa-usd text-green"></i>
                                    <div class="text-center value">$5400</div>
                                    <div class="text-muted text-uppercase text-center">Hospital Earning</div>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
    </section>
@endsection