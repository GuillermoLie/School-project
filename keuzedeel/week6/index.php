<?php require ('header.php');?>

<main>

    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam amet atque, deleniti doloribus enim est facilis iste labore minima nihil obcaecati odio optio reprehenderit sapiente similique veritatis voluptate voluptatem!</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
    </div>

    <?php require ('aside.php');?>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="..." alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

    <footer>
        <ul>
            <li><a href="#">footer links</a></li>
            <li><a href="#">footer links</a></li>
            <li><a href="#">footer links</a></li>
            <li><a href="#">footer links</a></li>
            <li><a href="#">footer links</a></li>
            <li><a href="#">footer links</a></li>
        </ul>
    </footer>
</main>
</body>
</html>