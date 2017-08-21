<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tour de France Game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    
    <body>
        

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3> Etappe informatie </h3>
                </div>
            </div>
            
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                        <img src="{{ $stage->profile_image_link }}" width="100%"/><br/>
                        <strong>Start:</strong> {{ $stage->start }} <br/>
                        <strong>Finish:</strong> {{ $stage->finish }} <br/>
                        <strong>Afstand:</strong>    {{ $stage->km }} km <br/>
                        <strong>Soort:</strong>  {{ $stage->soort_rit }} <br/>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>

        <!-- JS Thether and jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </body>

</html>
