@extends('layouts.app')
@section('content')
    <table class="table is-bordered is-striped is-fullwidth">
      <thead>
        <th>Name</th>
        <th>Last Week Weight Loss (%)</th>
        <th>Last Week Exercise Count (Min)</th>
      </thead>
      <tbody>
          @foreach($group->users as $user)
              <tr>
                  <td>{{$user->name}}</td>
                  <td>{{$percent * 100 . '%'}}</td>
                  <td>{{$user->workOutLogs()->first()['length']}}</td>
              </tr>
          @endforeach
      </tbody>
    </table>
    <a class="button is-primary" href="/leagues/{{$group->id}}/chat">Enter League Chat</a>
    <a class="button is-primary" href="/leagues/{{$group->id}}/share">Share League</a>
@endsection
