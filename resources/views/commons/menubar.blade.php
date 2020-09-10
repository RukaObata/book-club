<nav class='col-md-2 d-none d-md-block bg-light sidebar'>
    <div class='sidebar-sticky'>
        <div class='card'>
            <h5 class='card-title'>{{ $user->name }}</h5>
            {!! link_to_route('users.show', 'ユーザ詳細', ['user' => $user]) !!}
        </div>
        
        <ul class='nav flex-column'>
            <li class='nav-item'><a href="#" class="nav-link">マイページ</a></li>
            <li class='nav-item'><a href="#" class="nav-link">さがす</a></li>
            <li class='nav-item'><a href="#" class="nav-link">読書一覧</a></li>
            <li class='nav-item'>{!! link_to_route('book.register', '本の登録') !!}</li>
            <li class='nav-item'>{!! link_to_route('users.followings', 'フォローフォロワー', ['id' => $user->id]) !!}</li>
            <li class='nav-item'>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
        </ul>
    </div>
</nav>
    