<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<table border="1px">
    <?php  foreach($send as $key=>$val){ ?>
    <tr>
        <td>{$val['name']}</td>
    </tr>
    <?php  }  ?>
</table>



</body>
</html>