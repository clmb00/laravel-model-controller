@extends('layout.layout')

@section('title')
    Details
@endsection

@section('content')
    <h1 class="mx-5 ps-5 fw-semibold">{{$movie->title}}</h1>
    <h2 class="mx-5 ps-5 mb-4">{{$movie->original_title}}</h2>
    <div class="container">
        <h4><strong>Language:</strong> {{$movie->nationality}}</h4>
        <h4><strong>Vote:</strong> {{$movie->vote}}</h4>
        <h4><strong>Date:</strong> {{$movie->date}}</h5>
        <p class="mt-4"><strong>Plot:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, cumque eius non esse aperiam, nostrum minima vero quo et facilis earum pariatur? Aut atque quia quidem nemo, nihil officia dicta esse nulla provident, quas facere maiores error possimus iste corporis dolore iusto magnam eaque commodi delectus! Non id, sint hic delectus ad soluta. Tempora quis nemo velit minima nisi consequuntur dolores iusto saepe magni. Dicta iste dolor reprehenderit odio aspernatur! Quod magni vel adipisci provident iste nesciunt assumenda dolor, voluptate libero id ducimus, repellat, illo iusto minus sequi doloremque illum ipsum error cumque minima dolorum tempore omnis itaque expedita! Quibusdam quos laudantium magnam iste vitae officia. Commodi velit ab aperiam perspiciatis, adipisci deserunt, nulla nisi, fuga ipsam molestias consequatur. Odit autem veniam ipsum facilis id iure repellat necessitatibus accusantium dignissimos iusto esse, eligendi suscipit ducimus atque quia a? Laborum aperiam, error inventore sint suscipit quia iure in ea distinctio voluptates, alias veniam iusto doloremque quam delectus vero fugiat praesentium ipsa? Dolore accusamus temporibus vitae quas debitis consectetur. Amet, ratione autem exercitationem fuga officiis, tempora eos in, laboriosam ipsa itaque quos deleniti alias at aut cupiditate quo molestiae nostrum dolorum nihil. Voluptatem natus hic ipsa reiciendis eaque laboriosam, alias, molestiae eos minima, aperiam nemo officiis velit blanditiis iste repellat consequuntur sunt. Possimus doloribus vero aliquid delectus quidem. Aspernatur debitis perspiciatis rem mollitia, cupiditate soluta illum deserunt.</p>
    </div>
    <a class="mx-5 ps-5 mb-4 text-info" href="{{ route('home') }}"><- Back</a>
@endsection
