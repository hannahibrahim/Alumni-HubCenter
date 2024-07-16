
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Connection</title>
</head>

<body>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/header_navigationbar.css" />
</head>

<body>
<div>
<img src="image/header.jpg" width="100%" height="350px" />
</div>
<table class="table">
<tr>
<td>
    <div class="dropdown">
    <li class="li1"><a href="alumni_home.php"><span class="span1">My Profile</span></a></li>
    <div class="dropdown-content">
    		<a href="update_profile.php">Update Profile</a>
   		</div>
    </div>
    <div class="dropdown">
  	<li class="li1 active"><a href="forum_list.php"><span class="span1">E-Forum</span></a></li>
    	<div class="dropdown-content">
        	<a href="forum_list.php#replyhere">Reply Forum Post</a>
    		<a href="add_forum_post.php">Add Forum Post</a>
            <a href="alumni_mypostreply.php">My Forum Post and Replies</a>
   		</div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="search_alumni2.php"><span class="span1">Search Alumni</span></a></li>
    </div>
    </div><li class="li2"><span class="span2">Welcome  Hannah Ibrahim</span>
    <li class="li2"><a href="logout.php"><span class="span1">Logout</span></a></li>
</ul>
</td>
</tr>
</table>

<button id="addforum_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/addforum_totop"></script>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Forum - Add Post</title>
<link rel="stylesheet" href="css/add_forum_post.css"/>

</head>

<body>
<br /><br />
<h2>New Forum Post</h2>
<br />
<form action="add_forum_post.php" method="post">
<table align="center" cellspacing="30">
<tr>
<th align="left">Title: </th>
<td><input size="59" type="text" value="" name="title"/></td>
</tr>
<tr>
<th align="left">Tags: </th>
<td><input type="text" value="" name="tags" size="59" /></td>
<tr>
<th align="left" >Content: </label></th>
<td><textarea name="message" cols="60" rows="6" size="60"></textarea></td>
<tr>
<td colspan=2 align="right"><button class="addforumbt" type="submit" name="addPost" >Add Post</button></td>
</tr>
</table>
</form>
<br /><br /><br /><br />

</body>
</html>