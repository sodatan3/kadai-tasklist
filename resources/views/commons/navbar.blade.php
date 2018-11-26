<header>
    <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left" href="/">タスク管理アプリ</a>
            </div>
        
        
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('tasks.create', '新規タスクの登録',null,['class' => 'glyphicon glyphicon-pencil']) !!}</li>
                </ul>
            </div>
        </div> <!-- /container -->
    </nav>
    
</header>