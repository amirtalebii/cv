<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    <?php
    $firstname="amir";
    $lastname="talebi";
    $age=12;
    $classname="edu";
    $test = array("first name"=>"$firstname","lastname"=>" $lastname ","age"=>"$age",array("classname"=>"$classname"));
    print_r($test);
    ?>
</pre>

<form class="" action="index.html" method="post">
        <label>YourName : </label>
        <input type="text" name="" value=""><br/>
        <input type="password" name="" value=""><br/>
        <input type="color" name="" value=""><br/>
        <input type="checkbox" name="" value=""><br/>
        <input type="submit" name="" value="submit">
</form>

</body>
</html>
