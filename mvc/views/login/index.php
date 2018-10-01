
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style='z-index:1;'>
<p class="navbar-brand"><?php print $this->name.' '.$this->lname; ?></p>
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link disabled" href="myfiles">My files</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="logout">Logout</a>
    </li>
  </ul>
</nav>
  <div class="container-full" style='overflow:hidden; height:100vh;'>
    <div id='wrap'>
        <h1>Hello <?php print $this->name.' '.$this->lname; ?>!</h1>
        <h1>It is a demonstration</h1>
        <h1>Of some very simple and clean code</h1>
    </div>
  </div>
  <script>
play();
</script>