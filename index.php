<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="confirm.php">
        <div class="form-item">お問い合わせの種類</div>
        <?php
          $types = array('ご意見', 'ご感想', 'その他');
         ?>
        <!-- この下にselectタグを書いていきましょう -->
        <select name = "category">
          <option value = "未選択">選択してください</option>
          <?php foreach ($types as $type): ?>
          <?php echo "<option value = $type>$type</option>" ?>
          <?php endforeach ?>
        </select>

        <div class="form-item">名前</div>
        <input type="text" name="name">

        <div class="form-item">メールアドレス</div>
        <input type="text" name="e-mail">

        <div class="form-item">電話番号</div>
        <input type="text" name="phone-number">

        <div class="form-item">お問い合わせ内容</div>
        <textarea name="body"></textarea>

        <input type="submit" value="送信">
      </form>
    </div>
  </div>
</body>
</html>
