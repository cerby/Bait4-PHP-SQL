<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>My movie list</title>
	<link rel="stylesheet" type="text/css" href="/css/mal.css" />
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
			        <option value="0">Anime</option>
			        <option value="1">Manga</option>
			        <option value="2">Characters</option>
			        <option value="6">People</option>
			        <option value="3">Fansub Groups</option>
			        <option value="4">Clubs</option>
			        <option value="5">Users</option>
			        </select>
			        <input type="image" value="Search" src="http://cdn.myanimelist.net/images/magnify.gif" />
			        </div>
				</div>
				<div id="menu_left">
					<ul id="nav">
						<li class="small"><a href="/profile/user/Kago">Profile</a>
							<ul class="wider" style="display: none;">
								<li><span class="edit"><a href="/editprofile.php?go=panelsettings">Edit</a></span><a href="/panel.php">Panel</a></li>
								<li><span class="edit"><a href="/editprofile.php">Edit</a></span><a href="/profile/Kago">Profile</a></li>
								<li><a href="/mymessages.php">Messages</a></li>
								<li><a href="/myfriends.php">Friends</a></li>
								<li><a href="/clubs.php?action=myclubs">Clubs</a></li>
								<li><span class="edit"><a href="/myblog.php">Edit</a></span><a href="/blog/Kago">Blog</a></li>
								<li><a href="/myreviews.php">Reviews</a></li>
								<li class=""><a href="/myrecommendations.php">Recommendations</a></li>
								<li><a onclick="logoutMAL()" href="#">Logout</a></li>
							</ul>
						</li>
						<li class="small"><a href="/anime.php">Anime</a>
							<ul class="wider" style="display: none;">
								<li><span class="edit"><a href="/editlist.php?type=anime">Edit</a></span><a href="/animelist/Kago">View List</a></li>
									<li><a href="/addtolist.php">Add Anime</a></li>					<li><a href="/reviews.php?t=anime">Reviews</a></li>
								<li><a href="/recommendations.php?s=recentrecs&amp;t=anime">Recommendations</a></li>
								<li><a href="/topanime.php">Top Anime</a></li>
								<li><a href="/fansub-groups.php">Fansub Groups</a></li>
							</ul>
						</li>
						<li class="small"><a href="/manga.php">Manga</a>
							<ul class="wider" style="display: none;">
								<li><span class="edit"><a href="/panel.php?go=editmanga">Edit</a></span><a href="/mangalist/Kago">View List</a></li>
									<li><a href="/addtolist.php">Add Manga</a></li>					<li><a href="/reviews.php?t=manga">Reviews</a></li>
								<li><a href="/recommendations.php?s=recentrecs&amp;t=manga">Recommendations</a></li>
								<li><a href="/topmanga.php">Top Manga</a></li>
							</ul>
						</li>
						<li class=""><a href="#">Community</a>
							<ul style="display: none;">
								<li><a href="/forum/">Forums</a></li>
								<li><a href="/clubs.php">Clubs</a></li>
								<li><a href="/blog.php">Blogs</a></li>
								<li><a href="/users.php">Users</a></li>
							</ul>
						</li>
						<li class="medium"><a href="#">Industry</a>
							<ul class="wide" style="display: none;">
								<li><a href="/people.php">People</a></li>
								<li><a href="/character.php">Characters</a></li>
								<li><a href="/news.php">News</a></li>
								<li><a href="/favorites.php">Top Favorites</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<?php } else {?>
			<div id="menu">
			    <div id="menu_right">
			        <div id="searchBar">
			        <input type="text" size="30"  value="Search" id="topSearchText" class="inputtext" /> 
			        <select class="inputtext" id="topSearchValue">
			        <option value="0">Anime</option>
			        <option value="1">Manga</option>
			        <option value="2">Characters</option>
			        <option value="6">People</option>
			        <option value="3">Fansub Groups</option>
			        <option value="4">Clubs</option>
			        <option value="5">Users</option>
			        </select>
			        <input type="image"  value="Search" src="http://cdn.myanimelist.net/images/magnify.gif" />			        
			        </div>			        
				</div>
				<div id="menu_left">
					<ul id="nav">
						<li class="small"><a href="/anime.php">Anime</a>
							<ul class="wider" style="display: none;">
								<li><a href="/reviews.php?t=anime">Reviews</a></li>
								<li><a href="/recommendations.php?s=recentrecs&amp;t=anime">Recommendations</a></li>
								<li><a href="/topanime.php">Top Anime</a></li>
								<li><a href="/fansub-groups.php">Fansub Groups</a></li>
							</ul>
						</li>
						<li class="small"><a href="/manga.php">Manga</a>
							<ul class="wider" style="display: none;">
								<li class=""><a href="/reviews.php?t=manga">Reviews</a></li>
								<li><a href="/recommendations.php?s=recentrecs&amp;t=manga">Recommendations</a></li>
								<li><a href="/topmanga.php">Top Manga</a></li>
							</ul>
						</li>
						<li class=""><a href="#">Community</a>
							<ul style="display: none;">
								<li><a href="/forum/">Forums</a></li>
								<li><a href="/clubs.php">Clubs</a></li>
								<li><a href="/blog.php">Blogs</a></li>
								<li><a href="/users.php">Users</a></li>
							</ul>
						</li>
						<li class="medium"><a href="#">Industry</a>
							<ul class="wide" style="display: none;">
								<li><a href="/people.php">People</a></li>
								<li><a href="/character.php">Characters</a></li>
								<li><a href="/news.php">News</a></li>
								<li><a href="/favorites.php">Top Favorites</a></li>
							</ul>
						</li>
						<li class="tiny"><a href="/register">Join</a></li>
						<li class="smaller"><a id="malLogin" href="/login">Login</a></li>
					</ul>
				</div>
			</div>
					<?php }?>	
		</div>
	<div class="content">
		<?php 
		echo $content;
		?>
	</div>
	</div>
</body>
</html>