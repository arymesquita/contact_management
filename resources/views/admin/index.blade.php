@extends('adminlte::page')

@section('title', 'Contact Management')

@section('content_header')
    <h1>Contact Management - Index</h1>
    @include('admin.includes.alerts')
@stop


@section('content')

<a href={{ route('contact.create') }} class="btn btn-primary">Create</a>

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->contact}}</td>
                        <td>{{$contact->email}}</td>  
                        <td>
                            <div class="btn-group">
                            <a href="/contacts/edit/{{$contact->id}}"class="btn btn-info btn-default">Edit</a>
                            <form action="/contacts/delete/{{ $contact->id }}" method="POST">
                                {!! csrf_field() !!}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-default">Delete</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th scope="row">{{$contacts->links()}}</th>  
                    </tr>
                </tfoot>  
               
            </div>
        </div>
    </div> 
      
@stop






