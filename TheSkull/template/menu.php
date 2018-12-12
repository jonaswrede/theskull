
    <script>
        $(document).ready(function() {
            var pathname = window.location.pathname;
            console.log(pathname);
            $('.navbar-nav > li > a[href="'+pathname+'"]').parent().addClass('active');
        })
    </script>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/module/main/view/index.php">Home</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/module/main/view/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">SkuLLList</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/module/main/view/info.php">Info</a>
                </li>
            </ul>
        </div>
        <div>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link pl-2" href="/module/login/action/logout.php"> Logout</a> </li>
            </ul>

        </div>
    </nav>