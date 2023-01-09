@extends('layouts.contact')

@section('form')
 <p>氏名<span></span>{{ $data->name }}</p>
 <p>性別<span></span>{{ $data->gender }}</p>
 <p>年齢<span></span>{{ $data->age }}</p>
 <p>メールアドレス<span></span>{{ $data->mail }}</p>
 <p>メール送信可否<span></span>
    @if($data->check="on")
        送信許可
    @endif
 </p>
 <p>ご意見<span></span>{{ $data->option }}</p>
@endsection