<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>untitled</title>
</head>
<body>
	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
     <p>This section represents the area that only logged in members can access.</p>
		 <table>
			 <tr>
				 <th>
					 email
				 </th>
				 <th>
					 username
				 </th>

				 <th>
					 address
				 </th>
				 <th>
					 gender
				 </th>
			 </tr>

		 <?php  /*foreach ($results as $result)
		 {
		 $member_email=$result('email');
		 $member_username=$result('username');
		 $member_address=$result('address');
		 $member_gender=$result('gender');

			?>
			<tr>
				<td>
					<?php echo $member_email;?>
				</td>
				<td>
					<?php echo $member_username;?>
				</td>
				<td>
					<?php echo $member_address;?>
				</td>
				<td>
					<?php echo $member_gender;?>
				</td>
			</tr>
			<?php }*/ ?>
		</table>


	<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
</body>
</html>
