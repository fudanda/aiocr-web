@extends('layouts.backend')

@section('content')
@if ($errors->any())
    <ul class="alert alert-danger">
         @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
         @endforeach
    </ul>
@endif
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                        Create New statistical_reports_admin
                    </h4>
                    <p class="category">
                        <a href="{{ url('/admin/statistical_reports_admin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                    </p>
                </div>
                <div class="card-content">

                                            {!! Form::open(['url' => '/admin/statistical_reports_admin', 'class' => 'form-horizontal', 'files' => true]) !!}

                                            @include ('admin.statistical_reports_admin.form')

                                            {!! Form::close() !!}
                </div>
            </div>  <!-- end card -->
        </div>
    </div>

@endsection
