<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lernkartei </title>
    <link rel="stylesheet" href="{{ routes.css }}bootstrap.min.css" />
    <link rel="stylesheet" href="{{ routes.css }}main.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class=" login-page">
            <h1 class="text-center"> <span class="selected">Add card</span></h1>
            <form action="{{ php.self }}" method="POST">
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="question"
                  autocomplete="off"
                  placeholder="Question"
                  required />
              </div>
              <div class="input-container">
                <input
                  class="form-control"
                  type="text"
                  name="answer"
                  autocomplete="off"
                  placeholder="Answer"
                  required />
              </div>
              <div class="form-group">
                <select class="form-control" name="card_type">
                  <option value="text">Text Card</option>
                  <option value="image">Image Card</option>
                </select>
              </div>
              <div class="input-container">
                <input
                  class ="btn btn-outline-info"
                  name = "add_card"
                  type="submit"
                  value="Add" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row min-height">
        <div class="col-sm-12 col-md-12 col-lg-6">
          {% if firstCard[0]["question"] is defined %}
          <div class="card">
            <div class="card-body card-js">
              <p class="badge badge-secondary">Created on: {{ firstCard[0]["created_date"] }} </p>
              <p class="card-title text-center">
               <h1 class="text-center"> {{ firstCard[0]["question"] }}</h1>
               <span  class="showanswer btn btn-outline-secondary"> show</span>
              </p>
              <div class="show-answer hidden-class">
                <h1 class="card-text">
                  {{ firstCard[0]["answer"] }}
                </h1>
                <button
                 type="button"
                 onclick='window.location.href="{{ php.self }}?do=notsure&cardID={{ firstCard[0]["id"] }}&boxID= {{ box.getBoxID }} "'
                 class="btn btn-outline-secondary">Not sure
               </button>
               <button
                 type="button"
                 onclick='window.location.href="{{ php.self }}?do=move&cardID={{ firstCard[0]["id"] }}&boxID= {{ box.getBoxID }} "'
                 class="btn btn-outline-success">I got it
               </button>
              </div>
            </div>
          </div>
          {% endif %}
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-10">
          <span class="badge badge-secondary" style="font-size: 13px">learned cards</span>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{ (learnedCardsCount / sumOfCards) * 100 }}%;" aria-valuenow="{{ learnedCardsCount }}" aria-valuemin="{{ cardsCount }}" aria-valuemax="{{ sumOfCards }}" >{{ learnedCardsCount }} von {{ sumOfCards }}
            </div>
          </div>
        </div>
      </div>
      <br />
      <div class="row">
        {% for box in boxes %}
        <div class="col-sm-6 col-md-4 col-lg-2">
          <div class="card">
            <div class="card-body">
              <span class="badge badge-secondary">
                 {{ dbQuery.queryGetCardCount(box.getBoxID) }}
               </span>
              <h5 class="card-title"> Box: {{ box.getBoxID }} </h5>
              {% if dbQuery.queryGetCardCount(box.getBoxID) != 0 %}
              <button
                type="button"
                onclick='window.location.href="{{php.self}}?do=getcard&boxID={{box.getBoxID}}"'
                class="btn btn-outline-success">Show Card
              </button>
              {% endif %}
            </div>
          </div>
        </div>
        <br>
      {% endfor %}
      </div>
    </div>
    <script src="{{ routes.js }}jquery-3.3.1.min.js"></script>
    <script src="{{ routes.js }}bootstrap.min.js"></script>
    <script src="{{ routes.js }}mainjs.js"></script>
  </body>
</html>
