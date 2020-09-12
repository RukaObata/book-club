<nav class='col-md-2 d-none d-md-block bg-light sidebar'>
    <div class='sidebar-sticky'>
        {{-- {!! Form::open(['route' =>'']) !!} --}}
        <div class='form-group'>
            {!! Form::text('', null, ['class' => 'form-control']) !!}
            {!! Form::submit('検索') !!}
        </div>
        {{-- {!! Form::close() !!} --}}
        <div class='card'>
            {{ \Auth::user()->name }}
        </div>
        
        <ul class='nav flex-column'>
            <li class='nav-item'>{!! link_to_route('mypage', 'マイページ') !!}</a></li>
            <li class='nav-item'><a href="#" class="nav-link">さがす</a></li>
            <li class='nav-item'>{!! link_to_route('users.books', '本の一覧') !!}</li>
            <li class='nav-item'>{!! link_to_route('books.serch', '本の登録') !!}</li>
            <li class='nav-item'>{!! link_to_route('users.followings', 'フォローフォロワー', ['id' => $user->id]) !!}</li>
            <li class='nav-item'>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
        </ul>
    </div>
</nav>
    