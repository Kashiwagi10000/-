<!DOCTYPE HTML>
<!--
	Phase Shift by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
<link rel="stylesheet" href="/css/style.css">
    <style>
        .yokoyama{
            float:left;
        }
    </style>
</head>

<div class="example"><title>そこらへんにあるパンや</title>
<h1>そこらへんにあるパンや</h1>
<h2>全ての商品カロリー0！</h2>
    <form action="/" method="GET">
        <input type="text" name="searchkey" value="<?=$searchKey?>">
        <input type="submit" value="検索">
    </form>
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

<?php foreach($items as $item): ?>

    <div style="text-align:center" class="Item">
        <div class="yokoyama">
        <h3><?=$item->name?></h3><br>
        <img src="<?=$item->img?>"/>
        <br>
        <a href="item/<?=$item->id?>"class="button">詳しく見る</a>

    <form action="/cart/add" method="post">
        <?= csrf_field()?>
        <input type="hidden" name="item_id" value="<?=$item->id?>">
        <input type="submit" class="button2"value="カートに追加">
    </form>
            </div>
    </div>

<?php endforeach; ?>








