<html>
<body>
<head>
<title>Mymovielist</title>
    <link rel="stylesheet" type="text/css" href="/mymovielist1.css" />
</head>
<body>
    <div class="wrapper">
        <div class="header">
        <div id="menu">
                
                <div id="menu_left">
                    <ul id="nav">
                        <li class="small"><a href="/about.php">About</a></li>
                        <li class="tiny"><a href="/register.php">Join</a></li>
                        <li class="smaller"><a href="/login.php">Login</a></li>
                    </ul>
                </div>
                <div id="menu_right">
                    <div id="searchBar" >
                    <form action="search.php"  method="get">
                        <input type="text" size="30" name="searchvalue"  value="Search" id="topSearchText" class="inputtext" /> 
                        <select class="inputtext" id="topSearchValue">
                        <option value="0">TV-Show/Movie</option>
                        <option value="1">Person</option>
                        <option value="2">Characters</option>
                        </select>
                        <input type="image" value="Search"  src="/search_button.gif" />
                    </form>
                    </div>
                </div>
</div>
</div>
</body>
</html>