<nav id="sitenav">
     <div class="container">
          <a href="index.php">Suggle</a>
          <form action="search.php" method="get">
               <input type="search" name="q" placeholder="Search suggle, google, wikipedia & web..." value="<?php if ($shqy != false) {echo $shqy;} ?>">
          </form>
     </div>
</nav>
