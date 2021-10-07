@extends('adminlte::page')

@section('title', 'Contact Management')

@section('content_header')
    <h1>Contact Management - Create</h1>
@stop

@section('content')
@include('admin.includes.alerts')
<form method="POST" action="{{ route('contact.store') }}">
    {!! csrf_field() !!}
    <div class="form-row">

        <div class="form-group col-md-6">
          <label for="">Name</label>
          <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{old('name')}}">
           
        </div>
        <div class="form-group col-md-6">
          <label for="">Email</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="">Contact</label>
          <input name="contact" type="text" class="form-control" id="contact" placeholder="Contact" value="{{old('contact')}}">
        </div>
        <div class="form-group col-md-6">
        </div>
    </div>
    <a href="{{ route('contact.index') }}" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Create</button>
    

</form>  
@endsection