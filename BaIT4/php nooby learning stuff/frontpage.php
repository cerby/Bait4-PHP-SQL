<?php
session_start();
?>
<html>
<body>
<head>
<title>Mymovielist</title>
    <link rel="stylesheet" type="text/css" href="/mymovielist.css" />
    <link rel="stylesheet" type="text/css" href="/css/global.css" />
    <script type="text/javascript" src="/scripts/jquery.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header">
<?php if ($_SESSION['login'] == true){?>
        <div id="menu">
                <div id="menu_right">
                    <div id="searchBar">
                    <input type="text" size="30"  value="Search" id="topSearchText" class="inputtext" /> 
                    <select onchange="ts_selection();" class="inputtext" id="topSearchValue">
                    <option value="0">TV-Show/Movie</option>
                    <option value="1">Person</option>
                    <option value="2">Characters</option>
                    </select>
                    <input type="image" value="Search" src="/search_button.gif" />
                    </div>
                </div>
                <div id="menu_left">
                    <ul id="nav">
                        <li class="small"><a href="/about.php">About</a></li>
                        <li class="tiny"><a href="/register">Join</a></li>
                        <li class="smaller"><a id="malLogin" href="/login">Login</a></li>
                    </ul>
                </div>
?>