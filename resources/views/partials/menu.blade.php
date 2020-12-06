<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="#">LaraNews</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvb" aria-controls="nvb" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	@if(Auth::check())
		<div class="collapse navbar-collapse" id="nvb">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('posts.index') }}">Notícias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}">Sair</a>
				</li>
			</ul>
		</div>
	@else
		<div class="collapse navbar-collapse" id="nvb">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">Notícias</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">Login</a>
				</li>
			</ul>
		</div>
	@endif
</nav>