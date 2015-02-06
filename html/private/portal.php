<?php session_start(); ?>

<html>
<body>

<?php
if( isset($_SESSION["established"]) ){ echo "<p>session found</p>"; session_destroy();}
else { header('HTTP/1.0 401 Unauthorized'); header( 'Location: http://www.shanedbwiseman.com/errorpages/401.html' ); session_destroy(); die();}
?>

</body>
</html>
