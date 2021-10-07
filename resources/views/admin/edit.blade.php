@extends('adminlte::page')

@section('title', 'Contact Management')

@section('content_header')
    <h1>Contact Management - Edit</h1>
@stop

@section('content')
@include('admin.includes.alerts')
<form method="POST" action="/contacts/update/{{ $contact->id }}">
    {!! csrf_field() !!}
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Name</label>
          <input name="name" type="text" class="form-control" id="name" placeholder="Name" 
          value="{{$contact->name}}">
        </div>
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input name="email" type="email" class="form-control" id="email" placeholder="Email"
          value="{{$contact->email}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="contact">Contact</label>
          <input name="contact" type="text" class="form-control" id="contact" placeholder="Contact"
          value="{{$contact->contact}}">
        </div>
        <div class="form-group col-md-6">
        </div>
    </div>
    <a href="/contacts" class="btn btn-secondary" tabindex="5">Cancel</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Editar</button>
    

</form>  
@endsection