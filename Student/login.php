<HTML>
<style>
body {
    background-image: url("images.jpg");
} 

</style>
<body>
   
        <table bgcolor="blue" width="100%" height="100%">
         <form action="validation.php" method="POST">
        <tr>
        <td>
        <H2>Login Here</H2>
        <label>User Name</label>
        <input type="text" name="user" required><br>
        <label>Password</label>&nbsp&nbsp&nbsp
        <input type="password" name="password" required><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="Login" value="Login">
        <hr>

    </form>
    </td>
    <td>
         <form action="registration.php" method="POST">
        <tr>
        <td>
        <H2>Registered Here</H2>
        <label>User Name</label>
        <input type="text" name="user" required><br>
        <label>Password</label>&nbsp&nbsp&nbsp
        <input type="password" name="password" required><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="Registered" value="Registered">
        
    </form>
    </td>
<a href="normaluser.php">Normal User</a>
</body>