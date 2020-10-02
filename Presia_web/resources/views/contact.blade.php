<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>presia/recruit</title>
    </head>
    <body>
    @if(isset($contact['name']))
        <p>お問い合わせを受付しました。ご連絡まで少々お待ちくださいませ。</p>

    @else
        <h1>お問い合わせフォーム</h1>
        <p>サービスや採用に関するお問い合わせは、こちらからお願いいたします。</p>
        <p>弊社とビジネスをご一緒頂けるパートナー企業様を募集しております。</p>
        <p>下記のフォームを入力してください。</p>
        @if(count($errors) > 0)
            <p>入力に問題があります。再度入力してください。</p>
        @endif
        <form action="/confirm" method="POST">
            <table>
                @csrf
                @error('name')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>お名前: </th><td><input type="text" name="name" value="{{old('name')}}"placeholder="吉谷瞳"></td></tr>
                @error('mail')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>メールアドレス: </th><td><input type="text" name="mail" value="{{old('mail')}}"placeholder="〇〇〇〇@presia.co.jp"></td></tr>
                @error('tel')
                    <tr><th>ERROR</th>
                    <td>{{$message}}</td></tr>
                @enderror
                <tr><th>電話番号: </th><td><input type="text" name="tel" value="{{old('tel')}}"placeholder="09012345678"></td></tr>
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
