<link rel="stylesheet" href="/css/style.css">

<html>
<link rel="stylesheet" href="/css/style.css">

<div class="example"><title>そこらへんにあるパンや</title>
    <h1>そこらへんにあるパンや</h1>
    <h2>ギャルのスマホ割れがち</h2>
</div>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<div class="">
    <nav id="text__icon">
        <ul id="nav">

            <li><a href="/">商品一覧</a></li>
            <li><a href="/cart/list">カート</a></li>
        </ul>
    </nav>
</div>
</html>

<div class="ooo">
<?=$item->name?>
<img src="<?=$item->img?>"/>
<br>
商品名：<?=$item->name?>
<br>
    価格：<?=$item->price?>円
<br>
詳細：<?=$item->description?><br>

<form action="/cart/add" method="post">
    <?= csrf_field()?>
    <input type="hidden" name="item_id" value="<?=$item->id?>">
    <input type="submit" class="button2"value="カートに追加">
</form>
<input type="button" class="button2"onclick="window.history.back();"value="前のページに戻る")>
<input type="button" class="button2" onclick="session()->forget('CART_ITEMS');"value="前のページに戻る")>
</div>