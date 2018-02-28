<?php

$db = mysqli_connect("localhost", "group_b", "dlnRGGrS9fsyC9qA");

if (!db)
{
	echo "fail"; exit;
}

$group_b = mysqli_select_db_($db, "group_b");

if(!group_b)
{
	print "error"; exit;
}

/*
$userid = $_POST[userid];
$blogID	= $_POST[blogID];
$commentBody = $_POST[comment];
$commentDate = $_POST[commentDate];

$UID = stripcslashes($UID);
$UIDI = htmlspecialchars($UID);

$query = "INSERT INTO blogComments (comentBody, commentDate) VALUES ($commentBody, sysdate)";

$result = mysqli_query($db, query);

$query2 = "SELECT comentBody from blogComments WHERE  userid = '$userid' AND blogID = '$blogID' AND comentBody = '$commentBody' AND commentDate = '$commentDate'";

$result2 = mysqli_query($db, query2);

if (mysqli_num_rows($result2) > 0)
{
while ($row = mysqli_fetch_assoc($result2))
{
	echo "<h1>" . $row["comentBody"] . "</h1>";
}
}
*/
?>