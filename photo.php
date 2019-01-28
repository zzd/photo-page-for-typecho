<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;?>
<?php
/**
 * 照片集
 *
 * @package custom
 */
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php $this->title() ?> - <?php $this->options->title() ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/css/main.css" />
		<link rel="shortcut icon" href="<?php $this->options->siteUrl(); ?>/favicon.ico">
		<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?php $this->permalink() ?>"><strong><?php $this->title() ?></strong> Powered by Zdsr</a></h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">关于</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
					</div>

				<!-- Footer -->
					<footer id="footer" class="panel">
						<div class="inner split">
							<div>
								<section>
									<h2>关于Multiverse</h2>
									<p>本系统共有<span id="count_CN"></span>张图片，所有图片均为手机拍摄，托管于高速新浪图床。系统Multiverse由HTML5 UP设计。</p>
									<h2>About Multiverse</h2>
									<p>The system has a total of <span id="count_EN"></span> pictures, all pictures are taken by mobile phone, hosted in the high-speed Sinaimg. The system Multiverse is designed by HTML5 UP.</p>
								</section>
								<section>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
									</ul>
								</section>
								<p class="copyright">
									<!-- 虽说本页面制作容易，但也需要一点点时间编辑，请保留版权信息。 -->
									&copy; 2019 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> Powered by <a href="https://github.com/616620131/Multiverse-page">Zdsr</a> Based HTML5 UP</a>.
								</p>
							</div>
							<div>
								<section>
									<h2>关于<?php $this->title() ?></h2>
									<?php if ($this->fields->about): ?>
										<p><?php echo $this->fields->about; ?></p>
									<?php else: ?>
										<p>在自定义字段内添加about字段，即可编辑此内容，并且现有内容将自动替换。</p>
									<?php endif ?>
									
								</section>
							</div>
						</div>
					</footer>

			</div>
			<!--动态读取数组 by ZhangDi-->
			<script type="text/javascript">
				var datas = [
				<?php 
						$html = $this->row['text'];
						echo $html;
				?>];
				function creatArticle(datas) {
					var parent = document.getElementById("main");
					for (var i = 0; i < datas.length; i++) {
						var article = document.createElement("article");
						article.className = "thumb";
						parent.appendChild(article);
						var a = document.createElement("a");
						a.className = "image";
						a.href = datas[i].大图;
						article.appendChild(a);
						var img = document.createElement("img");
						img.src = datas[i].预览图;
						a.appendChild(img);
						var h2 = document.createElement("h2");
						h2.innerHTML = datas[i].标题;
						article.appendChild(h2);
						var p = document.createElement("p");
						p.innerHTML = datas[i].简介;
						article.appendChild(p);
					}
				}
				creatArticle(datas);
				document.getElementById("count_EN").innerHTML = document.getElementById("count_CN").innerHTML = datas.length;
			</script>
		<!-- Scripts -->
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/jquery.min.js"></script>
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/jquery.poptrox.min.js"></script>
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/browser.min.js"></script>
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/breakpoints.min.js"></script>
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/util.js"></script>
			<script src="<?php $this->options->themeUrl(); ?>/HTML5UP/assets/js/main.js"></script>

	</body>
</html>