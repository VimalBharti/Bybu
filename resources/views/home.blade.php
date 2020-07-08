@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <div class="card">
                <div class="card-content">
                    <table class="table is-fullwidth has-text-centered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Instagram Link</th>
                                <th>Behance Link</th>
                                <th>Dribbble Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($joins as $join)
                            <tr>
                                <td>{{$join->id}}</td>
                                <td>{{$join->instagram}}</td>
                                <td>{{$join->behance}}</td>
                                <td>{{$join->dribbble}}</td>
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
