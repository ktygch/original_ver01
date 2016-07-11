<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<?php if(is_front_page()): ?>
		<title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
	<?php else: ?>
		<title><?php wp_title('');?> | <?php bloginfo('name'); ?></title>
	<?php endif; ?>
	
	<link href="<?php bloginfo('template_directory'); ?>/css/bs/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/layout.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/design.css" rel="stylesheet">
	
	<?php /*ie8以前へのhtml5対応用スクリプト*/ ?>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="loader">
		<span class="logoarea">OFFICE DRUNK</span>
	</div>
	
	<div id="hiddenWin">
		隠れてるメニュー
		<a href="http://test.jp" target="_blank">ヤフー</a>
	</div>
	
	<div id="wrapper">
		<div id="contents" class="toppage">
			<div id="header">
				ヘッダー
			</div>
			<div class="fixedmenu">
				<h1><a href="<?php bloginfo('url'); ?>">Office Drunk</a></h1>
				<a href="#" class="showbtn1">開く</a>
			</div>
