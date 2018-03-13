
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lernkartei </title>
    <link rel="stylesheet" href="{{ routes.css }}bootstrap.min.css" />
    <link rel="stylesheet" href="{{ routes.css }}bootstrap.css" />
    <link rel="stylesheet" href="{{ routes.css }}main.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        {% for box in boxes %}
        <div class="col-sm-6 col-md-4 col-lg-2">
          <div class="card">
            <div class="card-body"><span class="badge badge-secondary"> {{ box.getBoxCardCount(dbConnect.dbcon) }} </span>
              <h5 class="card-title"> Box: {{ box.getBoxID }} </h5>
              <button type="button" onclick='window.location.href="{{php.self}}?do=getcard&boxID={{box.getBoxID}}"' class="btn btn-outline-success">Show Card</button>
            </div>
          </div>
        </div>
        <br>
        {% endfor %}
      </div>
    </div>
    <script src="{{ routes.js }}jquery-3.3.1.min.js"></script>
    <script src="{{ routes.js }}jquery-ui.min.js"></script>
    <script src="{{ routes.js }}bootstrap.min.js"></script>
    <script src="{{ routes.js }}jquery.selectBoxIt.min.js"></script>
    <script src="{{ routes.js }}mainjs.js"></script>
  </body>
</html>
