<?php
include "db.php";

$sql = "select * from  comments where postID = :postID order by parentID asc, datetime asc";
$stmt = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute(array(':postID' => 1));
$result = $stmt->fetchAll();

$comments = [];

foreach ($result as $row) {
    $comments[$row->parentID][] = $row;
}
echo "<pre>";
    print_r($comments);
echo "</pre>";
echo  "\n";
echo  "\n";

function displayComment(Array $comments, int $n): string
{
    if (isset($comments[$n])) {
        $str = "<ul>";
        foreach ($comments[$n] as $comment) {
            $str .= "<li><div class='comment'><span class='pic'>
                        {$comment->username}
                     </span>";
            $str .= "<span class='datetime'>{$comment->datetime}</span>";
            $str .= "<span class='commenttext'>" . $comment->comment . "</span></div>";
            $str .= displayComment($comments, $comment->id);
            $str .= "</li>";
        }
        $str .= "</ul>";
        return $str;
    }
    return "";
}

echo displayComment($comments, 0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            clear: both;
        }
        li ul {
            margin: 0px 0px 0px 50px;
        }
        .pic {
            display: block;
            width: 50px;
            height: 50px;
            float: left;
            color: #000;
            background: #ADDFEE;
            padding: 15px 10px;
            text-align: center;
            margin-right: 20px;
        }
        .comment {
            float: left;
            clear: both;
            margin: 20px;
            width: 500px;
        }
        .datetime {
            clear: right;
            width: 400px;
            margin-bottom: 10px;
            float: left;
        }
    </style>
</head>
<body>

</body>
</html>
