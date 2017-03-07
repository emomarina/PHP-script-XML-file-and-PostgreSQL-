<?php
/**
 * Created by Emil Tenev
 * Date: 6/9/16
 */
?>
<html>
<head>
    <title>XML CRUD APP</title>
</head>
<body>
    <ul>
        <li><a href="test.php?list">List All Users</a></li>
        <li>
            <form method="POST" action="test.php?filter">
                <input type="text" value='' name="pers"/>
                <input type="submit" value="search"/>
            </form>
        </li>
        
    </ul>
</body>
</html>

