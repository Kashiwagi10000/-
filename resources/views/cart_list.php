<html>
<link rel="stylesheet" href="/css/style.css">
<html>
<link rel="stylesheet" href="/css/style.css">

<div class="example"><title>そこらへんにあるパンや</title>
    <h1>そこらへんにあるパンや</h1>
    <h2>～まいどわり！～</h2>
    <div class="serch">
    <form action="/" method="GET">
        <input type="text" name="searchkey" value="">
        <input type="submit" value="検索">
    </form>
    </div>
</div>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<div style="text-align:center"class="">
    <nav id="text__icon">
        <ul id="nav">
            <li><a href="/">商品一覧</a></li>
            <li><a href="/cart/list">カート</a></li>
        </ul>
    </nav>
</div>
</html>
<div class="text-center"><h1>カート</h1></div>
<?php foreach($cartItems as $item): ?>
    <div style="text-align:center" class="yoko">
        <div class="container">
    <?=$item->name?>
    <br>
    価格：<?=$item->price?>円
<br>
<br>
        </div>
    </div>
<?php endforeach; ?>
<div style="text-align:center">
<input type="button" class="button2" onclick="window.history.back();"value="前のページに戻る")>
<form action="/cart/clear" method="post">
    <?= csrf_field()?>
    <input type="hidden" name="item_id" value="<?=$item->id?>">
    <br>
    <div class="text-center">
        <input type="submit" class="button2" value="カートを全削除" class="btn btn-info px-5" >
    </div>
    <a href="/order"><input type="button"class="button2"  value="購入画面に進む")></a>
</form>
</div>

