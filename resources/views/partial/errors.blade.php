@if(!$errors->isEmpty())
<div class="card-panel red darken-3 white-text"><b>Error</b>
  <ul>
  @foreach($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif
