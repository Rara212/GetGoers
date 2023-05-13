<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="/assets/frontend/assets/images/gglogo2.png" class="img-fluid mt-1 mb-3 " alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <?php if (session('loggedIn', true)): ?>
                        <li><a href="adminpage">Home</a></li>
                        <li><a href="#section_2">About</a></li>
                        <li><a href="admin">Deals</a></li>
                        <li><a href="/logout">Logout</a></li>
                        <?php else: ?>
                        <li><a href="adminpage" class="active">Home</a></li>
                        <li><a href="#section_2">About</a></li>
                        <li><a href="admin">Deals</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href="register">Sign Up</a></li>
                        <?php endif; ?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->