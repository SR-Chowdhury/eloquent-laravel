@extends('welcome')

@section('content')

<h3 class="text-warning text-center">One To One <code>[hasOne]</code></h3>
<div class="row">
    <div class="col-lg-9 offset-lg-3">
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('users') }} ">Users</a>
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('phone') }} ">Phone</a>
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('post') }} ">Posts</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userData as $data)
                        <tr>
                            <td> {{ $data->id }} </td>
                            <td> {{ $data->name }} </td>
                            <td> {{ $data->email }} </td>
                            <td> {{ $data->phone->phone }} </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
