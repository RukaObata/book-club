
    <nav class='col-md-2 d-none d-md-block bg-light sidebar height: 100%'>
    <div class='sidebar-sticky'>
        <div class = 'mt-3'>
            
            {!! Form::open(['route' =>'serch.serching']) !!}
            <div class='form-group d-flex flex-row mb-5'>
                {!! Form::text('keyword', null, ['class' => 'form-control']) !!}
                {!! Form::submit('検索') !!}
            </div>
            {!! Form::close() !!}
        </div>
        
        
            {{ \Auth::user()->name }}
            {!! link_to_route('users.show', 'ユーザー詳細', ['user' => $user->id]) !!}
        
        
        <ul class='nav flex-column'>
            <li class='nav-item'>{!! link_to_route('mypage', 'マイページ') !!}</a></li>
            <li class='nav-item'>{!! link_to_route('serch.index', 'さがす') !!}</li>
            <li class='nav-item'>{!! link_to_route('users.books', '本の一覧') !!}</li>
            <li class='nav-item'>{!! link_to_route('books.serch', '本の登録') !!}</li>
            <li class='nav-item'>{!! link_to_route('users.followings', 'フォローフォロワー', ['id' => $user->id]) !!}</li>
            <li class='nav-item'>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
        </ul>
    </div>
</nav>

    