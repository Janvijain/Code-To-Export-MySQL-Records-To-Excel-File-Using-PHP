<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
body {font-family:Arial, Sans-Serif;}
div{width: 300px; margin: 0 auto;}
input[type='text']{width: 200px; border-radius: 2px;border: 1px solid #CCC; padding: 10px; color: #333; font-size: 14px; margin-top: 10px;}
input[type='submit'],input[type='reset']{padding: 10px 25px 8px; color: #fff;background-color: #0067ab;}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
</style>
</head>
<body>
<div>
    <form method="post" action="connection.php">
    <h1>Form</h1>
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="age" placeholder="Age"><br><br>
    <input type="text" name="number" placeholder="Contact"><br><br>
    <input type="submit" name="submit" value="Submit"><br><br>
    </form>
    <a href="view.php"><input type="submit" name="view" value="View Data"></a>
</div>
</body>
</html>
    
