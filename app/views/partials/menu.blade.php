<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ URL::route('index') }}">Big Panel</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ URL::route('index') }}">Dashboard</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tabelle <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="{{ URL::route('resources.index') }}">Persone</a></li>
            <li><a href="{{ URL::route('projects.index') }}">Progetti</a></li>
            <li><a href="{{ URL::route('allocations.index') }}">Allocazioni</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Crea NUOVO</li>
            <li><a href="{{ URL::route('resources.create') }}">Nuova Persona</a></li>
            <li><a href="{{ URL::route('projects.create') }}">Nuovo Progetto</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>