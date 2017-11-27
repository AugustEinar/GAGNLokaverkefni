@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $thread->title }}</div>

                <div class="panel-body">
                    {{ $thread->body }}
                </div>

            </div>




                <form method="POST" action="/threads/{{ $thread->id }}/comment">
                {{ csrf_field() }}
                <div class="form-group">
                 <label>Comment: </label>
                    <textarea type="text" name="body" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                            <button class="btn btn-primary">Save</button>
                </div>
                </form>

                @foreach($thread->comments as $comment)
                        <article>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ $comment->body }}
                            </div>
                          </div>
                        </article>
                    @endforeach



        </div>
    </div>
</div>
@endsection
