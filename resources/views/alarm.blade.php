
<html lang='en'>
<head>
    <title>focus</title>
    <meta charset='UFT-8' name='viewport' content='width=device-width, initial=scale=1.0' >
    <link rel='stylesheet' type='text/css' href='clock.css'>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }
          #clock {
            height:120px;
            font-size: 40px;
            font-family: Poppins;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
        }

        h2 {
            text-align:center;
            font-family: Poppins;
        }

        #alarm-container {
            text-align:center;
            font-size: 0.6em;
            padding: 0.7em;
            color: white;
            font-family: Poppins;
        }

        label {
            display:inline-block;
        }

        .timeofday {
            background-color: #eee;
        }

        .bigger {
            font-weight:bold;
            font-size: 18px;
            font-family: Poppins;
        }

        #sounds {
            text-align: center;
            padding-top: 20px;
        }

        #setButton {
            float:left;
            background-color:greenyellow;
            margin-top:10px;
            margin-left: 200px;
            margin-bottom: 10px;
            font-family: Poppins;
            border-radius: 6px;
        }
        #clearButton {
            float:right;
            background-color:red;
            margin-top:10px;
            margin-right: 200px;
            margin-bottom: 10px;
            font-family: Poppins;
            border-radius: 6px;
        }


    </style>
</head>
<body>
@include('layouts.app')
<div id='main-container'>
    <h2 id='clock'></h2>
</div>

<div id='alarm-container'>
    <h3>Set Alarm Time</h3>
    <label>
        <div>
            <select id='alarmhrs' ></select>
        </div>
    </label>
    <label>
        <div>
            <select id='alarmmins' ></select>
        </div>
    </label>
    <label>
        <div>
            <select id='alarmsecs' ></select>
        </div>
    </label>
    <label>
        <div>
            <br/><br/>
            <select id="ampm">
                <option value="AM">AM</option>
                <option value="PM">PM</option>
            </select>
        </div>
    </label>
</div>
</div>

<div id='buttonHolder'>
    <div>
        <button  id='setButton' onClick='alarmSet()'>Set Alarm</button>
    </div>


    <div>
        <button  id='clearButton' onClick='alarmClear()'>Clear Alarm</button>
    </div>
    <br/><br/><br/><br/><br/><br/>
</div>
<div>@include('layouts.footer')</div>

<script>

    var sound = new Audio("https://raw.githubusercontent.com/Xiija/TestFiles/master/Yuki%20%26%20Tako%2001.mp3");
    sound.loop = true;

    var h2 = document.getElementById('clock');

    // display current time by the second
    var currentTime = setInterval(function(){
        var date = new Date();

        var hours = (12 - (date.getHours()));
        // var hours = date.getHours();

        var minutes = date.getMinutes();

        var seconds = date.getSeconds();

        var ampm = (date.getHours()) < 12 ? 'AM' : 'PM';


        //convert military time to standard time

        if (hours < 0) {
            hours = hours * -1;
        } else if (hours == 00) {
            hours = 12;
        } else {
            hours = hours;
        }


        h2.textContent = addZero(hours) + ":" + addZero(minutes) + ":" + addZero(seconds) + "" + ampm;

    },1000);


    /*functions to get hour, min, secs,
      am or pm, add zero, set alarm time and sound, clear alarm
    */

    function addZero(time) {

        return (time < 10) ? "0" + time : time;

    }

    function hoursMenu(){

        var select = document.getElementById('alarmhrs');
        var hrs = 12

        for (i=1; i <= hrs; i++) {
            select.options[select.options.length] = new Option( i < 10 ? "0" + i : i, i);

        }
    }
    hoursMenu();

    function minMenu(){

        var select = document.getElementById('alarmmins');
        var min = 59;

        for (i=0; i <= min; i++) {
            select.options[select.options.length] = new Option(i < 10 ? "0" + i : i, i);
        }
    }
    minMenu();

    function secMenu(){

        var select = document.getElementById('alarmsecs');
        var sec = 59;

        for (i=0; i <= sec; i++) {
            select.options[select.options.length] = new Option(i < 10 ? "0" + i : i, i);
        }
    }
    secMenu();


    function alarmSet() {

        var hr = document.getElementById('alarmhrs');

        var min = document.getElementById('alarmmins');

        var sec = document.getElementById('alarmsecs');

        var ap = document.getElementById('ampm');


        var selectedHour = hr.options[hr.selectedIndex].value;
        var selectedMin = min.options[min.selectedIndex].value;
        var selectedSec = sec.options[sec.selectedIndex].value;
        var selectedAP = ap.options[ap.selectedIndex].value;

        var alarmTime = addZero(selectedHour) + ":" + addZero(selectedMin) + ":" + addZero(selectedSec) + selectedAP;
        console.log('alarmTime:' + alarmTime);

        document.getElementById('alarmhrs').disabled = true;
        document.getElementById('alarmmins').disabled = true;
        document.getElementById('alarmsecs').disabled = true;
        document.getElementById('ampm').disabled = true;


//when alarmtime is equal to currenttime then play a sound
        var h2 = document.getElementById('clock');

        /*function to calcutate the current time
        then compare it to the alarmtime and play a sound when they are equal
        */

        setInterval(function(){

            var date = new Date();

            var hours = (12 - (date.getHours()));
            // var hours = date.getHours();

            var minutes = date.getMinutes();

            var seconds = date.getSeconds();

            var ampm = (date.getHours()) < 12 ? 'AM' : 'PM';


            //convert military time to standard time

            if (hours < 0) {
                hours = hours * -1;
            } else if (hours == 00) {
                hours = 12;
            } else {
                hours = hours;
            }

            var currentTime = h2.textContent = addZero(hours) + ":" + addZero(minutes) + ":" + addZero(seconds) + "" + ampm;


            if (alarmTime == currentTime) {
                sound.play();
            }

        },1000);


        // console.log('currentTime:' + currentTime);

    }


    function alarmClear() {

        document.getElementById('alarmhrs').disabled = false;
        document.getElementById('alarmmins').disabled = false;
        document.getElementById('alarmsecs').disabled = false;
        document.getElementById('ampm').disabled = false;
        sound.pause();
    }


</script>
<script type='text/javascript' src='clock.js'></script>

</body>

</html>

