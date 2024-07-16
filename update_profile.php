
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" conten="text/html; charset=utf-8" />
<title>Update Profile</title>
<link rel="stylesheet" href="css/update_profile.css" />
</head>

<body>
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
<title>Update Profile Navigation</title>
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
    <li class="li1 active"><a href="alumni_home.php"><span class="span1">My Profile</span></a></li>
    <div class="dropdown-content">
    		<a href="update_profile.php">Update Profile</a>
   		</div>
    </div>
    <div class="dropdown">
  	<li class="li1"><a href="forum_list.php"><span class="span1">E-Forum</span></a></li>
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

<button id="updateprofile_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/updateprofile_totop.js"></script>
</body>
</html><div>
<br /><br />
<h2>Update Profile</h2>
<br />
<form method="post" name="profile" enctype="multipart/form-data">
<table class="updatetable1" cellspacing="20px" align="center">
  <tr>
    <th>Address:</th>
    <td class="updatetd1"><textarea name="address" cols="40" rows="6"></textarea></td>
  </tr>
  <tr>
    <th>Mobile Number:</th>
    <td class="updatetd1"><input type="text" name="contact" size="38" maxlength="10" pattern="[0-9]{10}"required></td>
  </tr>
  <tr>
    <th>Company:</th>
    <td class="updatetd1"><input type="text" name="comp" size="38" /></td>
  </tr>
  <tr>
    <th>Email:</th>
	<td class="updatetd1"><input type="email" name="email" size="38" /></td>
  </tr>
  <tr>
    <th>Session:</th>
	<td><select class="select" name="batch">							
				<option>2005-2009</option>
				<option>2006-2010</option>
				<option>2007-2011</option>
				<option>2008-2012</option>
				<option>2009-2013</option>
				<option>2010-2014</option>
				<option>2011-2015</option>
				<option>2012-2016</option>
				<option>2013-2017</option>
				<option>2014-2018</option>
				<option>2015-2019</option>
				<option>2016-2020</option>
				<option>2017-2021</option>
				<option>2018-2022</option>
				<option>2019-2023</option>
			</select></td>
  </tr>
  <tr>
    <th>Course:</th>
    <td><select class="select" name="prog" >						
		<option>Cognitive Science</option>
		<option>Human Resource and Development</option>
        <option>Psychology</option>
		<option>Counselling</option>
			</select></td>
  </tr>
  <tr>
    <th>Profile Picture:</th>
    <td class="updatetd1"><input type="file" name="pp" size="38" /></td>
  </tr>
  <tr>
    <td class="updatetd1" colspan="2" align="center">
	<button class="updatebt" type="submit" name="update" onclick="check()">Update</button></td>
  </tr>
</table>
</form>
</div>
<br /><br /><br /><br /><br /><br />
</body>
<script>
	function check(){
	var phoneno=/^\d{10}$/;
	var my=document.getElementById('mobile')
	if(my.value.match(phoneno))
	{
		return true;
	}
	else
	{
		alert ("ENTER VALID MOBILE NUMBER");
		return false;
	}
	}
</script>
</html>