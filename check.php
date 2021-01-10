<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h1>ご予約内容確認</h1>
  <h2>■お客様情報</h2>
  <div>
    <label for="name">お名前：</label>
    <?php
    //名前
    if(empty($_POST['name'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['name'];
    }
    ?>
  </div>
  <div>
    <label for="email">メールアドレス：</label>
    <?php
    //メールアドレス
    if(empty($_POST['email'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['email'];
    }
    ?>
  </div>
  <div>
    <label for="tel">お電話番号：</label>
    <?php
    //電話番号
    if(empty($_POST['tel'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['tel'];
    }
    ?>
  </div>
  <h2>■ご予約情報</h2>
  <div>
    <label for="checkin">チェックイン：</label>
    <?php
    //チェックイン
    if(empty($_POST['checkin'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['checkin'];
    }
    ?>
  </div>
  <div>
    <label for="checkout">チェックアウト：</label>
    <?php
    //チェックアウト
    if(empty($_POST['checkout'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['checkout'];
    }
    ?>
  </div>
  <div>
    <p>宿泊人数</p>
    <label for="adult">大人：
      <?php
      //大人
      if($_POST['adlut'] >= 1){
        echo $_POST['adlut'].'人';
      }else{
        echo '必ずご入力ください。';
      }
      ?>
    </label>
  </div>
  <div>
    <label for="adult">子供：
      <?php
      //子供
      if($_POST['child'] == 0 || $_POST['child'] >= 1){
        echo $_POST['child'].'人';
      }else{
        echo '必ずご入力ください。';
      }
      /*
      判定に数字の０と１を使うのであれば、emptyを使うのは要注意！
      この場合は、['child']の中を判定しているのであって、変数の判定じゃない。
      本来emptyは変数の有無だけど判定するもの。今回の場合だったらis arryを使った判定が正しい構文になる。
      */
      ?>
    </label>
  </div>
  <div>
    <p>宿泊プラン</p>
    <label for="room">お部屋</label>
    <?php
    //宿泊タイプ
    if(empty($_POST['roomtype'])){
      echo '必ずご入力ください。';
    }else{
      echo $_POST['roomtype'];
    }
    ?>
  </div>
  <div>
    <label for="moreinfo">備考</label>
    <?php
    echo $_POST['moreinfo'];
    ?>
  </div>
  <div>
    <!--予約確定ボタン-->
    <?php if($_POST['name'] && $_POST['email'] && $_POST['tel'] && 
    $_POST['checkin'] && $_POST['checkout'] && $_POST['adult'] && 
    $_POST['child'] && $_POST['roomtype']){
    echo "<form action='sent.php' method='post'>
        <input type='hidden'>
        <input type='submit' value='予約する'>
        <input type='hidden' name='name' value=".$_POST['name'].">
        <input type='hidden' name='email' value=".$_POST['email'].">
        <input type='hidden' name='tel' value=".$_POST['tel'].">
        <input type='hidden' name='checkin' value=".$_POST['checkin'].">
        <input type='hidden' name='checkout' value=".$_POST['checkout'].">
        <input type='hidden' name='adult' value=".$_POST['adult'].">
        <input type='hidden' name='child' value=".$_POST['child'].">
        <input type='hidden' name='roomtype' value=".$_POST['roomtype'].">
        <input type='hidden' name='moreinfo' value=".$_POST['moreinfo'].">
        </form>";
    }else{
      echo "未入力項目があります";
  }
  ?>
    <!--入力画面に戻るボタン-->
    <form action="form.php" method="post">
      <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
      <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
      <input type="hidden" name="tel" value="<?php echo $_POST['tel'];?>">
      <input type="hidden" name="checkin" value="<?php echo $_POST['checkin'];?>">
      <input type="hidden" name="checkout" value="<?php echo $_POST['checkout'];?>">
      <input type="hidden" name="adult" value="<?php echo $_POST['adult'];?>">
      <input type="hidden" name="child" value="<?php echo $_POST['child'];?>">
      <input type="hidden" name="roomtype" value="<?php echo $_POST['roomtype'];?>">
      <input type="hidden" name="moreinfo" value="<?php echo $_POST['moreinfo'];?>">
      <input type="submit" value="入力画面に戻る">
    </form>
  </div>
</body>
</html>
