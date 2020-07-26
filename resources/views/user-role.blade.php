@extends('welcome')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('set-role') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="user-select">Users</label>
                    <select class="form-control" id="user-select" name="user_id">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="role-select">Roles</label>
                    <select class="form-control" id="role-select" name="role_id[]" multiple>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
