@extends('layouts.app')

@section('content')
<div class="columns">
  <div class="column is-6 is-offset-3">
    <div class="form">
      <h1 class="title">Login</h1>
      <div class="field">
        <label class="label">Email</label>
        <div class="control">
          <input class="input" type="text" placeholder="e.g your@email.com">
        </div>
      </div>

      <div class="field">
        <label class="label">Password</label>
        <div class="control">
          <input class="input" type="email" placeholder="e.g. password123">
        </div>
      </div>
      <div class="control">
        <button class="button is-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

@endsection
