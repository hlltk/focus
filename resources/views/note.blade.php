<!DOCTYPE html>
<html>
<head>
    <title>focus</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>body {
            margin: 0px;
        }
        #header {
            background: black;
            color: white;
            font-size: 16px;
            padding: 16px;



        }
        #header > #name {
            font-family: Poppins;
            display: inline-block;
            margin-left: 10px;
        }
        #menu a, #menubutton a {
            text-decoration: none;
            color: white;
            text-transform: uppercase;
            font-family: Poppins, Sans-serif;
            font-size: 13px;
        }
        .clear {
            clear: both;
        }
        #container {
            margin: 20px 20px 20px 20px;
        }
        #area {
            width: 100%;
            height: 100%;
            font: 1em arial;
            color: rgba(50, 82, 50, 1.0);
        }
        #area:focus {
            color: black;
            border: 2px solid #96c56f;
            box-shadow: 0px 1px 1px #888888;
        }
        .footer {
            width: 100%;
            background-color: #325232;
            height: 32px;
            position: fixed;
            bottom: 0px;
        }

        #controls {
            margin-left: 10px;
            margin-bottom: 10px;
        }
        a.button {
            width: 6%;
            display: inline-block;
            background: greenyellow;
            border-radius: 6px;
            color: white;
            text-align: center;
            font-family: Poppins;
            margin-bottom: 10px;
        }
        a.button:hover {
            background: black;
            color: white;
        }
        a.button:active {
            background: black;
        }
        }
    </style>
</head>
<body>
@include('layouts.app')
<div id="header">
    <div id="name" >Take Note</div>
    <div id="menu" class="hiddenmenu">

    </div>
    <div class="clear"></div>
</div>
<div id="container">
    <textarea id="area" rows="10" cols="50"></textarea>
</div>
<div id="controls">
    <p><a href="javascript:save();" class="button">Save</a>
        <a href="javascript:clear();" class="button">Clear</a></p>
</div>

<br/><br/><br/>

<div>@include('layouts.footer')</div>

<script>window.onload = function() {
        document.getElementById('menulink').onclick = function() {
            var menu = document.getElementById('menu');
            if(menu.className != 'shownmenu') {
                menu.className = 'shownmenu';
            }
            else {
                menu.className = 'hiddenmenu';
            }
        }
    }
    function check_web_storage_support() {
        if(typeof(Storage) !== "undefined") {
            return(true);
        }
        else {
            alert("Web storage unsupported!");
            return(false);
        }
    }
    function display_saved_note() {
        if(check_web_storage_support() == true) {
            result = localStorage.getItem('note');
        }
        if(result === null) {
            result = "No note saved";
        }
        document.getElementById('area').value = result;
    }
    function save() {
        if(check_web_storage_support() == true) {
            var area = document.getElementById("area");
            if(area.value != '') {
                localStorage.setItem("note", area.value);
            }
            else {
                alert("Nothing to save");
            }
        }
    }
    function clear() {
        document.getElementById('area').value = "";
    }
    document.getElementById('about').onclick = function() {
        document.getElementById('container').innerHTML = "";
        document.getElementById('controls').innerHTML = "";
        document.getElementById('menu').className = 'hiddenmenu';
        var container = document.getElementById('container');
        var p = document.createElement('p');
        p.id = 'aboutus';
        container.appendChild(p);
        var text = document.createTextNode("This tutorial is made possible through Eqela Developer Network");
        p.appendChild(text);
    }
</script>
<script src="functionality.js"></script>
</body>
</html>

