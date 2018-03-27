<div class="col-md-12">
  <div class="card">
    <h5 class="card-header">Recent Comments</h5>
    <div class="card-body">
      <ul class="list-unstyled">
      @foreach($comments as $comment)
      <li class="media">
          <img class="mr-3 rounded-circle" src="http://placehold.it/60x60" alt="Generic placeholder image">
          <div class="media-body">
            <h5 class="mt-0 mb-1"><a href="users/{{ $comment->user->id }}">{{ $comment->user->first_name }} {{ $comment->user->last_name }} -- {{ $comment->user->email }}</a><br/>
              <small>
                commented on {{ $comment->user->created_at }}
              </small>
            </h5>
            {{ $comment->body }}
            <p><b>Proof : </b>{{ $comment->url }}</p>
          </div>
        </li>
      @endforeach
       </ul>
    </div>
  </div>
</div>