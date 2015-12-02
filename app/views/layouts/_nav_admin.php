<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><strong>Gaia PDTI</strong></a>
    </div>
    <?php if (isset($current_user) and $current_user->is_admin): ?>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/organizations">Organizações</a></li>
          <li><a href="/users">Usuários</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    <?php endif; ?>
  </div>
</nav>