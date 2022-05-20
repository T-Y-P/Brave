<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php $this->archiveTitle(array(
				'category'  =>  _t('分类 %s 下的文章'),
				'search'    =>  _t('包含关键字 %s 的文章'),
				'tag'       =>  _t('标签 %s 下的文章'),
				'author'    =>  _t('%s 发布的文章')
			), '', ' - '); ?><?php $this->options->title(); ?></title>
	<!-- 通过自有函数输出HTML头部信息 -->
	<?php $this->header(); ?>
	<link rel="icon" href="<?php $this->options->WebIcon(); ?>">
	<link rel="stylesheet" href="/usr/themes/Brave/botui/botui.min.css" />
    <link rel="stylesheet" href="/usr/themes/Brave/botui/botui-theme-default.css" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('/base/style.css'); ?>">
	<link rel="stylesheet" href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.1/css/bootstrap.min.css">
	<script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.1/js/bootstrap.min.js"></script>
	<?php $this->options->头部自定义(); ?>
</head> 
<style>
<?php if ($this->options->Css自定义) : $this->options->Css自定义(); ?><?php endif; ?>
</style>
<body>
