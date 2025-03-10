@extends('layouts.layout')
@section('content')
<h1>Leaderboard</h1>

<div class="card">
    <div class="card-body">
        <form class="mb-3 mt-3" action="{{ route('leaderboard.search') }}" method="get">
            <div class="mb-3 mt-3 d-flex">
                <input class="form-control" type="number" name="user_id" placeholder="Enter User ID" required>
                <button class="btn btn-primary ms-2" type="submit">Search</button>
            </div>
        </form>

        <form class="mb-3 mt-3" action="{{ route('leaderboard.index') }}" method="get">
            <div class="mb-3 mt-3 d-flex">
                <select name="filter" class="form-control">
                    <option value="day">Day</option>
                    <option value="month">Month</option>
                    <option value="year">Year</option>
                </select>
                <button class="btn btn-primary ms-2" type="submit">Filter</button>
            </div>
        </form>
        
        <form class="mb-3 mt-3" action="{{ route('leaderboard.recalculate') }}" method="post">
            @csrf
            <button class="btn btn-primary" type="submit">Recalculate</button>
        </form>
    </div>
</div>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Points</th>
            <th>Rank</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($users))
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->total_points }}</td>
                    <td>#{{ $user->rank }}</td>
                </tr>
            @endforeach
        @elseif($user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->total_points }}</td>
                <td>#{{ $user->rank }}</td>
            </tr>
        @else
            <tr>
                <td>No data found</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection