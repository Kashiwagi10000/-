<html>
<link rel="stylesheet" href="/css/style.css">

<div class="example"><title>そこらへんにあるパンや</title>
    <h1>そこらへんにあるパンや</h1>
    <h2>～３度の飯よりおやつ～</h2>
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

<div class="order">
    <h2>情報入力画面</h2>
<form action="/order" method="POST">
    <?= csrf_field()?>
     名 前<br><input type="text" name="name" value="<?=$inputs["name"]??''?>" required><br>
     住 所<br><input type="text" name="address" value="<?=$inputs["address"]??''?>"><br>
    電話番号<br><input type="text" value="" name="tel"><br>
    Email<br><input type="text" value="" name="email"><br>
    <input type="submit" value="注文">
</form>
</div>
</html>