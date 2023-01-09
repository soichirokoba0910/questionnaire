@extends('layouts.contact')


@section('form')
<h1>システムへのご意見をお聞かせください</h1>
<form action="/contact/edit" method="post">
    @csrf
    <p>名前<span>※</span><input type="text" name="name" placeholder="入力してください。"></p>
    <p>性別<span>※</span><input type="radio" name="gender" value="男" checked="checked">男
                          <input type="radio" name="gender" value="女">女</p>
    <p>年齢<span>※</span><select name="age">
                               <option aria-placeholder="入力してください"></option>
                           @foreach ($items as $item)
                               <option value="{{ $item->age }}">{{ $item->age }}</option>
                           @endforeach
                        </select></p>
    <p>メールアドレス<span>※</span><input type="text" name="mail" placeholder="入力してください"></p>
    <p>メール送信許可<span></span>登録したメールアドレスにメールアドレスを送っても大丈夫ですか？<br>
                                <input type="checkbox" checked="checked" name="check">送信を許可します</p>
    <p>ご意見<span></span><textarea name="opition"></textarea></p>
    <input type="submit" value="送信">
</form>
@endsection