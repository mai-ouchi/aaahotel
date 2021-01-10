<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>ご予約フォーム</title>
</head>
<body>
  <form action="check.php" method="post">
    <h1>ご予約フォーム</h1>
    <h2>■お客様情報</h2>
    <div>
      <label for="name">お名前</label>
      <input type="text" name="name"
      value="<?php if(!empty($_POST['name'])){
        echo $_POST['name'];} ?>">
    </div>
    <div>
      <label for="email">メールアドレス</label>
      <input type="text" name="email"
      value="<?php if(!empty($_POST['email'])){
        echo $_POST['email'];} ?>">
    </div>
    <div>
      <label for="tel">お電話番号</label>
      <input type="text" name="tel"
      value="<?php if(!empty($_POST['tel'])){
        echo $_POST['tel'];} ?>">
    </div>
    <h2>■ご予約情報</h2>
    <div>
      <label for="checkin">チェックイン</label>
      <input type="date" name="checkin"
      value="<?php if(!empty($_POST['checkin'])){
        echo $_POST['checkin'];} ?>">
    </div>
    <div>
      <label for="checkout">チェックアウト</label>
      <input type="date" name="checkout"
      value="<?php if(empty($_POST['checkout'])){
        echo $_POST['checkout'];} ?>">
    </div>
    <div>
      <p>宿泊人数</p>
      <label for="adult">大人</label>
      <select name="adult">
        <option value="adlut">選択してください</option>
        <?php
        for($i = 1; $i <= 4; $i++ ){
          if($i==$_POST['adult']){
            echo "<option value='{$i}' selected>{$i}人</option>";
          }else {
            echo "<option value='{$i}'>{$i}人</option>";
          }
        }
        ?>
      </select>
      <label for="child">子供</label>
      <select name="child">
        <option value="選択してください">選択してください</option>
          <?php
          for($i = 0; $i <= 4; $i++){
            if(isset($_POST['child'])/*入っているかどうか判別する*/){
            if($i==$_POST['child']){
              echo "<option value='{$i}' selected>{$i}人</option>";
            }else {
              echo "<option value='{$i}'>{$i}人</option>";
            }
          }else{
            echo "<option value='{$i}'>{$i}人</option>";
          }
          }
          /*POSTの中が空だと、プログラムは空を０と判定するから、デフォルトで０人のほうが選択される*/ 
          ?>
      </select>
      <div>
        <p>宿泊プラン</p>
        <label for="roomtype">お部屋：</label>
        <select name="roomtype">
          <option value="<?php if(!empty($_POST['roomtype'])){
            echo $_POST['roomtype'];} ?>">選択してください</option>
          <option value="洋室">洋室</option>
          <option value="和室">和室</option>
        </select>
      </div>
      <div>
        <label for="moreinfo"><p>備考　その他ご希望ありましたらご入力ください。</p>
        <textarea name="moreinfo" rows="4" cols="40"
        value="<?php echo $_POST['moreinfo']; ?>"></textarea>
      </label></div>
      <input type="submit" value="予約内容確認">
    </form>
  </body>
  </html>
