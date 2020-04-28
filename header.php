<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo '/profile/?id='.$single['id'];?>">
                <?php echo $_COOKIE['login']; ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/index.php">Смартфоны</a></li>
                <li><a href="/news.php">Новости</a></li>
                <li><a href="/logout.php">Выйти</a>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>

</div>
