<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 博客模版来自http://baijunyao.com/ 感谢 http://baijunyao.com/提供的开源项目：http://baijunyao.com/article/105 github:https://github.com/baijunyao/thinkphp-bjyadmin -->
<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>LQ的个人微博</title>
		<meta name="keywords" content="个人博客系统,个人博客模板,Salesforce,SFDC,php,技术博客">
		<meta name="description" content="LQ的个人微博,Salesforce笔记,Salesforce经验">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<meta name="author" content="lq,lq@lq.com">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="./src/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="./src/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="./src/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="./src/css/bjy.css">
		<link rel="stylesheet" type="text/css" href="./src/css/index.css">
		<link rel="stylesheet" type="text/css" href="./src/css/animate.css">
	</head>

	<body class="  pace-done">
		<div class="pace  pace-inactive">
			<div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
				<div class="pace-progress-inner"></div>
			</div>
			<div class="pace-activity"></div>
		</div>
		<header id="b-public-nav" class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					<a class="navbar-brand" href="http://lq.com/" onclick="recordId(&#39;/&#39;,0)">
						<div class="hidden-xs b-nav-background"></div>
						<!--<ul class="b-logo-code">
							<li class="b-lc-start">&lt;?php</li>
							<li class="b-lc-echo">echo</li>
						</ul>-->
						<p class="b-logo-word">LQ的个人博客</p>
						<!--<p class="b-logo-end">;</p>-->
					</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav b-nav-parent">
						<li class="hidden-xs b-nav-mobile" style="width: 48px; left: 0px;"></li>
						<li class="b-nav-cname b-nav-active ">
							<a href="http://lq.com/" onclick="recordId(&#39;/&#39;,0)">首页</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/category/27" onclick="return recordId(&#39;cid&#39;,27)">Salesforce</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/category/28" onclick="return recordId(&#39;cid&#39;,28)">前端</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/category/29" onclick="return recordId(&#39;cid&#39;,29)">Linux</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/category/31" onclick="return recordId(&#39;cid&#39;,31)">乱七八糟</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/category/30" onclick="return recordId(&#39;cid&#39;,30)">技术之外</a>
						</li>
						<li class="b-nav-cname  ">
							<a href="http://lq.com/chat">随言碎语</a>
						</li>
						<li class="b-nav-cname hidden-sm   ">
							<a href="http://lq.com/git">开源项目</a>
						</li>
					</ul>
					<ul id="b-login-word" class="nav navbar-nav navbar-right">
						<li class="b-nav-cname b-nav-login">
							<div class="hidden-xs b-login-mobile"></div>
							<a href="javascript:;" onclick="login()">登录</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<div class="b-h-70"></div>
		<div id="b-content" class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-8">
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://lq.com/article/106" target="_blank" onclick="return recordId(&#39;index&#39;,0)">thinkphp整合系列之苹果AppStore内购付款的服务器端php验证</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2017-02-25 14:47:11</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://lq.com/category/27" target="_blank">PHP</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://lq.com/tag/31" target="_blank">thinkphp</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://lq.com/article/106" target="_blank">
											<img src="./src/img/1488005139158472.jpeg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/106" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 如果要演一部霸道总裁的剧；我想这主角必须非苹果莫属了；苹果的霸道实在是出了名的；这不；如果是非实物的交易；现在你不给苹果交个过路费；那都是立马被审核处死的节奏；这里要讲的就是AppStore内购的服务器端验证；好了；以上仅为吐槽；正题；作为服务器端；在app中支付的过程那是由IOS程序猿完成的；IOS会把支付凭证发给我们；我等php后端需要做的就是对支付结果的验证；写着是thinkphp整合系列；</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/106" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/105" target="_blank" onclick="return recordId(&#39;index&#39;,0)">开源项目系列之thinkphp-bjyadmin各种功能扩展</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2017-01-28 18:07:31</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/27" target="_blank">PHP</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/31" target="_blank">thinkphp</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/105" target="_blank">
											<img src="./src/img/1485597314590221.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/105" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 新年第一天；是该写篇博客来开心下了；继续开源系列 thinkphp-bjyadmin ；github：https://github.com/baijunyao/thinkphp-bjyadmin这个项目秉承扩展而不改动的原则；围绕着thinkphp进行各种功能的扩展；把实际开发场景中各种解决方案整合入thinkphp；大都以配置项加函数的形式给了示例；并写了大量的文章进行详细的讲解；让童鞋们简单看</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/105" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/104" target="_blank" onclick="return recordId(&#39;index&#39;,0)">开源项目系列之thinkphp-bjyblog博客</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2017-01-08 00:04:56</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/27" target="_blank">PHP</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/31" target="_blank">thinkphp</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/104" target="_blank">
											<img src="./src/img/1483783995367609.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/104" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 经常有童鞋们询问关于我的开源博客thinkphp-bjyblog的问题；我忽然意识到；除了git上面的README.md；我竟然都没正儿八经的认真给它写个使用说明书；时间过的很快随着越来越多的筒子们在使用；我想我必须要写篇文章了；此博客前台和后台的所有页面都是我纯手工码出来的；前台使用的bootstrap布的响应式页面；喜欢的话可以拿去随意使用折腾；不用担心版权问题；项目链接：https://gi</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/104" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/103" target="_blank" onclick="return recordId(&#39;index&#39;,0)">thinkphp整合系列之gulp实现前端自动化</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2017-01-02 23:12:04</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/27" target="_blank">PHP</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/31" target="_blank">thinkphp</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/103" target="_blank">
											<img src="./src/img/1483369912106297.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/103" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 虽然我等叫php程序猿；但是不可避免的是要跟html打交道的；而且php这么容易开发web；难道我们不想自己随手写点什么？laravel这类比较前卫的框架；早就深度集成了很多前端的东西；现在；就让我们手动为thinkphp也插上gulp的翅膀吧；第一步；在自己的thinkphp项目根目录中创建 package.json;{ &nbsp;&nbsp;"name":&nbsp;&amp;
								</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/103" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/102" target="_blank" onclick="return recordId(&#39;index&#39;,0)">前端自动化系列(六)之gulp自动化构建工具</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2017-01-01 23:48:16</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/28" target="_blank">前端</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/45" target="_blank">node.js</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/102" target="_blank">
											<img src="./src/img/1483285372262949.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/102" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 如果认真看了前面5篇系列文章；那肯定会产生一个疑问；难道写个页面需要敲这么多乱七八糟的命令行；这也没怎么提升效率啊；没错；所以；就有了自动化构建工具；自动化构建工具中使用比较广泛的有两种；grunt 和 gulp；它们的作用就是用配置项文件的方式替代各式各样的命令行；来完成测试、检查、合并、压缩、格式化、浏览器自动刷新等等；在某个窗外满是雾霾的周末；我是先研究了下grunt；然后；我承认；面对gr</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/102" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/101" target="_blank" onclick="return recordId(&#39;index&#39;,0)">前端自动化系列(五)之Browsersync自动刷新</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2016-12-11 21:30:17</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/28" target="_blank">前端</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/45" target="_blank">node.js</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/101" target="_blank">
											<img src="./src/img/1481439898582160.png" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/101" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 没错；这个系列我还没写完；这真是一个超大写的尴尬；最近实在太忙了；经常都是1点左右才睡；以至于博客停更了一个月；现在终于抽出了点时间来填坑了；上古时代；我开发的姿势是这样的；写代码—&gt;&nbsp; ctrl/command+s 保存 —&gt; ctrl/command+tab 切换到浏览器—&gt; F5刷新；然后如此循环；如果是调移动端的页面，真机测试；还要离开键盘拿起手机刷新；于是；为</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/101" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/97" target="_blank" onclick="return recordId(&#39;index&#39;,0)">前端自动化系列(四)之jade预编译html</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2016-11-13 13:12:52</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/28" target="_blank">前端</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/26" target="_blank">html</a>
									<a class="b-tag-name" href="http://baijunyao.com/tag/45" target="_blank">node.js</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/97" target="_blank">
											<img src="./src/img/1479013683409143.png" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/97" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 刚开始写这篇文章的时候；其实我是拒绝的；因为在 前端自动化系列(二)之less、scss、sass、stylus css预处理器 中；我已经表明了我的态度；我是不喜欢那种靠缩进来提现等级层次感的语法；但是考虑到css、js都有了现代化的写法；单单把html落下不好；或者有童鞋喜欢呢？于是；我还是决定讲一下 Jade ；老规矩；先安装；cnpm&nbsp;install&nbsp;-g&nbsp;j</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/97" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/96" target="_blank" onclick="return recordId(&#39;index&#39;,0)">前端自动化系列(三)之Babel、ES6、JavaScript转码</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2016-11-13 10:28:17</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/28" target="_blank">前端</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/34" target="_blank">JavaScript</a>
									<a class="b-tag-name" href="http://baijunyao.com/tag/45" target="_blank">node.js</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/96" target="_blank">
											<img src="./src/img/1479004087195122.png" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/96" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 连css这种标记型语言都开始进化了；那么在前端飞速发展的今天；那门用一周时间设计出来的JavaScript；也必须得不断的升级；以适应新的时代；js最新的版本是ECMAScript 2015；或者大家更普遍的称其为ES6；ES6有大量的新特性非常值得我们学习；举一筐栗子；</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/96" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/95" target="_blank" onclick="return recordId(&#39;index&#39;,0)">前端自动化系列(二)之less、scss、sass、stylus css预处理器</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2016-10-29 01:16:15</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/28" target="_blank">前端</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/29" target="_blank">css</a>
									<a class="b-tag-name" href="http://baijunyao.com/tag/45" target="_blank">node.js</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/95" target="_blank">
											<img src="./src/img/1477675764688536.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/95" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 相信搞web开发的童鞋们；多多少少都能写点css；毕竟这玩意压根也称不上编程；都是些固定写法死记硬背用就成了；写css基本上都是体力活；当然；今个不是要来讲css的；而是要带领还在刀耕火种的使用css的童鞋们；进入css预处理器时代；先来段css代码；为了直观这里直接以元素名命名class了；.body&nbsp;{ &nbsp;&nbsp;background:&nbsp;#000; &amp;nb
								</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/95" target="_blank">阅读全文</a>
					</div>
					<div class="row b-one-article">
						<h3 class="col-xs-12 col-md-12 col-lg-12"> <a class="b-oa-title" href="http://baijunyao.com/article/94" target="_blank" onclick="return recordId(&#39;index&#39;,0)">插播一篇windows下git bash命令行使用的文章</a></h3>
						<div class="col-xs-12 col-md-12 col-lg-12 b-date">
							<ul class="row">
								<li class="col-xs-5 col-md-2 col-lg-3"><i class="fa fa-user"></i> 白俊遥</li>
								<li class="col-xs-7 col-md-3 col-lg-3"><i class="fa fa-calendar"></i> 2016-10-27 23:35:20</li>
								<li class="col-xs-5 col-md-2 col-lg-2"><i class="fa fa-list-alt"></i>
									<a href="http://baijunyao.com/category/31" target="_blank">乱七八糟</a>
								</li>
								<li class="col-xs-7 col-md-5 col-lg-4 "><i class="fa fa-tags"></i>
									<a class="b-tag-name" href="http://baijunyao.com/tag/46" target="_blank">git</a>
								</li>
							</ul>
						</div>
						<div class="col-xs-12 col-md-12 col-lg-12">
							<div class="row">
								<div class="col-sm-6 col-md-6 col-lg-4 hidden-xs">
									<figure class="b-oa-pic b-style1">
										<a href="http://baijunyao.com/article/94" target="_blank">
											<img src="./src/img/1477581457998649.jpg" alt="白俊遥博客" title="白俊遥博客"></a>
										<figcaption>
											<a href="http://baijunyao.com/article/94" target="_blank"></a>
										</figcaption>
									</figure>
								</div>
								<div class="col-xs-12 col-sm-6  col-md-6 col-lg-8 b-des-read"> 本来我 前端自动化系列(二)&nbsp; 文章已经写了一半了；什么？这都5天过去了；一篇文章你才写了一半？好吧；最近确实忙；一篇文章都是要凑几天才能写完的；回归正题；上篇文章写道是在命令行下操作的；于是有童鞋就问我windows下命令行的操作的；；；但是windows的cmd实在不敢恭维；得嘞；既然这是这个系列是扫盲文章；又都是要在命令行下操作的；那就把扫盲进行到底；这里来安利 git bash</div>
							</div>
						</div>
						<a class=" b-readall" href="http://baijunyao.com/article/94" target="_blank">阅读全文</a>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-12 col-lg-12 b-page">
							<div class="page">
								<a class="first hidden-xs" href="http://baijunyao.com/index/1">首页</a>
								<a class="prev not-allowed" href="javascript:;">上一页</a> <span class="current">1</span>
								<a class="num hidden-xs" href="http://baijunyao.com/index/2">2</a>
								<a class="num hidden-xs" href="http://baijunyao.com/index/3">3</a>
								<a class="num hidden-xs" href="http://baijunyao.com/index/4">4</a>
								<a class="num hidden-xs" href="http://baijunyao.com/index/5">5</a>
								<a class="next" href="http://baijunyao.com/index/2">下一页</a>
								<a class="end hidden-xs" href="http://baijunyao.com/index/9">末页</a> <span class="rows hidden-xs">共 85 条记录</span></div>
						</div>
					</div>
				</div>
				<div id="b-public-right" class="col-lg-4 hidden-xs hidden-sm hidden-md">
					<div class="b-tags">
						<h4 class="b-title">热门标签</h4>
						<ul class="b-all-tname">
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/20" onclick="return recordId(&#39;tid&#39;,20)">Linux (7)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/21" onclick="return recordId(&#39;tid&#39;,21)">Centos (3)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/22" onclick="return recordId(&#39;tid&#39;,22)">Apache (4)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/23" onclick="return recordId(&#39;tid&#39;,23)">虚拟主机 (4)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/24" onclick="return recordId(&#39;tid&#39;,24)">wamp (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/25" onclick="return recordId(&#39;tid&#39;,25)">励志 (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/26" onclick="return recordId(&#39;tid&#39;,26)">html (15)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/27" onclick="return recordId(&#39;tid&#39;,27)">函数 (14)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/28" onclick="return recordId(&#39;tid&#39;,28)">jQuery (3)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/29" onclick="return recordId(&#39;tid&#39;,29)">css (7)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/30" onclick="return recordId(&#39;tid&#39;,30)">ueditor (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/31" onclick="return recordId(&#39;tid&#39;,31)">thinkphp (31)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/32" onclick="return recordId(&#39;tid&#39;,32)">MySQL (5)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/33" onclick="return recordId(&#39;tid&#39;,33)">php类 (3)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/34" onclick="return recordId(&#39;tid&#39;,34)">JavaScript (9)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/35" onclick="return recordId(&#39;tid&#39;,35)">读书 (1)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/36" onclick="return recordId(&#39;tid&#39;,36)">情感 (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/37" onclick="return recordId(&#39;tid&#39;,37)">js插件 (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/38" onclick="return recordId(&#39;tid&#39;,38)">软件 (5)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/39" onclick="return recordId(&#39;tid&#39;,39)">php基础 (14)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/40" onclick="return recordId(&#39;tid&#39;,40)">echart (1)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/41" onclick="return recordId(&#39;tid&#39;,41)">mac (2)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/42" onclick="return recordId(&#39;tid&#39;,42)">laravel (1)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-4" href="http://baijunyao.com/tag/43" onclick="return recordId(&#39;tid&#39;,43)">观影有感 (1)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-1" href="http://baijunyao.com/tag/44" onclick="return recordId(&#39;tid&#39;,44)">vue.js (4)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-2" href="http://baijunyao.com/tag/45" onclick="return recordId(&#39;tid&#39;,45)">node.js (6)</a>
							</li>
							<li class="b-tname">
								<a class="tstyle-3" href="http://baijunyao.com/tag/46" onclick="return recordId(&#39;tid&#39;,46)">git (1)</a>
							</li>
						</ul>
					</div>
					<div class="b-recommend">
						<h4 class="b-title">置顶推荐</h4>
						<p class="b-recommend-p">
							<a class="b-recommend-a" href="http://baijunyao.com/article/60" target="_blank"><span class="fa fa-th-list b-black"></span> thinkphp的目录结构设计经验总结</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/58" target="_blank"><span class="fa fa-th-list b-black"></span> javascript中的那些让人摸不着头脑的不=</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/55" target="_blank"><span class="fa fa-th-list b-black"></span> 深入解析array_merge函数的用法 php</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/52" target="_blank"><span class="fa fa-th-list b-black"></span> javascript的函数作用域及声明提前</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/42" target="_blank"><span class="fa fa-th-list b-black"></span> php多维数组自定义排序 uasort()</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/29" target="_blank"><span class="fa fa-th-list b-black"></span> apache 开启Gzip网页压缩</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/27" target="_blank"><span class="fa fa-th-list b-black"></span> 查询文章的上下篇Sql语句</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/20" target="_blank"><span class="fa fa-th-list b-black"></span> 以符合人类阅读的方式打印php数组</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/18" target="_blank"><span class="fa fa-th-list b-black"></span> PHP按符号截取字符串的指定部分</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/16" target="_blank"><span class="fa fa-th-list b-black"></span> 一行jQuery代码搞定checkbox 全选和全不选</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/15" target="_blank"><span class="fa fa-th-list b-black"></span> 解决ssh链接服务器超时自动断开的问题</a>
							<a class="b-recommend-a" href="http://baijunyao.com/article/12" target="_blank"><span class="fa fa-th-list b-black"></span> 总结php删除html标签和标签内的内容的方法</a>
						</p>
					</div>
					<div class="b-link">
						<h4 class="b-title">最新评论</h4>
						<div>
							<ul class="b-new-comment b-new-commit-first">
								<img class="b-head-img js-head-img" src="./src/img/100" _src="http://qzapp.qlogo.cn/qzapp/101206152/0354B64877002C8EC7174673666D3647/100" alt="呆呆">
								<li class="b-nickname"> 呆呆<span>3小时前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/77" target="_blank">thinkphp整合系列之微信扫码支付...</a>中评论</li>
								<li class="b-content"> 你是怎么调通的，为嘛我下载示例提示四步安装后啥都没有。...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100" _src="http://qzapp.qlogo.cn/qzapp/101206152/0354B64877002C8EC7174673666D3647/100" alt="呆呆">
								<li class="b-nickname"> 呆呆<span>3小时前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/77" target="_blank">thinkphp整合系列之微信扫码支付...</a>中评论</li>
								<li class="b-content"> 我想问一下，为嘛我从git上下载好你的程序，安装向导，四步安装后，跳转到界面是空...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(1)" _src="http://qzapp.qlogo.cn/qzapp/101206152/387EE8CF07946A9E702808DF445A6BD7/100" alt="　">
								<li class="b-nickname"> 　<span>5小时前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/22" target="_blank">thinkphp自定义模板标签(二)...</a>中评论</li>
								<li class="b-content"> 博主我看你博客那个标签是拼接成php到视图层出来，可是那个$where数组在标签...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(2)" _src="http://qzapp.qlogo.cn/qzapp/101206152/4610B5ECEA467338BBB2E0977067A01E/100" alt="小川☆哲梦">
								<li class="b-nickname"> 小川☆哲梦<span>14小时前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/104" target="_blank">开源项目系列之thinkphp-bjyb...</a>中评论</li>
								<li class="b-content"> 怎么运行plupfile.js 啊，我装了gulp还是运行不了啊，能再详细点吗...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(3)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8EFEFD94BD6A9F353D86E74381E0A803/100" alt="木木">
								<li class="b-nickname"> 木木<span>19小时前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/87" target="_blank">对照着jquery来学vue.js系列之...</a>中评论</li>
								<li class="b-content"> 大神有没有完整的vue 配合thinkphp实现前后端分离的demo啊...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(4)" _src="http://qzapp.qlogo.cn/qzapp/101206152/9CE8771817E5496C91E45E3B72CBFE42/100" alt="Fesa">
								<li class="b-nickname"> Fesa<span>1天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/68" target="_blank">thinkphp整合系列之阿里云oss...</a>中评论</li>
								<li class="b-content"> 我的笔记本测试也是这样。另外一台电脑就不会 同样代码...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(5)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8D1064B9CE8F4CA589ECDE06643E3543/100" alt="张雪琴">
								<li class="b-nickname"> 张雪琴<span>1天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/104" target="_blank">开源项目系列之thinkphp-bjyb...</a>中评论</li>
								<li class="b-content"> 白俊遥老师，这个项目的后台模板能给我一份吗...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(5)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8D1064B9CE8F4CA589ECDE06643E3543/100" alt="张雪琴">
								<li class="b-nickname"> 张雪琴<span>1天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/104" target="_blank">开源项目系列之thinkphp-bjyb...</a>中评论</li>
								<li class="b-content"> 白俊遥老师，这个项目的后台模板能给我一份吗...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(6)" _src="http://qzapp.qlogo.cn/qzapp/101206152/7688AAABBC0199BF2661F4C9633C0FC4/100" alt="a＇ゞ时间">
								<li class="b-nickname"> a＇ゞ时间<span>2天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/106" target="_blank">thinkphp整合系列之苹果AppSt...</a>中评论</li>
								<li class="b-content"> 博客后台文章列表不能选择只查看某分类下的文章，这样文章多了后很乱，请问还更新博客...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(7)" _src="http://qzapp.qlogo.cn/qzapp/101206152/985FD3A826293EAE7FCC0A9EEB695B7C/100" alt="…0o-o0…">
								<li class="b-nickname"> …0o-o0…<span>2天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/75" target="_blank">thinkphp整合系列之支付宝MD5加...</a>中评论</li>
								<li class="b-content"> 你好，我也是...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(7)" _src="http://qzapp.qlogo.cn/qzapp/101206152/985FD3A826293EAE7FCC0A9EEB695B7C/100" alt="…0o-o0…">
								<li class="b-nickname"> …0o-o0…<span>2天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/75" target="_blank">thinkphp整合系列之支付宝MD5加...</a>中评论</li>
								<li class="b-content"> 你好，我也是...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(8)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8360381D407DF36BCBAA3E44AA340C2F/100" alt="い物雨星空つ">
								<li class="b-nickname"> い物雨星空つ<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/103" target="_blank">thinkphp整合系列之gulp实现前...</a>中评论</li>
								<li class="b-content">
									<img src="./src/img/t_0003.gif" title="Yeah" alt="白俊遥博客"></li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(8)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8360381D407DF36BCBAA3E44AA340C2F/100" alt="い物雨星空つ">
								<li class="b-nickname"> い物雨星空つ<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/103" target="_blank">thinkphp整合系列之gulp实现前...</a>中评论</li>
								<li class="b-content">
									<img src="./src/img/t_0003.gif" title="Yeah" alt="白俊遥博客"></li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(8)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8360381D407DF36BCBAA3E44AA340C2F/100" alt="い物雨星空つ">
								<li class="b-nickname"> い物雨星空つ<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/103" target="_blank">thinkphp整合系列之gulp实现前...</a>中评论</li>
								<li class="b-content">
									<img src="./src/img/t_0003.gif" title="Yeah" alt="白俊遥博客"></li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(8)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8360381D407DF36BCBAA3E44AA340C2F/100" alt="い物雨星空つ">
								<li class="b-nickname"> い物雨星空つ<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/103" target="_blank">thinkphp整合系列之gulp实现前...</a>中评论</li>
								<li class="b-content">
									<img src="./src/img/t_0003.gif" title="Yeah" alt="白俊遥博客"></li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(8)" _src="http://qzapp.qlogo.cn/qzapp/101206152/8360381D407DF36BCBAA3E44AA340C2F/100" alt="い物雨星空つ">
								<li class="b-nickname"> い物雨星空つ<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/103" target="_blank">thinkphp整合系列之gulp实现前...</a>中评论</li>
								<li class="b-content">
									<img src="./src/img/t_0003.gif" title="Yeah" alt="白俊遥博客"></li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(9)" _src="http://qzapp.qlogo.cn/qzapp/101206152/58B4BFBFDECF1E073E10982D411AC6C7/100" alt="G-C-X">
								<li class="b-nickname"> G-C-X<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/14" target="_blank">消除a标签点击后产生的虚线框...</a>中评论</li>
								<li class="b-content"> 1111111111111111111111111111111111111111...</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(9)" _src="http://qzapp.qlogo.cn/qzapp/101206152/58B4BFBFDECF1E073E10982D411AC6C7/100" alt="G-C-X">
								<li class="b-nickname"> G-C-X<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/14" target="_blank">消除a标签点击后产生的虚线框...</a>中评论</li>
								<li class="b-content"> 1</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(9)" _src="http://qzapp.qlogo.cn/qzapp/101206152/58B4BFBFDECF1E073E10982D411AC6C7/100" alt="G-C-X">
								<li class="b-nickname"> G-C-X<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/14" target="_blank">消除a标签点击后产生的虚线框...</a>中评论</li>
								<li class="b-content"> 1*-5</li>
							</ul>
							<ul class="b-new-comment ">
								<img class="b-head-img js-head-img" src="./src/img/100(9)" _src="http://qzapp.qlogo.cn/qzapp/101206152/58B4BFBFDECF1E073E10982D411AC6C7/100" alt="G-C-X">
								<li class="b-nickname"> G-C-X<span>3天前</span></li>
								<li class="b-nc-article"> 在
									<a href="http://baijunyao.com/article/14" target="_blank">消除a标签点击后产生的虚线框...</a>中评论</li>
								<li class="b-content"> 1-4</li>
							</ul>
						</div>
					</div>
					<div class="b-link">
						<h4 class="b-title">友情链接</h4>
						<p>
							<a class="b-link-a" href="http://laravelacademy.org/" target="_blank"><span class="fa fa-link b-black"></span> Laravel学院</a>
							<a class="b-link-a" href="http://www.awaimai.com/" target="_blank"><span class="fa fa-link b-black"></span> 歪麦博客</a>
							<a class="b-link-a" href="http://wujunze.com/" target="_blank"><span class="fa fa-link b-black"></span> 吴钧泽博客</a>
							<a class="b-link-a" href="http://loveteemo.com/" target="_blank"><span class="fa fa-link b-black"></span> 青春博客</a>
							<a class="b-link-a" href="http://zqiqi.cn/" target="_blank"><span class="fa fa-link b-black"></span> 七七</a>
							<a class="b-link-a" href="http://www.payhearts.com/" target="_blank"><span class="fa fa-link b-black"></span> 麦剑雄的个人博客</a>
							<a class="b-link-a" href="http://liqingkuo.com/" target="_blank"><span class="fa fa-link b-black"></span> 李庆阔博客</a>
							<a class="b-link-a" href="http://www.koukousky.com/" target="_blank"><span class="fa fa-link b-black"></span> koukou的博客</a>
							<a class="b-link-a" href="http://dongguagua.com/" target="_blank"><span class="fa fa-link b-black"></span> 咚呱呱</a>
							<a class="b-link-a" href="http://www.phpernote.com/" target="_blank"><span class="fa fa-link b-black"></span> php程序员的笔记</a>
							<a class="b-link-a" href="http://www.numberer.net/" target="_blank"><span class="fa fa-link b-black"></span> 第二导航网</a>
							<a class="b-link-a" href="http://www.mafutian.net/" target="_blank"><span class="fa fa-link b-black"></span> 马富天博客</a>
							<a class="b-link-a" href="http://baagee.top/" target="_blank"><span class="fa fa-link b-black"></span> BaAGee博客</a>
							<a class="b-link-a" href="https://www.phpsong.com/" target="_blank"><span class="fa fa-link b-black"></span> 小松博客</a>
							<a class="b-link-a" href="http://www.blogxuan.com/" target="_blank"><span class="fa fa-link b-black"></span> 玄玄博客</a>
						</p>
					</div>
					<div class="b-search">
						<form class="form-inline" role="form" action="http://baijunyao.com/Home/Index/search" method="get"> <input class="b-search-text" type="text" name="search_word"> <input class="b-search-submit" type="submit" value="全站搜索"></form>
					</div>
				</div>
			</div>
			<div class="row">
				<footer id="b-foot" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul>
						<li class="text-center"> 本站使用自主开发的
							<a rel="nofollow" href="http://git.oschina.net/shuaibai123/thinkbjy" target="_blank">bjyblog v1.1</a>开源博客程序搭建 © 2014-2016 baijunyao.com 版权所有 ICP证：豫ICP备14009546号-3</li>
						<li class="text-center"> 联系邮箱：baijunyao@baijunyao.com</li>
					</ul>
					<div class="b-h-20"></div>
					<a class="go-top fa fa-angle-up animated jello" href="javascript:;" onclick="goTop()"></a>
				</footer>
			</div>
		</div>
		<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content row">
					<div class="col-xs-12 col-md-12 col-lg-12">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4></div>
					</div>
					<div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
						<ul class="row">
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login/type/qq">
									<img src="./src/img/qq-login.png" alt="QQ登录" title="QQ登录"></a>
							</li>
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login/type/sina">
									<img src="./src/img/sina-login.png" alt="微博登录" title="微博登录"></a>
							</li>
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login/type/douban">
									<img src="./src/img/douban-login.png" alt="豆瓣登录" title="豆瓣登录"></a>
							</li>
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login/type/renren">
									<img src="./src/img/renren-login.png" alt="人人登录" title="人人登录"></a>
							</li>
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login/type/kaixin">
									<img src="./src/img/kaixin-login.png" alt="开心网登录" title="开心网登录"></a>
							</li>
							<li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
								<a href="http://baijunyao.com/Home/User/oauth_login">
									<img src="http://baijunyao.com/" alt="待定" title="待定"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<script src="./src/js/hm.js"></script>
		<script src="./src/js/push.js"></script>
		<script src="./src/js/jquery-2.0.0.min.js"></script>
		<script>
			logoutUrl = "/Home/User/logout";
		</script>
		<script src="./src/js/bootstrap.min.js"></script>
		<!--[if lt IE 9]>
<script src="/Public/static/js/html5shiv.min.js"></script>
<script src="/Public/static/js/respond.min.js"></script>
<![endif]-->
		<script src="./src/js/pace.min.js"></script>
		<script src="./src/js/index.js"></script>
		<!-- 百度页面自动提交开始 -->
		<script>
			(function() {
				var bp = document.createElement('script');
				var curProtocol = window.location.protocol.split(':')[0];
				if(curProtocol === 'https') {
					bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
				} else {
					bp.src = 'http://push.zhanzhang.baidu.com/push.js';
				}
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(bp, s);
			})();
		</script>
		<!-- 百度页面自动提交结束 -->

		<!-- 百度统计开始 -->
		<script>
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "//hm.baidu.com/hm.js?c3338ec467285d953aba86d9bd01cd93";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s);
			})();
		</script>
		<!-- 百度统计结束 -->
	</body>

</html>