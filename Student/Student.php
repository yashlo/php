<html>
	<body>
	<form action="registration1.php" method="POST">
		<hr>
	<marquee>Welcome to Student Management System</marquee>
	<hr>
	||<a href="Student.php">student</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="login1.php">login</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	||<a href="Feddback.php">Feedback</a>||
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		||<a href="logout.php">LOGOUT</a>||



	<hr>
	<hr>
			<table>
				<tr>
					<td>Nmae</td>
					<td><input type="text" name="name" required></td>
				</tr>
								<tr>
					<td>UserNmae</td>
					<td><input type="text" name="user" required></td>
				</tr>
					<TR>
			<TD>ADDRESS    :-</TD>
			<TD><TEXTAREA COLS="10"ROWS="3" name="add">
			</TEXTAREA></TD>
			</TR>
		<TR>
		<TD>GENDER     :-</TD>	
			<TD><INPUT 	TYPE="RADIO"NAME="gender"VALUE="MALE">MALE  <INPUT TYPE="RADIO"NAME="gender"VALUE="FEMALE">FEMALE </TD>
	</TR>
		<TR>
			<TD>STD</TD>
			<td><input type="text" name="std" required></td>
				</tr>
				<tr>
			<TD>Password</TD>
     <td>   <input type="password" name="password" required></td>
 </tr>
 	<tr>
 		<td>Email</td>
	  <td>    <input type="Email" name="email" required /></td>
    </tr>
    <tr>
 		<td>Phone</td>
	  <td>    <input type="phone" name="phone" required /></td>
    </tr>
 	<tr>
	  <td>    <input type="submit" name="Login" value="submit"></td>
    </tr>
</table>
		</form>
		
<a href="login1.php">If your are already registered</a>
	</body>
</html>
