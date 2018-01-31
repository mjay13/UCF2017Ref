@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users</div>

                <div class="panel-body">
                  @foreach ($users as $user)
                    <p>
                      {{ $user->id }}: {{ $user->name }}
                      <form action="user/{{ $user->id }}" method="POST">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button>Remove </button>
                      </form>
                    </p>
                  @endforeach                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection