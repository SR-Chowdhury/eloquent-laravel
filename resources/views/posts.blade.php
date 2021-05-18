@extends('welcome')

@section('content')

<h3 class="text-warning text-center">One To One <code>[belongsTo Many]</code></h3>
<div class="row">
    <div class="col-lg-9 offset-lg-3">
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('users') }} ">Users</a>
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('phone') }} ">Phone</a>
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('post') }} ">Posts</a>
        <a class="btn btn-sm mx-1 btn-outline-info" href=" {{ URL::to('singlepost') }} ">Single User Post</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Title</th>
                        <th scope="col">description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postData as $data)
                        <tr>
                            <td> {{ $data->id }} </td>
                            <td> {{ $data->category->category_name }} </td>
                            <td> {{ $data->user->name }} </td>
                            <td> {{ $data->user->email }} </td>
                            <td> {{ $data->title }} </td>
                            <td> {{ $data->description }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
