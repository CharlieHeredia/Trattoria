<!-- Form -->
{!!Form::open(['url' => '/categories/'.$category->i, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
  <input type="submit" class="btn btn-alert col-xs-12 red-text no-padding no-margin no-transform" name="" value="Delete">
{!! Form::close() !!}
