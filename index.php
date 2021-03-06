<?php
    require_once 'config.php';
    
    // Create connection
    $mysql = new mysqli($servername, $username, $password, $database);
    if ($mysql->connect_error) {
		$die("Connection failed: " . $mysql->connect_error);
	}

    $query = mysqli_query($mysql, "SELECT * FROM guestbook ORDER BY id DESC");
    $gusetbooks = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">

<head>
	<meta charset="UTF-8">

	<style type="text/css">
		.wdp-comment-text img {

			max-width: 100% !important;

		}
	</style>
	<title>Gangsar & Indah</title>
	<meta name="description" content="Invitation Gangsar & Indah">
	<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
	<link rel="canonical" href="https://gangsarindah.com/">
	<meta property="og:site_name" content="Gangsar & Indah">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Invitation Gangsar & Indah">
	<meta property="og:description" content="Invitation Gangsar & Indah">
	<meta property="og:url" content="https://gangsarindah.com/">
	<meta property="article:section" content="Uncategorized">
	<meta property="og:updated_time" content="2022-06-20T09:22:31+07:00">
	<meta property="og:image" content="media/cover-image.jpg">
	<meta property="og:image:width" content="1024">
	<meta property="og:image:height" content="683">
	<meta property="og:image:alt" content="Gangsar & Indah">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="article:published_time" content="2022-03-22T11:07:40+07:00">
	<meta property="article:modified_time" content="2022-06-20T09:22:31+07:00">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Invitation Gangsar & Indah">
	<meta name="twitter:description" content="Invitation Gangsar & Indah">
	<meta name="twitter:image"
		content="media/cover-image.jpg">
	<meta name="twitter:label1" content="Written by">
	<meta name="twitter:data1" content="Invitation Gangsar & Indah">
	<meta name="twitter:label2" content="Time to read">
	<meta name="twitter:data2" content="2 minutes">
	<script type="application/ld+json" class="rank-math-schema">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": ["Person", "Organization"],
				"@id": "https://websiteinvitation.com/#person",
				"name": "websiteinvitation",
				"logo": {
					"@type": "ImageObject",
					"@id": "https://websiteinvitation.com/#logo",
					"url": "https://websiteinvitation.com/wp-content/uploads/2021/03/Logo-Fix.png",
					"caption": "websiteinvitation",
					"inLanguage": "en-US",
					"width": "300",
					"height": "300"
				},
				"image": {
					"@type": "ImageObject",
					"@id": "https://websiteinvitation.com/#logo",
					"url": "https://websiteinvitation.com/wp-content/uploads/2021/03/Logo-Fix.png",
					"caption": "websiteinvitation",
					"inLanguage": "en-US",
					"width": "300",
					"height": "300"
				}
			}, {
				"@type": "WebSite",
				"@id": "https://websiteinvitation.com/#website",
				"url": "https://websiteinvitation.com",
				"name": "websiteinvitation",
				"publisher": {
					"@id": "https://websiteinvitation.com/#person"
				},
				"inLanguage": "en-US"
			}, {
				"@type": "ImageObject",
				"@id": "https://websiteinvitation.com/wp-content/uploads/2021/12/Shelly-Ichsan-06.jpg",
				"url": "https://websiteinvitation.com/wp-content/uploads/2021/12/Shelly-Ichsan-06.jpg",
				"width": "2100",
				"height": "1400",
				"inLanguage": "en-US"
			}, {
				"@type": "BreadcrumbList",
				"@id": "https://websiteinvitation.com/tema-scroll-07/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": "1",
					"item": {
						"@id": "https://websiteinvitation.com",
						"name": "Home"
					}
				}, {
					"@type": "ListItem",
					"position": "2",
					"item": {
						"@id": "https://websiteinvitation.com/category/uncategorized/",
						"name": "Uncategorized"
					}
				}, {
					"@type": "ListItem",
					"position": "3",
					"item": {
						"@id": "https://websiteinvitation.com/tema-scroll-07/",
						"name": "Tema Scroll 07"
					}
				}]
			}, {
				"@type": "Person",
				"@id": "https://websiteinvitation.com/author/websiteinvitation/",
				"name": "websiteinvitation",
				"url": "https://websiteinvitation.com/author/websiteinvitation/",
				"image": {
					"@type": "ImageObject",
					"@id": "https://secure.gravatar.com/avatar/c47a20cf249e5fdee3876ca9de82008f?s=96&amp;r=g",
					"url": "https://secure.gravatar.com/avatar/c47a20cf249e5fdee3876ca9de82008f?s=96&amp;r=g",
					"caption": "websiteinvitation",
					"inLanguage": "en-US"
				},
				"sameAs": ["https://websiteinvitation.com"]
			}, {
				"@type": "WebPage",
				"@id": "https://websiteinvitation.com/tema-scroll-07/#webpage",
				"url": "https://websiteinvitation.com/tema-scroll-07/",
				"name": "Tema Scroll 07 -",
				"datePublished": "2022-03-22T11:07:40+07:00",
				"dateModified": "2022-06-20T09:22:31+07:00",
				"author": {
					"@id": "https://websiteinvitation.com/author/websiteinvitation/"
				},
				"isPartOf": {
					"@id": "https://websiteinvitation.com/#website"
				},
				"primaryImageOfPage": {
					"@id": "https://websiteinvitation.com/wp-content/uploads/2021/12/Shelly-Ichsan-06.jpg"
				},
				"inLanguage": "en-US",
				"breadcrumb": {
					"@id": "https://websiteinvitation.com/tema-scroll-07/#breadcrumb"
				}
			}, {
				"@type": "BlogPosting",
				"headline": "Tema Scroll 07 -",
				"datePublished": "2022-03-22T11:07:40+07:00",
				"dateModified": "2022-06-20T09:22:31+07:00",
				"author": {
					"@id": "https://websiteinvitation.com/author/websiteinvitation/"
				},
				"publisher": {
					"@id": "https://websiteinvitation.com/#person"
				},
				"description": "Undangan Website Digital",
				"name": "Tema Scroll 07 -",
				"@id": "https://websiteinvitation.com/tema-scroll-07/#richSnippet",
				"isPartOf": {
					"@id": "https://websiteinvitation.com/tema-scroll-07/#webpage"
				},
				"image": {
					"@id": "https://websiteinvitation.com/wp-content/uploads/2021/12/Shelly-Ichsan-06.jpg"
				},
				"inLanguage": "en-US",
				"mainEntityOfPage": {
					"@id": "https://websiteinvitation.com/tema-scroll-07/#webpage"
				}
			}]
		}
	</script>
	<!-- /Rank Math WordPress SEO plugin -->

	<link rel="dns-prefetch" href="//s.w.org">
	<link rel="alternate" type="application/rss+xml" title=" &raquo; Feed" href="https://websiteinvitation.com/feed/">
	<link rel="alternate" type="application/rss+xml" title=" &raquo; Comments Feed"
		href="https://websiteinvitation.com/comments/feed/">
	<link rel="alternate" type="application/rss+xml" title=" &raquo; Tema Scroll 07 Comments Feed"
		href="https://websiteinvitation.com/tema-scroll-07/feed/">
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/websiteinvitation.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.0"
			}
		};
		/*! This file is auto-generated */
		! function (e, a, t) {
			var n, r, o, i = a.createElement("canvas"),
				p = i.getContext && i.getContext("2d");

			function s(e, t) {
				var a = String.fromCharCode,
					e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
				return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
			}

			function c(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (o = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
				if (!p || !p.fillText) return !1;
				switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
					case "flag":
						return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356,
							56826, 55356, 56819
						], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128,
							56421, 56128, 56430, 56128, 56423, 56128, 56447
						], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128,
							56430, 8203, 56128, 56423, 8203, 56128, 56447
						]);
					case "emoji":
						return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
				}
				return !1
			}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
				.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
				.readyCallback = function () {
					t.DOMReady = !0
				}, t.supports.everything || (n = function () {
						t.readyCallback()
					}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
					1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
						"complete" === a.readyState && t.readyCallback()
					})), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e
						.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="wp-block-library-css" href="css/style.min_1.css" type="text/css" media="all">
	<style id="global-styles-inline-css" type="text/css">
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('index.html#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('index.html#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('index.html#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('index.html#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('index.html#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('index.html#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('index.html#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('index.html#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel="stylesheet" id="pafe-extension-style-css" href="css/extension.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="rs-plugin-settings-css" href="css/rs6.css" type="text/css" media="all">
	<style id="rs-plugin-settings-inline-css" type="text/css">
		#rs-demo-id {}
	</style>
	<link rel="stylesheet" id="wdp_style-css" href="css/wdp_style.css" type="text/css" media="screen">
	<style id="wdp_style-inline-css" type="text/css">
		.wdp-wrapper {

			font-size: 14px
		}



		.wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-avatar img {

			max-width: 28px;

			max-height: 28px;

		}

		.wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content {

			margin-left: 38px;

		}

		.wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul .wdp-comment-avatar img {

			max-width: 24px;

			max-height: 24px;

		}

		.wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul ul .wdp-comment-avatar img {

			max-width: 21px;

			max-height: 21px;

		}
	</style>
	<link rel="stylesheet" id="wdp-centered-css-css" href="css/wdp-centered-timeline.min.css" type="text/css"
		media="all">
	<link rel="stylesheet" id="wdp-horizontal-css-css" href="css/wdp-horizontal-styles.min.css" type="text/css"
		media="all">
	<link rel="stylesheet" id="wdp-fontello-css-css" href="css/wdp-fontello.css" type="text/css" media="all">
	<link rel="stylesheet" id="exad-main-style-css" href="css/exad-styles.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="hello-elementor-css" href="css/style.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="hello-elementor-theme-style-css" href="css/theme.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-css" href="css/elementor-icons.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-frontend-css" href="css/frontend.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-42183-css" href="css/post-42183.css" type="text/css" media="all">
	<link rel="stylesheet" id="powerpack-frontend-css" href="css/frontend.min_1.css" type="text/css" media="all">
	<link rel="stylesheet" id="weddingpress-wdp-css" href="css/wdp.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-pro-css" href="css/frontend.min_2.css" type="text/css" media="all">
	<link rel="stylesheet" id="ooohboi-steroids-styles-css" href="css/main.css" type="text/css" media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="font-awesome-4-shim-css" href="css/v4-shims.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="premium-pro-css" href="css/premium-addons.min_1.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-90247-css" href="css/post-90247.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-post-2184-css" href="css/post-2184.css" type="text/css" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="css/css.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-shared-0-css" href="css/fontawesome.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="css/solid.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-regular-css" href="css/regular.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="css/brands.min.css" type="text/css" media="all">
	<script type="text/javascript" id="jquery-core-js-extra">
		/* <![CDATA[ */
		var pp = {
			"ajax_url": "https:\/\/websiteinvitation.com\/wp-admin\/admin-ajax.php"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/jquery.min.js" id="jquery-core-js"></script>
	<script type="text/javascript" src="js/jquery-migrate.min.js" id="jquery-migrate-js"></script>
	<script type="text/javascript" src="js/extension.min.js" id="pafe-extension-js"></script>
	<script type="text/javascript" src="js/rbtools.min.js" id="tp-tools-js"></script>
	<script type="text/javascript" src="js/rs6.min.js" id="revmin-js"></script>
	<script type="text/javascript" src="js/v4-shims.min.js" id="font-awesome-4-shim-js"></script>
	<link rel="https://api.w.org/" href="https://websiteinvitation.com/wp-json/">
	<link rel="alternate" type="application/json" href="https://websiteinvitation.com/wp-json/wp/v2/posts/90247">
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://websiteinvitation.com/xmlrpc.php?rsd">
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://websiteinvitation.com/wp-includes/wlwmanifest.xml">
	<meta name="generator" content="WordPress 6.0">
	<link rel="shortlink" href="https://websiteinvitation.com/?p=90247">
	<link rel="alternate" type="application/json+oembed"
		href="https://websiteinvitation.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebsiteinvitation.com%2Ftema-scroll-07%2F">
	<link rel="alternate" type="text/xml+oembed"
		href="https://websiteinvitation.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwebsiteinvitation.com%2Ftema-scroll-07%2F&#038;format=xml">
	<!-- HFCM by 99 Robots - Snippet # 1: Header All Pages -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="js_1"></script>
	<!-- /end HFCM by 99 Robots -->
	<meta name="theme-color' content=" #ffede0">
	<meta name="generator"
		content="Powered by Slider Revolution 6.3.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface.">
	<script type="text/javascript">
		function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {				 
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl)
						if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl)
						if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl)
						if (sl > nl[i] && nl[i] > 0) {
							sl = nl[i];
							ix = i;
						}
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement(
					"style"));
				document.getElementById(e.c).height = newh + "px";
				window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};
	</script>
	<style>
		.pswp.pafe-lightbox-modal {
			display: none;
		}
	</style>
	<style type="text/css" id="wp-custom-css">
		.embedan iframe {
			width: 700px !important;
			height: 100vh !important;
			padding: 10px 20px 120px 20px !important border-radius: 15px;
			-webkit-border-radius: 15px;
			-o-border-radius: 15px;
		}

		@media only screen and (max-width: 600px) {
			.embedan iframe {
				width: 100vw !important;
				height: 100vh !important;
				padding: 10px 20px 85px 20px !important;

				border-radius: 15px;
				-webkit-border-radius: 15px;
				-o-border-radius: 15px;

			}
		}

		.galeri iframe {
			width: 450px !important;
			height: 450px !important;
			padding: 10px 20px 10px 20px !important border-radius: 15px;
			-webkit-border-radius: 15px;
			-o-border-radius: 15px;
		}

		body {
			background: none transparent;
		}
	</style>
	<!-- Fonts Plugin CSS - https://fontsplugin.com/ -->
	<style>
	</style>
	<!-- Fonts Plugin CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
