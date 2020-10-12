<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <title>Laravel & Vue </title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <style>
      html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
              
                margin-left: 20%;
                margin-right: 20%;
            }
            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 20px;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
    </style>
</head>
<body>
<div id="app">
<div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        Calendar
                    </div>
                <div>
            
                    <label for="">Event</label>
                        <input type="text" name="event_name" v-model="newEvent.event_name" required>
                    </div>
                    <div>
                        <label for="">From</label>
                        <input type="date" name="date_from" v-model="newEvent.date_from" required>
                        <label for="">To</label>
                        <input type="date" name="date_to" v-model="newEvent.date_to" required>
                    </div>
                    <!-- <div>
                        <input type="checkbox" value="Mon" v-model="checkedDay">
                        <label for="mon">Mon</label>
                        <input type="checkbox" value="Tue" v-model="checkedDay">
                        <label for="tue">Tue</label>
                        <input type="checkbox" value="Wed" v-model="checkedDay">
                        <label for="wed">Wed</label>
                        <input type="checkbox" value="Thu" v-model="checkedDay">
                        <label for="thu">Thu</label>
                        <input type="checkbox" value="Fri" v-model="checkedDay">
                        <label for="fri">Fri</label>
                        <input type="checkbox" value="Sat" v-model="checkedDay">
                        <label for="sat">Sat</label>
                        <input type="checkbox" value="Sun" v-model="checkedDay">
                        <label for="sun">Sun</label>

                    </div> -->

                    <button class="btn btn-primary" @click.prevent="createEvent()">
                        Save
                    </button>
                <div class="mt-5">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                            
                            <th scope="col">Event Name</th>
                            <th scope="col">Date From</th>
                            <th scope="col">Date To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for ="event in events">
                            
                            <td>@{{event.event_name}}</td>
                            <td>@{{event.date_from}}</td>
                            <td>@{{event.date_to}}</td>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>