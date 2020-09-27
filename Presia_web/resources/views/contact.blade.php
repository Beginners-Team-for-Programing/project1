<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>presia/recruit</title>
    </head>
    <body>

    <!-- お問い合わせ内容を入力後に表示する場合こちらを表示   -->
    @if(isset($contact['name']))
    <p>お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。</p>
    <ul style="list-style-type:none">
        <li>お名前：<?php echo $contact['name']  ?></li><br>
        <li>メールアドレス：<?php echo $contact['mail']  ?></li><br>
        <li>電話番号：<?php echo $contact['tel']  ?></li><br>
        <li>お問い合わせ内容：<?php echo $contact['contents']  ?></li><br>
    </ul>

    <!-- 初めはこちらを表示   -->
    @else
        <h1>お問い合わせフォーム</h1>
        <p>サービスや採用に関するお問い合わせは、こちらからお願いいたします。</p>
        <p>弊社とビジネスをご一緒頂けるパートナー企業様を募集しております。</p>
        <p>下記のフォームを入力してください。</p>
        @if(count($errors) > 0)
            <p>入力に問題があります。再度入力してください。</p>
        @endif
        <form action="/result" method="POST">
            <table>
                @csrf
                @error('name')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>お名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
                @error('mail')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
                @error('tel')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>電話番号: </th><td><input type="text" name="tel" value="{{old('tel')}}"></td></tr>
                @error('contents')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>お問い合わせ内容: </th><td><textarea name="contents"　cols="50" rows="5"> {{old('contents')}}</textarea></td></tr>
                <tr><th></th><td><input type="submit" value="send"></td></tr>
            </table>
        </form>
    @endif
    </body>
</html>
