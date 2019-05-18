@if(Auth::check())
    @if(Auth::user()->checkNeedShowButtonByUserId($post->user_id))
        <div class="card-footer">
            <a class="link-button" href="/posts/{{$post->id}}/edit">
                <button class="btn btn-primary">Edit</button>
            </a>

            <form method="POST" action="/posts/{{$post->id}}" style="display: inline;">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                    Delete
                </button>
            </form>
        </div>
    @endif
@endif
