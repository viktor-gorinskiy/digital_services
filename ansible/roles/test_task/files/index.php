<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ domain }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            
                <div class="col col-lg-2 my-lg-4">
                    <a href="http://{{ server_name }}/phpMyAdmin/" class="btn btn-info" role="button" aria-pressed="true">phpMyAdmin</a>
                </div>
        
                <div class="col col-lg-6">
                    <?php phpinfo(); ?>
                </div>
        
                <div class="col col-lg-2">
                </div>
        </div>
    </div>

  </body>
</html>