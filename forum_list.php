
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/forum_list.css" /
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
<link rel="stylesheet" href="css/forum_list.css" />
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

<button id="forumlist_totop" onclick="topFunction()"><img src="image/top.jpg" width="50px" height="50px"/></button>
<script src="javascript/forumlist_totop.js"></script>
</body>
</html></head>

<body>
<br /><br /><br />
<div align="center">
<table cellspacing="10" class="tb1">
<th class="th1" >E-FORUM</th>
<tr><td class=td1><span class=sp3>#1&nbsp;Job Referral</span><br /><br /><span class=sp2>Is anyone working as a Developer in Kolkata ?</span><br /><br /><span class=sp1>Tags: job, kolkata | Author: Sourav Ganguly | Time: 2020-06-28 05:22:07</span></td></tr><tr><td class=td3><br /> | <a class=a1 href=#replyhere>reply</a> | <td></tr><tr><td class=td1><span class=sp3>#2&nbsp;Street Food</span><br /><br /><span class=sp2>Whats the best street  food available at Ranchi ?</span><br /><br /><span class=sp1>Tags: food,snacks | Author: Mahendra Singh Dhoni | Time: 2020-06-28 05:25:28</span></td></tr><tr><td class=td3><br /> | <a class=a1 href=#replyhere>reply</a> | <td></tr><tr><td class=td1><span class=sp3>#3&nbsp;Welcome New Members</span><br /><br /><span class=sp2>Pay Membership fee to get registered.
By Admin.</span><br /><br /><span class=sp1>Tags: member,registration | Author: Cristiano Ronaldo | Time: 2020-06-28 21:09:52</span></td></tr><tr><td class=td3><br /> | <a class=a1 href=#replyhere>reply</a> | <td></tr><tr><td class=td1><span class=sp3>#22&nbsp;Open Day</span><br /><br /><span class=sp2>All can come to the day!</span><br /><br /><span class=sp1>Tags: Come Now | Author: Hannah binti Ibrahim | Time: 2024-06-18 11:19:45</span></td></tr><tr><td class=td3><br /> | <a class=a1 href=#replyhere>reply</a> | <td></tr></table><br /><br />
<hr style="padding:1px" color="sienna">
<div id="replyhere">
<form method="post" action="forum_list.php">
<table class="tb1" cellspacing="10px" style="border:hidden;border-radius:2px;border-color:sienna" width="500px">
<tr>
<th colspan="2" align="center" style="font-size:26px;text-decoration:underline">Reply:</th>
</tr>
<tr>
<td style="border:hidden;font-size:16px;font-weight:bold" width="150">Forum ID: </td>
<td style="border:hidden"><input class="i2" type="text" name="id" size="50" placeholder="eg: 1" value=""/><br /></td>
</tr>
<tr>
<td style="border:hidden;font-size:16px;font-weight:bold" width="150">Reply:</td>
<td style="border:hidden"><textarea class="ta1" type="text" name="replymessage" rows="5" cols="40"></textarea></td>
</tr>
<br />
<tr>
<td colspan="2" align="right"><button type="submit" name="replypost" class="bt1" >reply</button></td>
</tr>
</table>
</form>
</div>
<br />
<hr style="padding:1px" color="#050119">
<br />
	
</body>
</html>