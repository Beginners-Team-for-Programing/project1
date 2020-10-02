<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>お問い合わせの入力完了</title>
    </head>
    <body>
        <form method="POST" action=/result>
            <input type="hidden" name="name" value={{$inputs['name']}}>
            <input type="hidden" name="mail" value=<?php echo $inputs['mail'];?> >
            <input type="hidden" name="tel" value={{$inputs['tel']}}>
            <input type="hidden" name="contents" value={{$inputs['contents']}}>

        @csrf


        <label>お名前</label>
          {{ $inputs['name'] }}


          <label>メールアドレス</label>
            {{ $inputs['mail'] }}


          <label>電話番号</label>
             {{ $inputs['tel'] }}


          <label>お問い合わせ内容</label>
             {{ $inputs['contents'] }}


          <button type="submit" name="/contact" value="back">
       入力内容修正
   </button>
   <button type="submit" value="send">
       送信する
   </button>
</form>
    </body>
</html>
