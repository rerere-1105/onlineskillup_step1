<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
     <link rel="stylesheet" href="comment.css">
  </head>
  <body>
    <?php
      if(isset($_POST["name"])&& isset($_POST["comment"])){
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        print("<p class='reina'>「 ${name} 」のコメントは「 ${comment} 」です</p>");
      } else {
    ?>
        <p>名前とコメントを書いてね！！</p>
        <form method="POST" action="index.php">
          <input name="name" />
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>

  </body>
</html>
