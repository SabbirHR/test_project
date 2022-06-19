@extends('layouts/admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active "> <a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active "> Main</li>

            </ol>
        

            <form action="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- this field use only put method --}}
                {{method_field('put')}}
            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Background Image</h3>
                    
                    <img class="img-thumbnail" style="height: 30vh" src="{{url($main->bg_img)}}" >
                    <input class="mt-3" type="file" name="bg_img" id="bg_img">
                </div>
                <div class="form-group col-md-4 mt-4">

                    <div >
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" name="title" id="title" class="form-control"  value="{{$main->title}}">
                    </div>
                    <div class="md-4 mt-5">
                        <label for="title"><h4>Sub Title</h4></label>
                        <input type="text" name="sub_title" id="sub_title" class="form-control"  value="{{$main->sub_title}}">
                    </div>
                    <div class="md-4 mt-5">
                        <h4>Upload Resume</h4>
                        <input type="file" name="resume" id="resume">
                    </div>
                </div>
                <div>
                    <input class="btn btn-primary mt-5" type="submit" value="Submit">

                </div>
                
            </div>
            </form>
        </div>
    </main>
@endsection


             
 