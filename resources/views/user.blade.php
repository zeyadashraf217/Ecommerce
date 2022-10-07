@extends('layouts.master')
@section('content')
<script>
      $('#item-2').removeClass('active');
        $('#item-3').removeClass('active');
        $('#item-1').addClass('active');
        e.preventDefault();
</script>

<div class="content-wrapper">
    <div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0">user Page</h1>
    </div>
    </div>
    </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-header">
        <h3 class="card-title">users table</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm">
                <form action="{{ route('user.create') }}">
                    <button type="submit" class="btn btn-labeled btn-success">
                        <span class="btn-label pe-3"><i class="fa-solid fa-plus"></i></span>Add user
                    </button>
                </form>
            </div>
        </div>
        </div>
        <div class="card-body table-responsive p-0" style="height: 300px;">
        <table class="table table-head-fixed text-nowrap">
        <thead>
        <tr>
        <th>ID</th>
        <th>email</th>
        <th>type</th>
        @can('admin')
        <th>Actions</th>
        @endcan
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id  }} </td>
                <td>{{ $user->name  }} </td>
                <td>{{ $user->type  }} </td>
                <td>
                    @can('admin')
                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-labeled btn-danger">
                            <span class="btn-label pe-3"><i class="fa fa-trash"></i></span>Delete
                        </button>
                    </form>

                    <form action="{{ route('user.edit',$user->id) }}" class="pt-3">
                        <button type="submit" class="btn btn-labeled btn-warning">
                            <span class="btn-label pe-3"><i class="fa-solid fa-pen"></i></span>Update
                        </button>
                    </form>

                    @endcan
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

@endsection
