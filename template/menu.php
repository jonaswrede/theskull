<html>
<head>
    <meta charset="utf-8">
    <script>
        $(document).ready(function() {
            var pathname = window.location.pathname;
            $('.navbar-nav > li > a[href="'+pathname+'"]').parent().addClass('active');
        })
    </script>
</head>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/module/main/view/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">SkuLLList</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link pull-right" href="/module/login/action/logout.php"> Logout</a> </li>
            </ul>

        </div>
    </nav>
</html>