</head>

<body
	class="post-template post-template-elementor_canvas single single-post postid-90247 single-format-standard wp-custom-logo elementor-default elementor-template-canvas elementor-kit-42183 elementor-page elementor-page-90247">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 0.49803921568627" />
					<fefuncg type="table" tableValues="0 0.49803921568627" />
					<fefuncb type="table" tableValues="0 0.49803921568627" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 1" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0 1" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.54901960784314 0.98823529411765" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0.71764705882353 0.25490196078431" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 1" />
					<fefuncg type="table" tableValues="0 0.27843137254902" />
					<fefuncb type="table" tableValues="0.5921568627451 0.27843137254902" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0 0" />
					<fefuncg type="table" tableValues="0 0.64705882352941" />
					<fefuncb type="table" tableValues="0 1" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.78039215686275 1" />
					<fefuncg type="table" tableValues="0 0.94901960784314" />
					<fefuncb type="table" tableValues="0.35294117647059 0.47058823529412" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.65098039215686 0.40392156862745" />
					<fefuncg type="table" tableValues="0 1" />
					<fefuncb type="table" tableValues="0.44705882352941 0.4" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
		style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<fecolormatrix color-interpolation-filters="sRGB" type="matrix"
					values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<fecomponenttransfer color-interpolation-filters="sRGB">
					<fefuncr type="table" tableValues="0.098039215686275 1" />
					<fefuncg type="table" tableValues="0 0.66274509803922" />
					<fefuncb type="table" tableValues="0.84705882352941 0.41960784313725" />
					<fefunca type="table" tableValues="1 1" />
				</fecomponenttransfer>
				<fecomposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div data-elementor-type="wp-post" data-elementor-id="90247" class="elementor elementor-90247"
		data-elementor-settings="[]">
		<div class="elementor-section-wrap">
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f8512ce elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
				data-id="f8512ce" data-element_type="section"
				data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1dd07d1 wdp-sticky-section-no"
						data-id="1dd07d1" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-557f7c9 wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-wellcome"
								data-id="557f7c9" data-element_type="widget"
								data-settings="{&quot;_animation_mobile&quot;:&quot;none&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-wellcome.default">
								<div class="elementor-widget-container">

									<div class="modalx"
										data-sampul="media/7-min.jpg" style="background-position: top;">

										<div class="overlayy"></div>
										<div class="content-modalx">
											<div class="info_modalx">

												<div class="elementor-image img"></div>



												<div class="wdp-mempelai">Gangsar &amp; Indah
												</div>

												<div class="wdp-dear">Dear :</div>
												<div class="wdp-name"><?php echo !empty($_GET['to'])?str_replace('+', ' ', $_GET['to']):''; ?></div>
												<div class="wdp-text">You&#039;re Invited.</div>
												<div class="wdp-button-wrapper">
													<button class="elementor-button">
														<span>
															<i aria-hidden="true" class="fas fa-envelope-open"></i>
														</span>
														Open Invitation </button>
												</div>
											</div>
										</div>
									</div>


									<script>
										const sampul = jQuery('.modalx').data('sampul');
										jQuery('.modalx').css('background-image', 'url(' + sampul + ')');
										jQuery('body').css('overflow', 'hidden');
										jQuery('.wdp-button-wrapper button').on('click', function () {
											jQuery('.modalx').addClass('removeModals');
											jQuery('body').css('overflow', 'auto');
											document.getElementById("song").play();
										});
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-2515898 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="2515898" data-element_type="section" id="home"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:60813,&quot;url&quot;:&quot;media\/17-min.jpg&quot;},{&quot;id&quot;:60821,&quot;url&quot;:&quot;media\/15-min.jpg&quot;},{&quot;id&quot;:60821,&quot;url&quot;:&quot;media\/16-min.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5ebf42f wdp-sticky-section-no"
						data-id="5ebf42f" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-e1129a4 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="e1129a4" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">WE ARE GETTING MARRIED
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-3ffffde ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="3ffffde" data-element_type="widget"
								data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h1 class="elementor-heading-title elementor-size-default">Gangsar & Indah </h1>
								</div>
							</div>
							<div class="elementor-element elementor-element-69503f8 elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-lottie"
								data-id="69503f8" data-element_type="widget"
								data-settings="{&quot;source_json&quot;:{&quot;url&quot;:&quot;https:\/\/websiteinvitation.com\/wp-content\/uploads\/2022\/01\/24773-swipe-up-white-text.json&quot;,&quot;id&quot;:61202,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;loop&quot;:&quot;yes&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;source&quot;:&quot;media_file&quot;,&quot;caption_source&quot;:&quot;none&quot;,&quot;link_to&quot;:&quot;none&quot;,&quot;trigger&quot;:&quot;arriving_to_viewport&quot;,&quot;viewport&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:{&quot;start&quot;:0,&quot;end&quot;:100}},&quot;play_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;start_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;0&quot;,&quot;sizes&quot;:[]},&quot;end_point&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;100&quot;,&quot;sizes&quot;:[]},&quot;renderer&quot;:&quot;svg&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="lottie.default">
								<div class="elementor-widget-container">
									<div class="e-lottie__container">
										<div class="e-lottie__animation"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="elementor-section elementor-top-section elementor-element elementor-element-3752c72 wdp-sticky-section-yes elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-positon-bottom"
				data-id="3752c72" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;fadeIn&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-f3a1ae3 wdp-sticky-section-no"
						data-id="f3a1ae3" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_link&quot;:{&quot;url&quot;:&quot;#2&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-0e8141d elementor-view-default elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-icon-box"
								data-id="0e8141d" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<a class="elementor-icon elementor-animation-" href="#home">
												<i aria-hidden="true" class="far fa-gem"></i> </a>
										</div>
										<div class="elementor-icon-box-content">
											<div class="elementor-icon-box-title">
												<a href="#home">
													Home </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-c3dbc69 wdp-sticky-section-no"
						data-id="c3dbc69" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_link&quot;:{&quot;url&quot;:&quot;#3&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-c461844 elementor-view-default elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-icon-box"
								data-id="c461844" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<a class="elementor-icon elementor-animation-" href="#mempelai">
												<i aria-hidden="true" class="fas fa-hand-holding-heart"></i> </a>
										</div>
										<div class="elementor-icon-box-content">
											<div class="elementor-icon-box-title">
												<a href="#mempelai">
													Mempelai </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-32cce29 wdp-sticky-section-no"
						data-id="32cce29" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_link&quot;:{&quot;url&quot;:&quot;#4&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-66a0d5c elementor-view-default elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-icon-box"
								data-id="66a0d5c" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<a class="elementor-icon elementor-animation-" href="#acara">
												<i aria-hidden="true" class="fas fa-calendar-alt"></i> </a>
										</div>
										<div class="elementor-icon-box-content">
											<div class="elementor-icon-box-title">
												<a href="#acara">
													Acara </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-e6dd4b1 wdp-sticky-section-no"
						data-id="e6dd4b1" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_link&quot;:{&quot;url&quot;:&quot;#5&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-586c614 elementor-view-default elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-icon-box"
								data-id="586c614" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<a class="elementor-icon elementor-animation-" href="#rsvp">
												<i aria-hidden="true" class="fas fa-book-open"></i> </a>
										</div>
										<div class="elementor-icon-box-content">
											<div class="elementor-icon-box-title">
												<a href="#rsvp">
													rsvp </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-a6fc446 wdp-sticky-section-no"
						data-id="a6fc446" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_link&quot;:{&quot;url&quot;:&quot;#1&quot;,&quot;is_external&quot;:&quot;&quot;,&quot;nofollow&quot;:&quot;&quot;,&quot;custom_attributes&quot;:&quot;&quot;},&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-fca81d6 elementor-view-default elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-icon-box"
								data-id="fca81d6" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="icon-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-icon-box-wrapper">
										<div class="elementor-icon-box-icon">
											<a class="elementor-icon elementor-animation-" href="#galeri">
												<i aria-hidden="true" class="fas fa-photo-video"></i> </a>
										</div>
										<div class="elementor-icon-box-content">
											<div class="elementor-icon-box-title">
												<a href="#galeri">
													Galeri </a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-716d1a7 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="716d1a7" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a4b017e wdp-sticky-section-no"
						data-id="a4b017e" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-756b1e5 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
								data-id="756b1e5" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-df36d91 wdp-sticky-section-no"
										data-id="df36d91" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-e405edb wdp-sticky-section-no elementor-widget elementor-widget-image"
												data-id="e405edb" data-element_type="widget"
												data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="512" height="512" src="images/Navy-Blue-5.png"
														class="attachment-full size-full" alt loading="lazy"
														srcset="images/Navy-Blue-5.png 512w, images/Navy-Blue-5-300x300.png 300w, images/Navy-Blue-5-150x150.png 150w"
														sizes="(max-width: 512px) 100vw, 512px"> </div>
											</div>
											<div class="elementor-element elementor-element-8365f83 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="8365f83" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">???Dan di
														antara tanda-tanda <br>(kebesaran)-Nya ialah Dia menciptakan
														<br>pasangan-pasangan untukmu dari <br>jenismu sendiri, agar
														kamu cenderung <br>dan merasa tenteram kepadanya,<br> dan Dia
														menjadikan di antaramu <br> rasa kasih dan sayang. Sungguh,
														pada<br>yang demikian itu benar-benar <br>terdapat tanda-tanda
														(kebesaran Allah) <br>bagi kaum yang berpikir..???<br><br>(QS.
														Ar-Rum : 21)</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-71baa55 elementor-view-default elementor-widget elementor-widget-weddingpress-audio"
												data-id="71baa55" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="weddingpress-audio.default">
												<div class="elementor-widget-container">

													<script>
														var settingAutoplay = 'yes';
														window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
													</script>

													<div id="audio-container" class="audio-box">

														<audio id="song" loop>
															<source
																src="media/Ada-Untukmu-Tyok-Satrio-Official-Music-Video-128-kbps.mp3"
																type="audio/mp3">
														</audio>

														<div class="elementor-icon-wrapper" id="unmute-sound"
															style="display: none;">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-compact-disc"></i>
															</div>
														</div>

														<div class="elementor-icon-wrapper" id="mute-sound"
															style="display: none;">
															<div class="elementor-icon">
																<i aria-hidden="true" class="fas fa-pause"></i> </div>
														</div>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-cabc652 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="cabc652" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:60819,&quot;url&quot;:&quot;media\/16-min.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-340a013 wdp-sticky-section-no"
						data-id="340a013" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-d801e1d animated-slow ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
								data-id="d801e1d" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Assalamu???alaikum
										Warahmatullahi Wabarakatuh,

										Dengan memohon rahmat dan ridho Allah SWT,

										insyaaAllah kami akan menyelenggarakan

										acara pernikahan :???</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-b0ee953 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="b0ee953" data-element_type="section" id="mempelai"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d71817a wdp-sticky-section-no"
						data-id="d71817a" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;background_slideshow_gallery&quot;:[],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-613f709 ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
								data-id="613f709" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Sang Mempelai</h2>
								</div>
							</div>
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-3b27528 elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
								data-id="3b27528" data-element_type="section"
								data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eadacfb wdp-sticky-section-no"
										data-id="eadacfb" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-e225222 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
												data-id="e225222" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="327" height="327" src="media/woman.jpg"
														class="attachment-large size-large" alt loading="lazy"
														srcset="media/woman.jpg 327w, media/woman.jpg 300w, media/woman.jpg 150w"
														sizes="(max-width: 327px) 100vw, 327px"> </div>
											</div>
											<div class="elementor-element elementor-element-d73476a wdp-sticky-section-no elementor-widget elementor-widget-spacer"
												data-id="d73476a" data-element_type="widget"
												data-settings="{&quot;_ob_spacerat_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-a80a0c0 ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
												data-id="a80a0c0" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Indah Perwitasari</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-bcf18bc elementor-shape-circle e-grid-align-mobile-center animated-slow elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-social-icons"
												data-id="bcf18bc" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="social-icons.default">
												<div class="elementor-widget-container">
													<div class="elementor-social-icons-wrapper elementor-grid">
														<span class="elementor-grid-item">
															<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-1b6bdd6"
																target="_blank">
																<span class="elementor-screen-only">Instagram</span>
																<i class="fab fa-instagram"></i> </a>
														</span>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-e8f154f ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
												data-id="e8f154f" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">
														Putri pertama Bapak Suparno
														<br>dan Ibu Sri Winarti
													</h2>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9aab6c0 wdp-sticky-section-no"
										data-id="9aab6c0" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-c3f8257 wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-image"
												data-id="c3f8257" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="327" height="327" src="media/man.jpg"
														class="attachment-large size-large" alt loading="lazy"
														srcset="media/man.jpg 327w, media/man.jpg 300w, media/man.jpg 150w"
														sizes="(max-width: 327px) 100vw, 327px"> </div>
											</div>
											<div class="elementor-element elementor-element-2e3de68 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
												data-id="2e3de68" data-element_type="widget"
												data-settings="{&quot;_ob_spacerat_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-28c775c ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
												data-id="28c775c" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Gangsar Manuntung</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-457912f elementor-shape-circle e-grid-align-mobile-center animated-slow elementor-grid-0 e-grid-align-center wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-social-icons"
												data-id="457912f" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="social-icons.default">
												<div class="elementor-widget-container">
													<div class="elementor-social-icons-wrapper elementor-grid">
														<span class="elementor-grid-item">
															<a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-1b6bdd6"
																target="_blank">
																<span class="elementor-screen-only">Instagram</span>
																<i class="fab fa-instagram"></i> </a>
														</span>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-cb78af3 ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
												data-id="cb78af3" data-element_type="widget"
												data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:500,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Putra pertama Bapak Warsiman 
														<br>dan Ibu Eny Yuliarti
													</h2>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-3ef132c elementor-section-full_width elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
								data-id="3ef132c" data-element_type="section"
								data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cbb873e wdp-sticky-section-no"
										data-id="cbb873e" data-element_type="column"
										data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap">
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9c77f92 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="9c77f92" data-element_type="section" id="acara"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:60820,&quot;url&quot;:&quot;media\/16-min.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-94d2c24 wdp-sticky-section-no"
						data-id="94d2c24" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-a00e4bf elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
								data-id="a00e4bf" data-element_type="section"
								data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0a1f0a7 wdp-sticky-section-no elementor-invisible"
										data-id="0a1f0a7" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:500,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-63ba6f5 wdp-sticky-section-no elementor-widget elementor-widget-image"
												data-id="63ba6f5" data-element_type="widget"
												data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="512" height="512" src="images/wedding-ring.png"
														class="attachment-large size-large" alt loading="lazy"
														srcset="images/wedding-ring.png 512w, images/wedding-ring-300x300.png 300w, images/wedding-ring-150x150.png 150w"
														sizes="(max-width: 512px) 100vw, 512px"> </div>
											</div>
											<div class="elementor-element elementor-element-8e59c9d ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="8e59c9d" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Akad
														Nikah</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-bae3c4f ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="bae3c4f" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Kamis, 28 Juli 2022</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-307f09f ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="307f09f" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">08:00 WIB
														- Selesai</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-21b6613 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
												data-id="21b6613" data-element_type="widget"
												data-settings="{&quot;_ob_spacerat_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-53105f2 elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon"
												data-id="53105f2" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="icon.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-wrapper">
														<div class="elementor-icon">
															<i aria-hidden="true" class="fas fa-map-marked-alt"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-0093a98 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="0093a98" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Balai Desa Kepek</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-23d1843 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="23d1843" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Jl. Ki Ageng Giring No.1, Trimulyo II, Kepek, Kec. Wonosari
														<br> Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55813</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-ac2263f elementor-mobile-align-center elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
												data-id="ac2263f" data-element_type="widget"
												data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="https://goo.gl/maps/Jr4A6R6Vvf1mPqkA9"
															class="elementor-button-link elementor-button elementor-size-sm"
															role="button">
															<span class="elementor-button-content-wrapper">
																<span
																	class="elementor-button-icon elementor-align-icon-left">
																	<i aria-hidden="true"
																		class="fas fa-map-marker-alt"></i> </span>
																<span class="elementor-button-text">Lihat Lokasi
																	Maps</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-985edf8 wdp-sticky-section-no"
										data-id="985edf8" data-element_type="column"
										data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap">
										</div>
									</div>
									<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6646c68 wdp-sticky-section-no elementor-invisible"
										data-id="6646c68" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:500,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-94b4862 wdp-sticky-section-no elementor-widget elementor-widget-image"
												data-id="94b4862" data-element_type="widget"
												data-settings="{&quot;_ob_photomorph_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img width="512" height="512" src="images/Navy-Blue.png"
														class="attachment-large size-large" alt loading="lazy"
														srcset="images/Navy-Blue.png 512w, images/Navy-Blue-300x300.png 300w, images/Navy-Blue-150x150.png 150w"
														sizes="(max-width: 512px) 100vw, 512px"> </div>
											</div>
											<div class="elementor-element elementor-element-d49cbec ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="d49cbec" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Resepsi
													</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-5b8152c ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="5b8152c" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Kamis, 28
														Juli 2022</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-e0d3aed ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="e0d3aed" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">12:00 WIB
														- 14:00 WIB</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-e45c0a8 wdp-sticky-section-no elementor-widget elementor-widget-spacer"
												data-id="e45c0a8" data-element_type="widget"
												data-settings="{&quot;_ob_spacerat_use&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="spacer.default">
												<div class="elementor-widget-container">
													<div class="elementor-spacer">
														<div class="elementor-spacer-inner"></div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-964452c elementor-view-default wdp-sticky-section-no elementor-widget elementor-widget-icon"
												data-id="964452c" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="icon.default">
												<div class="elementor-widget-container">
													<div class="elementor-icon-wrapper">
														<div class="elementor-icon">
															<i aria-hidden="true" class="fas fa-map-marked-alt"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-74bd931 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="74bd931" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Balai Desa Kepek</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-be5c437 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="be5c437" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Jl. Ki Ageng Giring No.1, Trimulyo II, Kepek, Kec. Wonosari
														<br> Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta 55813</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-1c97fd3 elementor-mobile-align-center elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-button"
												data-id="1c97fd3" data-element_type="widget"
												data-settings="{&quot;_ob_butterbutton_use_it&quot;:&quot;no&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="button.default">
												<div class="elementor-widget-container">
													<div class="elementor-button-wrapper">
														<a href="https://goo.gl/maps/Jr4A6R6Vvf1mPqkA9"
															class="elementor-button-link elementor-button elementor-size-sm"
															role="button">
															<span class="elementor-button-content-wrapper">
																<span
																	class="elementor-button-icon elementor-align-icon-left">
																	<i aria-hidden="true"
																		class="fas fa-map-marker-alt"></i> </span>
																<span class="elementor-button-text">Lihat Lokasi
																	Maps</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-b7fab20 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="b7fab20" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:90252,&quot;url&quot;:&quot;https:\/\/websiteinvitation.com\/wp-content\/uploads\/2022\/03\/mortar-background-cement-texture-wall_41969-1198.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b2b277f animated-slow wdp-sticky-section-no elementor-invisible"
						data-id="b2b277f" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-2f110c3 elementor-position-top elementor-vertical-align-top wdp-sticky-section-no elementor-widget elementor-widget-image-box"
								data-id="2f110c3" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="image-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-image-box-wrapper">
										<figure class="elementor-image-box-img"><img width="1568" height="2352"
												src="media/5-min.jpg" class="attachment-full size-full" alt
												loading="lazy"></figure>
										<div class="elementor-image-box-content">
											<h3 class="elementor-image-box-title">Hitung Mundur Acara </h3>
											<p class="elementor-image-box-description">Kami nantikan kehadiran<br> para
												keluarga dan sahabat, <br>untuk menjadi saksi ikrar janji suci kami
												<br>di hari yang bahagia</p>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-c73d1e5 wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-countdown"
								data-id="c73d1e5" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-countdown.default">
								<div class="elementor-widget-container">

									<div class="wpkoi-elements-countdown-wrapper">
										<div
											class="wpkoi-elements-countdown-container wpkoi-elements-countdown-label-block ">
											<ul id="wpkoi-elements-countdown-c73d1e5"
												class="wpkoi-elements-countdown-items" data-date="Jul 28 2022 0:00:00">
												<li class="wpkoi-elements-countdown-item">
													<div class="wpkoi-elements-countdown-days"><span data-days
															class="wpkoi-elements-countdown-digits">00</span><span
															class="wpkoi-elements-countdown-label">Hari</span></div>
												</li>
												<li class="wpkoi-elements-countdown-item">
													<div class="wpkoi-elements-countdown-hours"><span data-hours
															class="wpkoi-elements-countdown-digits">00</span><span
															class="wpkoi-elements-countdown-label">Jam</span></div>
												</li>
												<li class="wpkoi-elements-countdown-item">
													<div class="wpkoi-elements-countdown-minutes"><span data-minutes
															class="wpkoi-elements-countdown-digits">00</span><span
															class="wpkoi-elements-countdown-label">Menit</span></div>
												</li>
												<li class="wpkoi-elements-countdown-item">
													<div class="wpkoi-elements-countdown-seconds"><span data-seconds
															class="wpkoi-elements-countdown-digits">00</span><span
															class="wpkoi-elements-countdown-label">Detik</span></div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>


									<script type="text/javascript">
										jQuery(document).ready(function ($) {
											'use strict';
											$("#wpkoi-elements-countdown-c73d1e5").countdown();
										});
									</script>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-e6967fa elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="e6967fa" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-349a764 wdp-sticky-section-no"
						data-id="349a764" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-cd578ff elementor-aspect-ratio-169 wdp-sticky-section-no elementor-widget elementor-widget-video"
								data-id="cd578ff" data-element_type="widget"
								data-settings="{&quot;youtube_url&quot;:&quot;https:\//www.youtube.com/watch?v=JPwrVtKz11o&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;,&quot;aspect_ratio&quot;:&quot;169&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="video.default">
								<div class="elementor-widget-container">
									<div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline">
										<div class="elementor-video"></div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-09597a8 ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
								data-id="09597a8" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Perjalanan Kisah Kami
									</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-303d222 animated-slow ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
								data-id="303d222" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">"Datangnya cinta adalah
										takdir, <br>dia datang tak pernah terduga"</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-de6137d animated-slow wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-weddingpress-timeline"
								data-id="de6137d" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-timeline.default">
								<div class="elementor-widget-container">

									<div class="twae-vertical twae-wrapper twae-one-sided-wrapper">
										<div
											class="twae-timeline-centered twae-timeline-sm twae-line twae-one-sided-timeline">
											<article class="twae-timeline-entry twae-right-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Februari 2018 </span>
														<span class="twae-extra-label"></span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Awal Bertemu</span>

														<div class="twae-description">distasiun solo balapan
															Hei hei..Kukira teman,ternyata teman hidup dong.</div>
													</div>
												</div>
											</article>
											<article class="twae-timeline-entry twae-right-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Juni 2022</span>
														<span class="twae-extra-label"></span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Acara Lamaran</span>

														<div class="twae-description">Dan kami melanjutkan perkenalan ini ke jenjang yang lebih serius untuk memulai hubungan yang resmi dengan lamaran terlebih dahulu..begitulah singkat cerita, kalau mau kepo lanjut WA.</div>
													</div>
												</div>
											</article>
											<article class="twae-timeline-entry twae-right-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Juli 2022</span>
														<span class="twae-extra-label"></span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Acara Akad & Resepsi</span>

														<div class="twae-description">Hari yang bahagia telah tiba yaitu pada tanggal 28 Juli 2022, Gangsar & Indah melangsungkan pernikahan....minta doanya teman/saudara/keluarga semua untuk Gangsar & Indah.</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-986b8b9 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="986b8b9" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-dce805b wdp-sticky-section-no"
						data-id="dce805b" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-bafa87e ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="bafa87e" data-element_type="widget"
								data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Galeri</h2>
								</div>
							</div>
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-7b5e529 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
								data-id="7b5e529" data-element_type="section"
								data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-c5ab050 wdp-sticky-section-no"
										data-id="c5ab050" data-element_type="column"
										data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-0e28f6c wdp-sticky-section-no elementor-widget elementor-widget-gallery"
												data-id="0e28f6c" data-element_type="widget"
												data-settings="{&quot;columns&quot;:3,&quot;columns_mobile&quot;:2,&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;aspect_ratio&quot;:&quot;1:1&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns_tablet&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="gallery.default">
												<div class="elementor-widget-container">
													<div class="elementor-gallery__container">
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/1-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 1">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/1-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/2-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 2">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/2-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/3-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 3">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/3-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/5-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 4">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/5-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/6-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 5">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/6-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/7-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 6">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/7-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/10-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 7">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/10-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/11-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 8">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/11-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/12-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 9">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/12-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/14-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 10">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/14-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/18-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 11">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/18-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/19-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 12">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/19-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/21-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 13">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/21-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/8-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 14">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/8-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/7-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 15">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/7-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/16-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 16">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/16-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/15-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 17">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/15-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
														<a class="e-gallery-item elementor-gallery-item elementor-animated-content"
															href="media/23-min.jpg"
															data-elementor-open-lightbox="yes"
															data-elementor-lightbox-slideshow="all-0e28f6c"
															data-elementor-lightbox-title="Gangsar & Indah 18">
															<div class="e-gallery-image elementor-gallery-item__image"
																data-thumbnail="media/23-min.jpg"
																data-width="1568" data-height="2352" alt></div>
															<div class="elementor-gallery-item__overlay"></div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-21043c6 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="21043c6" data-element_type="section" id="rsvp"
				data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce88c89 wdp-sticky-section-no"
						data-id="ce88c89" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="pafe-parallax-section pafe-parallax elementor-section elementor-inner-section elementor-element elementor-element-da85d2d elementor-section-height-min-height elementor-section-content-middle elementor-section-full_width elementor-section-height-default wdp-sticky-section-no"
								data-pafe-parallax-speed="1" data-pafe-parallax-bleed="50"
								data-pafe-parallax-new-version data-id="da85d2d" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-no">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0796215 animated-slow wdp-sticky-section-no elementor-invisible"
										data-id="0796215" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-bcc3460 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="bcc3460" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Beri
														Ucapan
														&
														Doa Restu</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-e09eace wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-guestbook"
												data-id="e09eace" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="weddingpress-guestbook.default">
												<div class="elementor-widget-container">


													<div class="guestbook-box-content elementor-comment-box-wrapper"
														data-id="Nama Undangan">
														<div class="comment-form-container">
															<form id="post-guestbook-box">
																<div class="guestbook-label">
																	<label class="elementor-screen-only">
																		Nama </label></div>
																<input class="form-control" type="text"
																	name="guestbook-name" placeholder="Isikan Nama Anda"
																	required>

																<div class="guestbook-label">
																	<label class="elementor-screen-only">
																		Pesan </label></div>
																<textarea class="form-control" rows="3"
																	name="guestbook-message"
																	placeholder="Berikan Ucapan Dan Doa Restu"
																	required></textarea>
																<div class="guestbook-label">
																	<label class="elementor-screen-only">
																		Konfirmasi Kehadiran </label>
																</div>
																<select class="form-control" name="confirm" required>
																	<option value>Konfirmasi Kehadiran</option>
																	<option value="Hadir">Hadir</option>
																	<option value="Akan Hadir">Akan Hadir</option>
																	<option value="Tidak Hadir">Tidak Hadir</option>
																</select>
																<div class="elementor-button-wrapper">
																	<button type="submit"
																		class="elementor-button-link elementor-button elementor-size-sm">
																		Kirimkan Ucapan </button>
																</div>
															</form>
														</div>

														<div id="hidden-avatar" style="display:none;"><img
																src="images/cropped-Logo-Fix.png"
																title="cropped-Logo-Fix.png" alt="cropped-Logo-Fix.png">
														</div>

														<div class="guestbook-list">
															<?php
																foreach ($gusetbooks as $key => $value) {
															?>
															<div class="user-guestbook">
																<div><img src="images/cropped-Logo-Fix.png"
																		title="cropped-Logo-Fix.png"
																		alt="cropped-Logo-Fix.png"></div>
																<div class="guestbook">
																	<a class="guestbook-name"><?php echo $value['name'] ?></a><span
																		class="wdp-confirm"><i
																			class="fas fa-check-circle"></i>
																		<?php echo $value['confirm'] ?></span>
																	<div class="guestbook-message"><?php echo $value['message'] ?></div>
																</div>
															</div>
															<?php
																}
															?>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-9999a2e elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="9999a2e" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:90252,&quot;url&quot;:&quot;https:\/\/websiteinvitation.com\/wp-content\/uploads\/2022\/03\/mortar-background-cement-texture-wall_41969-1198.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-87dcc0a animated-slow wdp-sticky-section-no elementor-invisible"
						data-id="87dcc0a" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;,&quot;animation_delay&quot;:500,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-1b33b6c ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="1b33b6c" data-element_type="widget"
								data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Wedding Information</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-04622e2 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="04622e2" data-element_type="widget"
								data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Dengan tidak mengurangi rasa hormat, mohon maaf kami tidak menerima tamu di rumah
									</h2>
								</div>
							</div>
							<!-- <div class="elementor-element elementor-element-930b216 elementor-mobile-align-center elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-copy-text"
								data-id="930b216" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-copy-text.default">
								<div class="elementor-widget-container">

									<div class="elementor-image img"></div>

									<div class="head-title"></div>
									<div class="elementor-button-wrapper">
										<div class="copy-content spancontent" style="display: none;"></div>

										<a style="cursor:pointer;" onclick="copyText(this)"
											data-message="berhasil disalin" class="elementor-button" role="button">

											<div class="elementor-button-content-wrapper">
												<span class="elementor-button-icon elementor-align-icon-left">
													<i aria-hidden="true" class="fas fa-gift"></i> </span>
												<span class="elementor-button-text">Bank BNI</span>
											</div>
										</a>

									</div>

									<style type="text/css">
										.spancontent {
											padding-bottom: 20px;
										}

										.copy-content {
											color: #6EC1E4;
											text-align: center;
										}

										.head-title {
											color: #6EC1E4;
											text-align: center;
										}
									</style>

									<script>
										function copyText(el) {
											var content = jQuery(el).siblings('div.copy-content').html()
											var temp = jQuery("<textarea>");
											jQuery("body").append(temp);
											temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
											document.execCommand("copy");
											temp.remove();

											var text = jQuery(el).html()
											jQuery(el).html(jQuery(el).data('message'))
											var counter = 0;
											var interval = setInterval(function () {
												counter++;

												if (counter == 2) {
													jQuery(el).html(text)
													Interval(interval);
												}
											}, 5000);
										}
									</script>

								</div>
							</div>
							<div class="elementor-element elementor-element-ccb329c elementor-mobile-align-center elementor-align-center wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-copy-text"
								data-id="ccb329c" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-copy-text.default">
								<div class="elementor-widget-container">

									<div class="elementor-image img"></div>

									<div class="head-title"></div>
									<div class="elementor-button-wrapper">
										<div class="copy-content spancontent" style="display: none;"></div>

										<a style="cursor:pointer;" onclick="copyText(this)"
											data-message="berhasil disalin" class="elementor-button" role="button">

											<div class="elementor-button-content-wrapper">
												<span class="elementor-button-icon elementor-align-icon-left">
													<i aria-hidden="true" class="fas fa-gift"></i> </span>
												<span class="elementor-button-text">Bank BCA</span>
											</div>
										</a>

									</div>

									<style type="text/css">
										.spancontent {
											padding-bottom: 20px;
										}

										.copy-content {
											color: #6EC1E4;
											text-align: center;
										}

										.head-title {
											color: #6EC1E4;
											text-align: center;
										}
									</style>

									<script>
										function copyText(el) {
											var content = jQuery(el).siblings('div.copy-content').html()
											var temp = jQuery("<textarea>");
											jQuery("body").append(temp);
											temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
											document.execCommand("copy");
											temp.remove();

											var text = jQuery(el).html()
											jQuery(el).html(jQuery(el).data('message'))
											var counter = 0;
											var interval = setInterval(function () {
												counter++;

												if (counter == 2) {
													jQuery(el).html(text)
													Interval(interval);
												}
											}, 5000);
										}
									</script>

								</div>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-1224a24 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="1224a24" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4fae1dd wdp-sticky-section-no"
						data-id="4fae1dd" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<section
								class="ob-is-breaking-bad ob-bb-inner elementor-section elementor-inner-section elementor-element elementor-element-b502584 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default wdp-sticky-section-no"
								data-id="b502584" data-element_type="section"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-51791b8 wdp-sticky-section-no elementor-invisible"
										data-id="51791b8" data-element_type="column"
										data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;,&quot;animation_delay&quot;:500,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
										<div class="elementor-widget-wrap elementor-element-populated">
											<div class="elementor-element elementor-element-020eb77 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="020eb77" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Protokol
														Kesehatan</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-f6e0007 ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
												data-id="f6e0007" data-element_type="widget"
												data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="heading.default">
												<div class="elementor-widget-container">
													<h2 class="elementor-heading-title elementor-size-default">Acara
														kami akan menerapkan segala prosedur protokol kesehatan untuk
														mencegah penularan COVID-19.</h2>
												</div>
											</div>
											<div class="elementor-element elementor-element-65509fc elementor-position-left elementor-vertical-align-middle wdp-sticky-section-no elementor-widget elementor-widget-image-box"
												data-id="65509fc" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-image-box-wrapper">
														<figure class="elementor-image-box-img"><img width="300"
																height="300" src="images/temperatur_white.png"
																class="attachment-full size-full" alt loading="lazy">
														</figure>
														<div class="elementor-image-box-content">
															<p class="elementor-image-box-description">Suhu tubuh normal
																<br>(dibawah 37,5??C)</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-884d83e elementor-position-right elementor-vertical-align-middle wdp-sticky-section-no elementor-widget elementor-widget-image-box"
												data-id="884d83e" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-image-box-wrapper">
														<figure class="elementor-image-box-img"><img width="300"
																height="300" src="images/masker_white.png"
																class="attachment-full size-full" alt loading="lazy">
														</figure>
														<div class="elementor-image-box-content">
															<p class="elementor-image-box-description">Tamu undangan
																wajib menggunakan masker.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-4194129 elementor-position-left elementor-vertical-align-middle wdp-sticky-section-no elementor-widget elementor-widget-image-box"
												data-id="4194129" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-image-box-wrapper">
														<figure class="elementor-image-box-img"><img width="300"
																height="300" src="images/jaga_jarak_white.png"
																class="attachment-full size-full" alt loading="lazy">
														</figure>
														<div class="elementor-image-box-content">
															<p class="elementor-image-box-description">Jaga jarak antar
																orang
																<br>sekitar 2 meter.</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-element elementor-element-c2151c5 elementor-position-right elementor-vertical-align-middle wdp-sticky-section-no elementor-widget elementor-widget-image-box"
												data-id="c2151c5" data-element_type="widget"
												data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
												data-widget_type="image-box.default">
												<div class="elementor-widget-container">
													<div class="elementor-image-box-wrapper">
														<figure class="elementor-image-box-img"><img width="300"
																height="300" src="images/cuci_tangan_white.png"
																class="attachment-full size-full" alt loading="lazy">
														</figure>
														<div class="elementor-image-box-content">
															<p class="elementor-image-box-description">Cuci tangan
																menggunakan air
																<br>dan sabun atau menggunakan
																<br>hand sanitizer.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-0643423 elementor-section-full_width elementor-section-height-min-height elementor-hidden-desktop elementor-hidden-tablet elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="0643423" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:60819,&quot;url&quot;:&quot;\/media\/6-min.jpg&quot;},{&quot;id&quot;:60814,&quot;url&quot;:&quot;\/media\/5-min.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-background-overlay"></div>
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-464fa85 elementor-hidden-desktop elementor-hidden-tablet wdp-sticky-section-no"
						data-id="464fa85" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap">
						</div>
					</div>
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2a4d7e5 wdp-sticky-section-no"
						data-id="2a4d7e5" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;gradient&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap">
							<div class="elementor-background-overlay"></div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-3b4dd2e elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="3b4dd2e" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:90252,&quot;url&quot;:&quot;https:\/\/websiteinvitation.com\/wp-content\/uploads\/2022\/03\/mortar-background-cement-texture-wall_41969-1198.jpg&quot;}],&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;,&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}">
				<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73fa942 wdp-sticky-section-no"
						data-id="73fa942" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-cdee84e ob-harakiri-inherit wdp-sticky-section-no elementor-invisible elementor-widget elementor-widget-heading"
								data-id="cdee84e" data-element_type="widget"
								data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Merupakan suatu
										kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir
										untuk memberikan doa restu kepada kedua mempelai.
										<br><br>
										Wassalamu'alaikum Warahmatullahi Wabarakatuh
										<br><br>
										Turut berbahagia,
										Segenap keluarga besar</h2>
								</div>
							</div>
							<div class="elementor-element elementor-element-279388d ob-harakiri-inherit wdp-sticky-section-no elementor-widget elementor-widget-heading"
								data-id="279388d" data-element_type="widget"
								data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="heading.default">
								<div class="elementor-widget-container">
									<h2 class="elementor-heading-title elementor-size-default">Gangsar & Indah </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-5470863 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle wdp-sticky-section-no"
				data-id="5470863" data-element_type="section"
				data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-40934f4 wdp-sticky-section-no"
						data-id="40934f4" data-element_type="column"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-d4203fa elementor-vertical-align-middle elementor-position-top wdp-sticky-section-no elementor-widget elementor-widget-image-box"
								data-id="d4203fa" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="image-box.default">
								<div class="elementor-widget-container">
									<div class="elementor-image-box-wrapper">
										<figure class="elementor-image-box-img"><a
												href="https://www.instagram.com/website.invitation/" target="_blank"
												rel="noopener"><img width="740" height="581"
													src="images/Logo-e1624252406940.png"
													class="attachment-full size-full" alt loading="lazy"></a></figure>
										<div class="elementor-image-box-content">
											<p class="elementor-image-box-description">Design By Website Invitation
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-element elementor-element-36a3993 wdp-sticky-section-no elementor-widget elementor-widget-html"
								data-id="36a3993" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="html.default">
								<div class="elementor-widget-container">
									<div class="snowflake">
										???
									</div>
									<div class="snowflake">
										???
									</div>
									<div class="snowflake">
										???
									</div>
									<div class="snowflake">
										???
									</div>
									<div class="snowflake">
										???
									</div>
									<!--<div class="snowflake">-->
									<!--???-->
									<!--</div>-->
									<!--<div class="snowflake">-->
									<!--???-->
									<!--</div>-->
									<!--<div class="snowflake">-->
									<!--???-->
									<!--</div>-->
									<!--<div class="snowflake">-->
									<!--???-->
									<!--</div>-->
									<!--<div class="snowflake">-->
									<!--???-->
									<!--</div>-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<div data-elementor-type="popup" data-elementor-id="2184" class="elementor elementor-2184 elementor-location-popup"
		data-elementor-settings="{&quot;triggers&quot;:[],&quot;timing&quot;:[]}">
		<div class="elementor-section-wrap">
			<section
				class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-389ae36 elementor-section-boxed elementor-section-height-default elementor-section-height-default wdp-sticky-section-no"
				data-id="389ae36" data-element_type="section"
				data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
				<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2d7b815 wdp-sticky-section-no"
						data-id="2d7b815" data-element_type="column"
						data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
						<div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-3946503 wdp-sticky-section-no elementor-widget elementor-widget-weddingpress-timeline"
								data-id="3946503" data-element_type="widget"
								data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}"
								data-widget_type="weddingpress-timeline.default">
								<div class="elementor-widget-container">

									<div class="twae-vertical twae-wrapper twae-centered">
										<div class="twae-timeline-centered twae-timeline-sm twae-line ">
											<article class="twae-timeline-entry twae-right-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Jul 1994</span>
														<span class="twae-extra-label">Amazon History</span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Awal Bertemu</span>
														<div class="twae-timeline-img"><img width="48" height="64"
																src="images/default.png"
																class="attachment-full size-full" alt loading="lazy">
														</div>
														<div class="twae-description">Lorem ipsum dolor sit amet,
															consectetur adipiscing elit. Erat enim res aperta. Ne
															discipulum abducam, times. Primum quid tu dicis breve? An
															haec ab eo non dicuntur?</div>
													</div>
												</div>
											</article>
											<article class="twae-timeline-entry twae-left-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Feb 2005</span>
														<span class="twae-extra-label">Amazon History</span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Acara Lamaran</span>
														<div class="twae-timeline-img"><img width="48" height="64"
																src="images/default.png"
																class="attachment-full size-full" alt loading="lazy">
														</div>
														<div class="twae-description">Aliter homines, aliter philosophos
															loqui putas oportere? Sin aliud quid voles, postea. Mihi
															enim satis est, ipsis non satis. Negat enim summo bono
															afferre incrementum diem. Quod ea non occurrentia fingunt,
															vincunt Aristonem.</div>
													</div>
												</div>
											</article>
											<article class="twae-timeline-entry twae-right-aligned">
												<div class="twae-timeline-entry-inner">
													<time class="twae-label-extra-label">
														<span class="twae-label">Aug 2007</span>
														<span class="twae-extra-label">Amazon History</span>
													</time>
													<div class="twae-bg-orange twae-icon"><i aria-hidden="true"
															class="fas fa-heart"></i></div>
													<div class="twae-bg-orange twae-data-container">
														<span class="twae-title">Acara Resepsi</span>
														<div class="twae-timeline-img"><img width="48" height="64"
																src="images/default.png"
																class="attachment-full size-full" alt loading="lazy">
														</div>
														<div class="twae-description">Lorem ipsum dolor sit amet,
															consectetur adipiscing elit, sed do eiusmod tempor
															incididunt ut labore et dolore magna aliqua. Ut enim ad
															minim veniam, quis nostrud exercitation ullamco laboris nisi
															ut aliquip ex ea commodo consequat.</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<link rel="stylesheet" id="premium-addons-css" href="css/premium-addons.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="elementor-gallery-css" href="css/e-gallery.min.css" type="text/css" media="all">
	<link rel="stylesheet" id="e-animations-css" href="css/animations.min.css" type="text/css" media="all">
	<script type="text/javascript" id="wdp_js_script-js-extra">
		/* <![CDATA[ */
		var WDP_WP = {
			"ajaxurl": "https:\/\/websiteinvitation.com\/wp-admin\/admin-ajax.php",
			"wdpNonce": "a68edcd44f",
			"jpages": "true",
			"jPagesNum": "5",
			"textCounter": "true",
			"textCounterNum": "500",
			"widthWrap": "",
			"autoLoad": "true",
			"thanksComment": "Terima kasih atas ucapan & doanya!",
			"thanksReplyComment": "Terima kasih atas balasannya!",
			"duplicateComment": "You might have left one of the fields blank, or duplicate comments",
			"insertImage": "Insert image",
			"insertVideo": "Insert video",
			"insertLink": "Insert link",
			"checkVideo": "Check video",
			"accept": "Accept",
			"cancel": "Cancel",
			"reply": "Balas",
			"textWriteComment": "Tulis Ucapan & Doa",
			"classPopularComment": "wdp-popular-comment",
			"textUrlImage": "Url image",
			"textUrlVideo": "Url video youtube or vimeo",
			"textUrlLink": "Url link",
			"textToDisplay": "Text to display",
			"textCharacteresMin": "Minimal 2 karakter",
			"textNavNext": "Selanjutnya",
			"textNavPrev": "Sebelumnya",
			"textMsgDeleteComment": "Do you want delete this comment?",
			"textLoadMore": "Load more",
			"textLikes": "Likes"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/wdp_script.js" id="wdp_js_script-js"></script>
	<script type="text/javascript" src="js/jquery.jPages.min.js" id="wdp_jPages-js"></script>
	<script type="text/javascript" src="js/jquery.textareaCounter.js" id="wdp_textCounter-js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.min.js" id="wdp_placeholder-js"></script>
	<script type="text/javascript" src="js/autosize.min.js" id="wdp_autosize-js"></script>
	<script type="text/javascript" src="js/wdp-swiper.min.js" id="wdp-swiper-js-js"></script>
	<script type="text/javascript" src="js/qr-code.js" id="weddingpress-qr-js"></script>
	<script type="text/javascript" src="js/wdp-horizontal.js" id="wdp-horizontal-js-js"></script>
	<script type="text/javascript" src="js/exad-scripts.min.js" id="exad-main-script-js"></script>
	<script type="text/javascript" src="js/ooohboi-steroids-min.js" id="ooohboi-steroids-js"></script>
	<script type="text/javascript" src="js/lottie.min.js" id="lottie-js"></script>
	<script type="text/javascript" src="js/lottie.min_1.js" id="lottie-js-js"></script>
	<script type="text/javascript" src="js/core.min.js" id="jquery-ui-core-js"></script>
	<script type="text/javascript" src="js/mouse.min.js" id="jquery-ui-mouse-js"></script>
	<script type="text/javascript" src="js/draggable.min.js" id="jquery-ui-draggable-js"></script>
	<script type="text/javascript" id="premium-addons-js-extra">
		/* <![CDATA[ */
		var PremiumSettings = {
			"ajaxurl": "https:\/\/websiteinvitation.com\/wp-admin\/admin-ajax.php",
			"nonce": "d85b8e1a62"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/premium-addons.min.js" id="premium-addons-js"></script>
	<script type="text/javascript" src="js/e-gallery.min.js" id="elementor-gallery-js"></script>
	<script type="text/javascript" src="js/webpack-pro.runtime.min.js" id="elementor-pro-webpack-runtime-js"></script>
	<script type="text/javascript" src="js/webpack.runtime.min.js" id="elementor-webpack-runtime-js"></script>
	<script type="text/javascript" src="js/frontend-modules.min.js" id="elementor-frontend-modules-js"></script>
	<script type="text/javascript" src="js/jquery.sticky.min.js" id="elementor-sticky-js"></script>
	<script type="text/javascript" id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = {
			"ajaxurl": "https:\/\/websiteinvitation.com\/wp-admin\/admin-ajax.php",
			"nonce": "3f1dba9747",
			"urls": {
				"assets": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/elementor-pro\/assets\/"
			},
			"i18n": {
				"toc_no_headings_found": "No headings were found on this page."
			},
			"shareButtonsNetworks": {
				"facebook": {
					"title": "Facebook",
					"has_counter": true
				},
				"twitter": {
					"title": "Twitter"
				},
				"google": {
					"title": "Google+",
					"has_counter": true
				},
				"linkedin": {
					"title": "LinkedIn",
					"has_counter": true
				},
				"pinterest": {
					"title": "Pinterest",
					"has_counter": true
				},
				"reddit": {
					"title": "Reddit",
					"has_counter": true
				},
				"vk": {
					"title": "VK",
					"has_counter": true
				},
				"odnoklassniki": {
					"title": "OK",
					"has_counter": true
				},
				"tumblr": {
					"title": "Tumblr"
				},
				"digg": {
					"title": "Digg"
				},
				"skype": {
					"title": "Skype"
				},
				"stumbleupon": {
					"title": "StumbleUpon",
					"has_counter": true
				},
				"mix": {
					"title": "Mix"
				},
				"telegram": {
					"title": "Telegram"
				},
				"pocket": {
					"title": "Pocket",
					"has_counter": true
				},
				"xing": {
					"title": "XING",
					"has_counter": true
				},
				"whatsapp": {
					"title": "WhatsApp"
				},
				"email": {
					"title": "Email"
				},
				"print": {
					"title": "Print"
				}
			},
			"facebook_sdk": {
				"lang": "en_US",
				"app_id": ""
			},
			"lottie": {
				"defaultAnimationUrl": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
			}
		};
	</script>
	<script type="text/javascript" src="js/frontend.min_1.js" id="elementor-pro-frontend-js"></script>
	<script type="text/javascript" src="js/waypoints.min.js" id="elementor-waypoints-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-extra">
		/* <![CDATA[ */
		var papro_addons = {
			"url": "https:\/\/websiteinvitation.com\/wp-admin\/admin-ajax.php",
			"particles_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/particles.min.js",
			"kenburns_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/cycle.min.js",
			"gradient_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/premium-gradient.min.js",
			"parallax_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/premium-parallax.min.js",
			"lottie_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/premium-addons-for-elementor\/assets\/frontend\/min-js\/lottie.min.js"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" id="elementor-frontend-js-before">
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.5.3",
			"is_static": false,
			"experimentalFeatures": {
				"e_dom_optimization": true,
				"e_optimized_assets_loading": true,
				"a11y_improvements": true,
				"e_import_export": true,
				"e_hidden_wordpress_widgets": true,
				"landing-pages": true,
				"elements-color-picker": true,
				"favorite-widgets": true,
				"admin-top-bar": true,
				"form-submissions": true
			},
			"urls": {
				"assets": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 90247,
				"title": "Tema%20Scroll%2007%20-",
				"excerpt": "",
				"featuredImage": "https:\/\/websiteinvitation.com\/wp-content\/uploads\/2021\/12\/Shelly-Ichsan-06-1024x683.jpg"
			}
		};
	</script>
	<script type="text/javascript" src="js/frontend.min.js" id="elementor-frontend-js"></script>
	<script type="text/javascript" id="elementor-frontend-js-after">
		window.scopes_array = {};
		window.backend = 0;
		jQuery(window).on("elementor/frontend/init", function () {
			elementorFrontend.hooks.addAction("frontend/element_ready/global", function ($scope, $) {
				if ("undefined" == typeof $scope) {
					return;
				}
				if ($scope.hasClass("premium-particles-yes")) {
					var id = $scope.data("id");
					window.scopes_array[id] = $scope;
				}
				if (elementorFrontend.isEditMode()) {
					var url = papro_addons.particles_url;
					jQuery.cachedAssets = function (url, options) {
						// Allow user to set any option except for dataType, cache, and url.
						options = jQuery.extend(options || {}, {
							dataType: "script",
							cache: true,
							url: url
						});
						// Return the jqXHR object so we can chain callbacks.
						return jQuery.ajax(options);
					};
					jQuery.cachedAssets(url);
					window.backend = 1;
				}
			});
		});
		jQuery(document).ready(function () {
			if (jQuery.find(".premium-particles-yes").length < 1) {

				return;
			}
			var url = papro_addons.particles_url;

			jQuery.cachedAssets = function (url, options) {
				// Allow user to set any option except for dataType, cache, and url.
				options = jQuery.extend(options || {}, {
					dataType: "script",
					cache: true,
					url: url
				});

				// Return the jqXHR object so we can chain callbacks.
				return jQuery.ajax(options);
			};
			jQuery.cachedAssets(url);
		});
		window.scopes_array = {};
		window.backend = 0;
		jQuery(window).on("elementor/frontend/init", function () {
			elementorFrontend.hooks.addAction("frontend/element_ready/global", function ($scope, $) {
				if ("undefined" == typeof $scope) {
					return;
				}
				if ($scope.hasClass("premium-gradient-yes")) {
					var id = $scope.data("id");
					window.scopes_array[id] = $scope;
				}
				if (elementorFrontend.isEditMode()) {
					var url = papro_addons.gradient_url;
					jQuery.cachedAssets = function (url, options) {
						// Allow user to set any option except for dataType, cache, and url.
						options = jQuery.extend(options || {}, {
							dataType: "script",
							cache: true,
							url: url
						});
						// Return the jqXHR object so we can chain callbacks.
						return jQuery.ajax(options);
					};
					jQuery.cachedAssets(url);
					window.backend = 1;
				}
			});
		});
		jQuery(document).ready(function () {
			if (jQuery.find(".premium-gradient-yes").length < 1) {
				return;
			}

			var url = papro_addons.gradient_url;

			jQuery.cachedAssets = function (url, options) {
				// Allow user to set any option except for dataType, cache, and url.
				options = jQuery.extend(options || {}, {
					dataType: "script",
					cache: true,
					url: url
				});

				// Return the jqXHR object so we can chain callbacks.
				return jQuery.ajax(options);
			};
			jQuery.cachedAssets(url);
		});
		window.scopes_array = {};
		window.backend = 0;
		jQuery(window).on("elementor/frontend/init", function () {
			elementorFrontend.hooks.addAction("frontend/element_ready/global", function ($scope, $) {
				if ("undefined" == typeof $scope) {
					return;
				}
				if ($scope.hasClass("premium-kenburns-yes")) {
					var id = $scope.data("id");
					window.scopes_array[id] = $scope;
				}
			});
		});
		jQuery(document).ready(function () {
			if (jQuery.find(".premium-kenburns-yes").length < 1) {
				return;
			}

			var url = papro_addons.kenburns_url;

			jQuery.cachedAssets = function (url, options) {
				// Allow user to set any option except for dataType, cache, and url.
				options = jQuery.extend(options || {}, {
					dataType: "script",
					cache: true,
					url: url
				});

				// Return the jqXHR object so we can chain callbacks.
				return jQuery.ajax(options);
			};
			jQuery.cachedAssets(url);
		});
		window.scopes_array = {};
		window.backend = 0;
		jQuery(window).on("elementor/frontend/init", function () {

			elementorFrontend.hooks.addAction("frontend/element_ready/section", function ($scope, $) {
				if ("undefined" == typeof $scope) {
					return;
				}
				if ($scope.hasClass("premium-lottie-yes")) {
					var id = $scope.data("id");
					window.scopes_array[id] = $scope;
				}
				if (elementorFrontend.isEditMode()) {

					var url = papro_addons.lottie_url;
					jQuery.cachedAssets = function (url, options) {
						// Allow user to set any option except for dataType, cache, and url.
						options = jQuery.extend(options || {}, {
							dataType: "script",
							cache: true,
							url: url
						});
						// Return the jqXHR object so we can chain callbacks.
						return jQuery.ajax(options);
					};
					jQuery.cachedAssets(url);
					window.backend = 1;
				}
			});
		});
		jQuery(document).ready(function () {
			if (jQuery.find(".premium-lottie-yes").length < 1) {
				return;
			}
			var url = papro_addons.lottie_url;

			jQuery.cachedAssets = function (url, options) {
				// Allow user to set any option except for dataType, cache, and url.
				options = jQuery.extend(options || {}, {
					dataType: "script",
					cache: true,
					url: url
				});

				// Return the jqXHR object so we can chain callbacks.
				return jQuery.ajax(options);
			};
			jQuery.cachedAssets(url);
		});
	</script>
	<script type="text/javascript" src="js/elements-handlers.min.js" id="pro-elements-handlers-js"></script>
	<script type="text/javascript" id="weddingpress-wdp-js-extra">
		/* <![CDATA[ */
		var cevar = {
			"ajax_url": "admin-ajax.php",
			"plugin_url": "https:\/\/websiteinvitation.com\/wp-content\/plugins\/weddingpress\/"
		};
		/* ]]> */
	</script>
	<script type="text/javascript" src="js/wdp.min.js" id="weddingpress-wdp-js"></script>
	<div class="pafe-break-point" data-pafe-break-point-md="768" data-pafe-break-point-lg="1025"
		data-pafe-ajax-url="https://websiteinvitation.com/wp-admin/admin-ajax.php"></div>
	<div
		data-pafe-form-builder-tinymce-upload="https://websiteinvitation.com/wp-content/plugins/piotnet-addons-for-elementor-pro/inc/tinymce/tinymce-upload.php">
	</div>
	<div data-pafe-ajax-url="https://websiteinvitation.com/wp-admin/admin-ajax.php"></div>
</body>

</html>

<!--
Performance optimized by W3 Total Cache. Learn more: https://www.boldgrid.com/w3-total-cache/

Object Caching 52/135 objects using memcached
Page Caching using memcached 
Database Caching 29/69 queries in 2.557 seconds using memcached

Served from: websiteinvitation.com @ 2022-06-26 19:23:02 by W3 Total Cache
-->