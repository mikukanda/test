<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>4eachblog掲示板</title>
<link rel="stylesheet" href="style.css">
</head>


  
<body>
  

  <?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=miku;host=localhost;" ,"root" ,"mysql");

$stmt=$pdo->query("select*from 4each_keijiban");  
?>
  
  

  <div class="logo"><img src="4eachblog_logo.jpg"></div>
    <header>
       <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>    </ul>
     </header>
    
  
  
   
<main>     
      <div class="left">
         <h1 class="header-pro">プログラミングに役立つ掲示板</h1> 
    
         <form method="post" action="insert.php">
        <h2 class="a">入力フォーム</h2>
         
      <div>
        <label>ハンドルネーム</label> 
        <br>
        <input type="text" class="text" size="45" name="handlename">  
     </div>
     <br>
  
     <div>
        <label>タイトル</label>
	 <br>
        <input type="text" class="text" size="45" name="title">
     </div>
     <br>
     
     <div>
         <label>コメント</label> 
       <br>
         <textarea name="comments" rows="10" cols="80"></textarea>
     </div>
      
           
    <div>
    <input type="submit" class="submit" value="投稿する">
     </div>
   </form> 
    
     
   <?php
    while($row=$stmt->fetch()){
      echo"<div class='box1'>";
      echo"<h1 class='t'>".$row['title']."</h1>";      
      echo"<div class='box2'>";
      echo $row['comments'];
       echo"<h3 class='b'>posted by".$row['handlename']."</h3>";   
      echo"</div>";
       echo"</div>";
      }
    ?>
  </div>
  
      

       
       
       <div class="right"> 
      <ul>
         <h2>人気の記事</h2>
         <li>PHPオススメ本</li>
         <li>PHP MyAdminの使い方</li>
         <li>今人気のエディタTop5</li>
         <li>HTMLの基礎</li>
         <h2>オススメリンク</h2>
         <li>インターノウス株式会社</li>
         <li>XAMPPのダウンロード</li>
         <li>Eclipseのダウンロード</li>
         <li>Bracketsのダウンロード</li>
         <h2>カテゴリ</h2>
         <li>HTML</li>
         <li>PHP</li>
         <li>MySQL</li>
         <li>JavaScript</li>
      </ul>
      
  </div>
      

       
       
       
    
  </main>
  <footer>
 
      
     copyright(c)internous｜4each blog is the one which provides
      A to Z about programming.
   
  </footer>
</body>
</html>

