<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style='z-index:1;'>
<p class="navbar-brand"><?php print $this->name.' '.$this->lname; ?></p>
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="myfiles">My files</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="logout">Logout</a>
    </li>
  </ul>
</nav>
  <div class="container-full" style='background:white; overflow:hidden; height:100vh;'>
  
        <?php if(isset($this->files))
                print $this->files; 
                ?>

  </div>