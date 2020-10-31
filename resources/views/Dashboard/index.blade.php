@extends('template.master')
@section('title','Dashboard')
@section('content')
<h1 class="m-0 text-dark">Dashboard</h1>

<div class="row">
    <div class="col-lg-3">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Dosen</h3>
                <p>150</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>Mahasiswa</h3>
                <p>5000</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

@stop
