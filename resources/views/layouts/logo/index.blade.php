@extends('layouts.admin.master')
@section('css')
@endsection

@section('title')
    Update Logo
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6"> Update Logo <h4 class="mb-0"> </h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color"> Update Logo </a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('message')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Update Logo
                    </button>
                    @include('layouts.logo.add')
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered p-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>logo</th>
                                <th>Processes</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                        <td>{{ $loop -> iteration }}</td>
                                   <td><img style="width: 40%; height: 32%;"
                                            src="{{asset('uploads/'.$file->logo)}}"
                                       ></td>
                                    <td>
                                        <button class="btn btn-success btn-sm" title="Edit" data-toggle="modal"
                                                data-target="#Editabout" ><i
                                                class="fa fa-edit"></i></button>
                                        @include('layouts.logo.edit')

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
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

@endsection
