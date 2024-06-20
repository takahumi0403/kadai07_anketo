<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>旅行アンケート（受信）</title>
</head>
<body>
    <form action="write.php" method = "POST">
        <h2 >旅行に関するアンケート</h2>
     <div class = "input-area">
         <p>名前</p>
         <input type="text" name = "name">
     </div>
     <div class = "input-area">
          <p>メールアドレス</p>
          <input type="text" name ="email"></p>
     </div>

     <div class ="question">
        <h3>質問1 性別は？</h3>
        <input type="radio" name="seibetu" value="女性">女性
        <input type="radio" name="seibetu" value="男性">男性

        <h3>質問2 職業は？</h3>
        <!-- nemeは職業から、work -->
        <input type="radio" name="work" value="学生">学生
        <input type="radio" name="work" value="アルバイト">アルバイト
        <input type="radio" name="work" value="会社員">会社員
        <input type="radio" name="work" value="会社役員">会社役員
        <input type="radio" name="work" value="自営業">自営業
        <input type="radio" name="work" value="その他">その他
        
        <h3>質問3 旅行の頻度はどのくらいですか？</h3>
        <!-- nemeは頻度から、hi -->
        <input type="radio" name="q3" value="年に1回以内">年に1回以内
        <input type="radio" name="q3" value="年に2～3回">年に2～3回
        <input type="radio" name="q3" value="年に4回以上">年に4回以上

        <h3>質問4 好きな旅行先は？</h3>
        <!-- nemeは旅行先から、rks -->
        <input type="radio" name="q4" value="国内旅行">国内旅行
        <input type="radio" name="q4" value="海外旅行">海外旅行
        <input type="radio" name="q4" value="どちらも好き">どちらも好き

        <h3>質問5 旅行に行くときの移動手段は？</h3>
        <!-- nemeは移動手段から、ts -->
        <input type="radio" name="q5" value="飛行機">飛行機
        <input type="radio" name="q5" value="新幹線">新幹線
        <input type="radio" name="q5" value="車">車

        <h3>質問6 旅行で重視することは？</h3>
        <!-- nemeはq6-->
        <input type="radio" name="q6" value="観光">観光
        <input type="radio" name="q6" value="食事">食事
        <input type="radio" name="q6" value="宿泊施設">宿泊施設
        <input type="radio" name="q6" value="体験">体験
        <input type="radio" name="q6" value="費用">費用

     </div>
    
     <input type="submit" value="送信">




    </form>
</body>
</html>