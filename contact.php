<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Contact Us Page</title>
    <?php require 'utils/styles.php'; ?>
    <?php require 'utils/scripts.php'; ?>
</head>

<body>
    <?php require 'utils/header.php'; ?>
    <div class="content">
        <div class="container">
            <div class="col-md-12">
                <h1>Contact Us</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>
        <div class="container">
            <div class="col-md-6 contacts">
                <h1><span class="glyphicon glyphicon-user"></span> Murtaza Bilwaniwala</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email: murtazabilwaniwala19@gnu.ac.in<br>
                    <span class="glyphicon glyphicon-link"></span> Enrollment No : 19012011005<br>
                    <span class="glyphicon glyphicon-phone"></span> Mobile : +91 9624159352
                </p>
                <h1><span class="glyphicon glyphicon-user"></span> Kaushal Vibhakar</h1>
                <p>
                    <span class="glyphicon glyphicon-envelope"></span> Email : kaushalvibhakar19@gnu.ac.in<br>
                    <span class="glyphicon glyphicon-link"></span> Enrollment No : 19012011091<br>
                    <span class="glyphicon glyphicon-phone"></span> Mobile : +91 7567261003
                </p>
            </div>
            <div class="col-md-6">
                <form>
                    <br>
                    <div class="form-group">
                        <label for="Title">Title :</label>
                        <input type="text" name="title" id="Title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Comment">Message :</label>
                        <textarea id="Comment" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default pull-right">Send <span class="glyphicon glyphicon-send"></span></button>
                </form>
            </div>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>

</html>