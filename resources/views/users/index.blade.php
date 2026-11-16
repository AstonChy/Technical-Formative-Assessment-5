@extends('layouts.app')

@section('title', 'Users | POS Foundations')

@section('content')
<section class="page-heading compact"><p class="eyebrow">System directory</p><h1>User accounts</h1><p class="lead">Temporary sample records supplied by <code>UserController</code>.</p></section>
<section class="table-panel"><div class="table-meta"><h2>All users</h2><span class="count-pill">{{ count($users) }} records</span></div><div class="table-wrap"><table><thead><tr><th>ID</th><th>User</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td class="muted">{{ $user['id'] }}</td><td class="strong">{{ $user['name'] }}</td><td>{{ $user['email'] }}</td><td>{{ $user['role'] }}</td><td><span class="status {{ strtolower($user['status']) }}">{{ $user['status'] }}</span></td></tr>
@endforeach
</tbody></table></div></section>
@endsection
