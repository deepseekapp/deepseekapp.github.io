<?php
if (isset($_GET['name'])) {
    $Param= $_GET['name'];
}else{
    $Param="";
}
$apiKey = '05daf52702b8cf'; 
$datatxt = "data.txt";
$gantiParam = str_replace ("+", " ",$Param);
$kwtitle = ucwords($gantiParam);
$kwsmall = strtolower($kwtitle);
$kwbig = strtoupper($kwtitle);
$urlDomain= "https://deepseekapp.github.io/account/app.php?name=";
$canonical = $urlDomain."".$Param."";
$amphtml = "https://okunbong.com/suhuacuan/?name=".$Param."";
$favicon = "https://ik.imagekit.io/2at4km90f/favicon-suhu-acuan.png";
$linkTarget = "https://okunbong.com/suhuacuan/?name=".$Param."";
//////////////////////////////////////////////////////////////////////////
function isBot() {
    $bots = [
        'Googlebot', 'Bingbot', 'Slurp', 'DuckDuckBot', 'Baiduspider', 'YandexBot', 'Sogou', 'TelegramBot', 'Exabot', 'facebot', 'ia_archiver', 'Google-Site-Verification', 'Google-InspectionTool', 'AhrefsBot'
    ];
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    foreach ($bots as $bot) {
        if (strpos($userAgent, $bot) !== false) {
            return true;
        }
    }
    return false;
}
// if (!isBot()) { 
//     //redirect halaman utk pengguna boleh amp boleh LP
//     header("Location: https://okunbong.com/suhuacuan/?name=".$Param."");
//     exit();
// }
include"meta.php";
//kode utk phising

if (isset($Param)) {
    $filename = $datatxt;
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($Param);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }

    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $kwganti = str_replace (" ", "+",$BRAND);
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            //$baseUrl = $scheme . "://" . $host . $path . '' . $query;
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query; //opsi
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        isBot();
        exit();
    }
} else {
    isBot();
    exit();
}
//////////////////////////////////////////////////////////////////////////
?>
<!--setting halaman utk bot google -->


<!DOCTYPE HTML>
<html xmlns:wormhole="http://www.w3.org/1999/xhtml" lang="id-ID">
<head>
  <meta charset="utf-8" />
  <title><?=$BRANDS;?> » <?=$title;?></title>
  <meta name="description" content="<?=$desc;?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
  <meta name="aplus-auto-exp" content='[{"filter":"exp-tracking=suggest-official-store","logkey":"/lzdse.result.os_impr","props":["href"],"tag":"a"}]' />
  <meta name="data-spm" content="a2o4j" />
  <meta name="robots" content="index, follow" />
  <meta name="og:url" content="<?=$canocial;?>" />
  <meta name="og:title" content="<?=$BRANDS;?> » <?=$title;?>" />
  <meta name="keywords"content="daftar gotocuan, gotocuan daftar">
  <meta name="og:type" content="product" />
  <meta name="author" content="<?=$kwbig;?>">
  <meta name="publisher" content="<?=$kwbig;?>"> 
  <meta name="og:description" content="<?=$desc;?>" />
  <meta name="og:image" content="<?=$imgcover;?>" />
  <link rel="manifest" href="https://g.lazcdn.com/g/lzdfe/pwa-assets/5.0.7/manifest/id.json">
  <link rel="shortcut icon" href="<?=$favicon;?>" type="image/x-icon">
  <link rel="canonical" href="<?=$canocial;?>" />
  <link rel="amphtml" href="<?=$amphtml;?>" />
  <!-- start preload -->
  <link rel="preload" href="<?=$imgcover;?>" as="image" />
  <link rel="preload" href="<?=$favicon;?>" as="image" />
  <link rel="preconnect dns-prefetch" href="//cart.lazada.co.id" />
  <link rel="preconnect dns-prefetch" href="//acs-m.lazada.co.id" />
  <link rel="preconnect dns-prefetch" href="//laz-g-cdn.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//laz-img-cdn.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//assets.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//aeis.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//aeu.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//g.alicdn.com" />
  <link rel="preconnect dns-prefetch" href="//arms-retcode-sg.aliyuncs.com" />
  <link rel="preconnect dns-prefetch" href="//px-intl.ucweb.com" />
  <link rel="preconnect dns-prefetch" href="//sg.mmstat.com" />
  <link rel="preconnect dns-prefetch" href="//img.lazcdn.comt" />
  <link rel="preconnect dns-prefetch" href="//g.lazcdn.com" />
  <link rel="preload" href="https://g.lazcdn.com/g/??mtb/lib-promise/3.1.3/polyfillB.js,mtb/lib-mtop/2.5.1/mtop.js,lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js" as="script" />
  <link rel="preload" href="https://g.lazcdn.com/g/woodpeckerx/jssdk??wpkReporter.js,plugins/flow.js,plugins/interface.js,plugins/blank.js" as="script" />
  <link rel="preload" href="https://g.lazcdn.com/g/??code/npm/@ali/lzd-h5-utils-qs/0.1.11/index.js,code/npm/@ali/lzd-h5-utils-cookie/1.2.10/index.js,code/npm/@ali/lzd-h5-utils-sites/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-env/1.5.12/index.js,code/npm/@ali/lzd-h5-utils-logger/1.1.52/index.js,code/npm/@ali/lzd-h5-utils-jsonp/1.1.11/index.js,code/npm/@ali/lzd-h5-utils-mtop/1.2.56/index.js,code/npm/@ali/lzd-h5-utils-icon/1.0.8/index.js,lzd/assets/1.1.18/require/2.3.6/require.js" as="script"/>
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.css" as="style" />
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-platform/0.1.22/pc.js" as="script" crossorigin />
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.css" as="style" />
  <link rel="preload" href="https://g.lazcdn.com/g/lzdfe/pdp-modules/1.4.4/pc-mod.js" as="script" crossorigin />
  <link rel="preload" href="//aeis.alicdn.com/sd/ncpc/nc.js?t=18507" as="script" />
  <link rel="preload" href="https://g.lazcdn.com/g/alilog/mlog/aplus_int.js" as="script" />
  <link rel="preload" href="https://g.lazcdn.com/g/retcode/cloud-sdk/bl.js" as="script" crossorigin />
  <link rel="preload" href="https://g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js" as="script" />
  <!-- end preload -->
        <!-- Start Preconnect -->
        <link rel="preconnect dns-prefetch" href="https://cart.lazada.co.id" />
        <link rel="preconnect dns-prefetch" href="https://acs-m.lazada.co.id" />
        <link rel="preconnect dns-prefetch" href="https://laz-g-cdn.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://laz-img-cdn.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://assets.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://aeis.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://aeu.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://g.alicdn.com" />
        <link rel="preconnect dns-prefetch" href="https://arms-retcode-sg.aliyuncs.com" />
        <link rel="preconnect dns-prefetch" href="https://px-intl.ucweb.com" />
        <link rel="preconnect dns-prefetch" href="https://sg.mmstat.com" />
        <link rel="preconnect dns-prefetch" href="https://img.lazcdn.comt" />
        <link rel="preconnect dns-prefetch" href="https://g.lazcdn.com" />
        <link rel="preconnect dns-prefetch" href="https://cdn.amplittlegiant.com" />
        <!-- End Preconnect -->
        <!-- Start Preload -->
        <link rel="preload" href="<?=$imgcover;?>" as="image" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/mtb/lib-promise/3.1.3/polyfillB.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/mtb/lib-mtop/2.6.1/mtop.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdmod/lib-mtop-middlewares/5.2.2/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lazada-decorate/lazada-mod-lib/0.0.20/LazadaModLib.min.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/woodpeckerx/jssdk/wpkReporter.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/woodpeckerx/jssdk/plugins/flow.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/woodpeckerx/jssdk/plugins/interface.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/woodpeckerx/jssdk/plugins/blank.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-qs/2.0.1/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-cookie/2.1.0/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-sites/2.1.0/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-env/2.2.0/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-logger/2.2.0/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-jsonp/2.1.0/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-mtop/2.2.2/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/lzd-h5-utils-icon/1.0.12/index.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/1.1.18/require/2.3.6/require.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-platform/0.1.23/pc.css" as="style" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-platform/0.1.23/pc.js" as="script" crossorigin="" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-modules/1.5.17/pc-mod.css" as="style" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-modules/1.5.17/pc-mod.js" as="script" crossorigin="" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/aeis.alicdn.com/sd/ncpc/nc.js?t=18507" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/alilog/mlog/aplus_int.js" as="script" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/retcode/cloud-sdk/bl.js" as="script" crossorigin="" />
        <link rel="preload" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/1.1.37/web-vitals/2.1.0/index.js" as="script" />
        <!-- End preload -->

        <!-- Style CSS -->
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/style.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd-cs/chat/2.5.0/alichat.css" desktopcss="true" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdmod/im/5.0.103/index.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd-cs/chat/2.5.0/alichat.css" desktopcss="true" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-1.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/0.0.7/dpl-buyeruikit/2.0.1/next-noreset-2.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lazada/lazada-product-detail/1.7.4/index/index.css" />
        <!--[if lte IE 9]> <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzd/assets/1.2.13/dpl-buyeruikit/1.7.0/next-noreset-2.css" /><![endif]-->
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-platform/0.1.23/pc.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lzdfe/pdp-modules/1.5.17/pc-mod.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/multimod-lzd-member__signup-login-pop/0.0.34/lib-signuppop/index.umd.es5.production.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/code/npm/@ali/multimod-lzd-trade__cart/1.0.89/lib-cart/index.umd.es5.production.css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/css/p_index-index.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/css/main.css" type="text/css" />
        <link rel="stylesheet" href="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.23/index.css" />

        <!-- csrf -->
        <meta name="X-CSRF-TOKEN" id="X-CSRF-TOKEN" content="e373e4331b9ee" />

        <!-- Custom CSS -->
        <style>
            .lzd-header .lzd-links-bar .top-links-item .orange,
            .lzd-header .lzd-links-bar .top-links-item.orange {
                color: white !important;
            }
            .lzd-header .lzd-links-bar .top-links-item .cyan,
            .lzd-header .lzd-links-bar .top-links-item.cyan {
                color: white !important;
            }
            .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor_last {
                color: white !important;
            }
            #topActionHeader.lzd-header-content-wrap.J_NavScroll {
                background: black;
            }
            .lzd-site-nav-menu.lzd-site-nav-menu-active {
                background: black;
                border-bottom: solid 1px #ffb916
            }
            .lzd-site-nav-menu.lzd-site-nav-menu-active .lzd-site-menu-nav-container .lzd-site-menu-nav-category .lzd-site-menu-nav-category-text {
                color: #f9e000;
            }
            .lzd-site-nav-menu.lzd-site-nav-menu-active .lzd-site-menu-nav-container .lzd-menu-labels .lzd-menu-labels-item .lzd-menu-labels-item-text {
                color: #f9e000;
            }
            #pdp-nav {
                background: #cd8600;
            }
            #container,
            body {
                background: #201e1e;
            }
            .grey{color:#fff;}
            .new-desktop-footer .footer-first {
                background: #201e1e;
            }
            .new-desktop-footer .footer-first .footer-title {
                color: #f9e000 !important;
            }
            .new-desktop-footer .footer-first a {
                color: white !important;
            }
            .footer-first .lzd-footer-app-downloads .lzd-app-download-text .text {
                color: white !important;
            }
            .footer-second .lzd-footer-h3 {
                color: #cd8600 !important
            }
            .footer-second {
                background-color: #120e0e !important
            }
            .footer-fourth {
                background: black !important;
            }
            .footer-fourth .lzd-footer-title {
                color: white !important;
            }
            .pdp-product-detail .pdp-product-desc .html-content.detail-content, .pdp-product-detail .pdp-product-desc article.lzd-article {
                white-space: unset !important;
            }
            .pdp-product-detail .detail-content p {
                margin-bottom: 1rem;
                text-align: justify;
            }
            #root.pdp-block {
                border-radius: 10px;
            }
            .gallery-preview-panel__image {
                border-radius: 10px !important;
            }
            .site-nav.J_NavScroll {
                position: sticky;
                top: 0;
                z-index: 99999999;
            }
            .lzd-header .lzd-links-bar {
                background:linear-gradient(to bottom,#ff9900,#BB4B09) !important;
                color:#fff;
            }
            .pdp-block__main-information {
                background: white !important;
            }
            .pdp-product-title .pdp-mod-product-badge-title {
                font-weight: 700 !important;
            }
            #pdp-nav .breadcrumb_list .breadcrumb .breadcrumb_item .breadcrumb_item_text .breadcrumb_item_anchor {
                color: black;
            }
            .footer-second .lzd-icon-payment {
                width: 90px;
                margin: 0;
            }
            .footer-second .lzd-icon-payment img:hover {
                filter: grayscale(1);
            }
            .lzd-footer-width-32.lzd-footer-spacing img.lzd-icon-delivery {
                filter: grayscale(1);
            }
            .lzd-footer-width-32.lzd-footer-spacing img.lzd-icon-delivery:hover {
                filter: grayscale(0);
            }
            .lzd-header .lzd-links-bar .links-list .top-links-item a {
                color: #000000 !important;
            }
            .lzd-header .lzd-links-bar .links-list .top-links-item span {
                color: #000000 !important;
            }
        </style>

        <!-- Start Scheme -->
        <script type="application/ld+json">
            [{
                "@type": "Product",
                "@context": "https://schema.org",
                "name": "<?=$kwbig;?>",
                "image": "<?=$imgcover;?>",
                "category": "PLATFORM > SITUS TERPERCAYA > <?=$kwbig;?>",
                "brand": { 
                    "@type": "Brand", 
                    "name": "Playstation", 
                    "url": "<?=$canocial;?>" 
                },
                "sku": "7994542702_ID-14415534461",
                "mpn": 7994542702,
                "description": "<?=$desc;?>",
                "review": {
                    "@type": "Review",
                    "reviewRating": {
                        "@type": "Rating",
                        "ratingValue": 4.8,
                        "bestRating": 5
                    },
                    "author": {
                        "@type": "Person",
                        "name": "lamlikum"
                    }
                },
                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": 4.9,
                    "reviewCount": 12000
                },
                "url": "<?=$kwbig;?>",
                "offers": {
                    "@type": "Offer",
                    "url": "<?=$canocial;?>",
                    "seller": { 
                        "@type": "Organization", 
                        "name": "<?=$kwbig;?>" 
                    },
                    "priceCurrency": "IDR",
                    "price": 5000,
                    "priceValidUntil": "2025-12-12",
                    "availability": "https://schema.org/InStock",
                    "itemCondition": "https://schema.org/NewCondition",
                    "shippingDetails": { 
                        "@id": "#shipping_policy" 
                    },
                    "hasMerchantReturnPolicy": { 
                        "@id": "#return_policy" 
                    }
                }
            }, {
                "@context": "https://schema.org/",
                "@type": "OfferShippingDetails",
                "@id": "#shipping_policy",
                "shippingRate": {
                  "@type": "MonetaryAmount",
                  "value": 10000,
                  "currency": "IDR"
                },
                "shippingDestination": {
                  "@type": "DefinedRegion",
                  "addressCountry": "ID"
                },
                "deliveryTime": {
                  "@type": "ShippingDeliveryTime",
                  "handlingTime": {
                    "@type": "QuantitativeValue",
                    "minValue": 0,
                    "maxValue": 1,
                    "unitCode": "DAY"
                  },
                  "transitTime": {
                    "@type": "QuantitativeValue",
                    "minValue": 1,
                    "maxValue": 5,
                    "unitCode": "DAY"
                  }
                }
            }, {
                "@context": "http://schema.org/",
                "@type": "MerchantReturnPolicy",
                "@id": "#return_policy",
                "applicableCountry": "ID",
                "returnPolicyCategory": "https://schema.org/MerchantReturnFiniteReturnWindow",
                "merchantReturnDays": 60,
                "returnMethod": "https://schema.org/ReturnByMail",
                "returnFees": "https://schema.org/FreeReturn"
              }]
        </script>
        <!-- End Scheme -->
    </head>

    <body data-spm="pdp_revamp" style="" class="pdp-layout-column-2 pdp-layout-column-2">
        <script>
            window.__lzd__svg__cssinject__ = true;
        </script>
        <style>
            .svgfont {
                display: inline-block;
                width: 1em;
                height: 1em;
                fill: currentColor;
                font-size: 1em;
            }.whitetext{
              color:#ffffff;
            }.orangetext{
              color:#ff9900;
            }
        </style>
        <svg aria-hidden="true" style="position: absolute; width: 0px; height: 0px; overflow: hidden;">
            <symbol id="lazadaicon_success" viewBox="0 0 1024 1024">
                <path d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z"></path>
                <path
                    d="M418.133333 691.2c-8.533333 0-12.8-4.266667-21.333333-8.533333l-115.2-115.2c-12.8-12.8-12.8-29.866667 0-38.4 12.8-12.8 29.866667-12.8 38.4 0l93.866667 93.866666 256-247.466666c12.8-12.8 29.866667-12.8 38.4 0s12.8 29.866667 0 38.4l-273.066667 268.8c0 8.533333-8.533333 8.533333-17.066667 8.533333"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_cart" viewBox="0 0 1024 1024">
                <path
                    d="M381.248 761.344a51.328 51.328 0 1 0 0 102.656 51.328 51.328 0 0 0 0-102.656z m-252.928-118.4v68.416h125.056l-14.88-68.448H128.32z m0-145.824v68.448h92.896l-14.88-68.448H128.32zM377.6 237.12l14.912 68.448h419.616V642.88H384.96L289.6 193.504 128.64 192 128 260.448l106.048 0.992 95.488 449.92h551.04V237.12H377.6z m458.4 575.552a51.328 51.328 0 1 1-102.72 0 51.328 51.328 0 0 1 102.72 0z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_wishlist" viewBox="0 0 1024 1024">
                <path
                    d="M849.067 233.244c-82.49-82.488-209.067-82.488-291.556 0l-166.4 164.978 52.622 51.2 164.978-164.978c55.467-55.466 135.111-55.466 189.156 0 45.51 45.512 61.155 128 0 189.156l-72.534 72.533L509.156 748.09 292.978 546.133 220.444 473.6c-49.777-56.889-41.244-146.489 0-189.156 51.2-51.2 132.267-52.622 184.89-4.266l51.2-51.2c-81.067-76.8-209.067-75.378-287.29 2.844-65.422 65.422-82.488 200.534-1.422 290.134l75.378 75.377 265.956 248.89 265.955-248.89 73.956-73.955c91.022-89.6 71.11-219.022 0-290.134z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_chat" viewBox="0 0 1024 1024">
                <path
                    d="M92.471652 820.758261l165.286957-123.547826h666.935652V136.993391H92.449391v683.742609zM0 887.318261l92.471652-66.56v-134.455652L0 741.62087V44.521739h1017.143652v745.160348H283.692522L0 989.807304V887.318261z"
                ></path>
                <path d="M261.988174 275.70087h477.762783v92.471652H261.988174zM261.988174 445.217391h261.988174v92.471652H261.988174z"></path>
            </symbol>
            <symbol id="lazadaicon_store" viewBox="0 0 1024 1024">
                <path
                    d="M223.833043 141.868522l180.936348 1.669565h332.221218l92.471652-92.471652H405.504L160.723478 48.88487 19.945739 316.549565a142.06887 142.06887 0 0 0 95.654957 188.66087 158.118957 158.118957 0 0 0 134.322087-24.998957l26.37913-24.197565 27.469913 23.863652a159.209739 159.209739 0 0 0 90.445913 28.026435 159.432348 159.432348 0 0 0 111.304348-45.100522l2.381913-2.337391 2.381913 2.337391a159.432348 159.432348 0 0 0 111.304348 45.100522c30.764522 0 59.503304-8.681739 83.878956-23.752348l35.617392-29.874087 34.148174 30.430609a158.029913 158.029913 0 0 0 128.289391 20.813913 142.870261 142.870261 0 0 0 96.478609-188.994783l-92.249044-173.367652-68.608 66.404174 74.48487 139.976348a50.398609 50.398609 0 0 1-34.059131 66.671304 65.958957 65.958957 0 0 1-67.673043-21.370435l-68.741565-81.92-71.123479 79.872a67.072 67.072 0 0 1-50.44313 22.639305 66.982957 66.982957 0 0 1-47.972174-20.034783l-65.714087-66.404174-65.736348 66.426435c-12.644174 12.777739-29.606957 20.012522-47.949913 20.012522a67.049739 67.049739 0 0 1-49.775304-21.904696l-70.010435-76.354782-67.940174 78.202434a65.936696 65.936696 0 0 1-66.960696 20.524522 49.597217 49.597217 0 0 1-33.391304-65.869913l117.693217-208.161391z"
                ></path>
                <path d="M184.943304 876.744348V445.217391H92.471652v523.976348h832.200348V445.217391h-92.449391v431.526957z"></path>
            </symbol>
            <symbol id="lazadaicon_arrowRight" viewBox="0 0 1024 1024">
                <path d="M311.466667 814.933333l68.266666 59.733334 332.8-366.933334-332.8-358.4-64 59.733334 273.066667 298.666666z"></path>
            </symbol>
            <symbol id="lazadaicon_arrowBack" viewBox="0 0 1024 1024">
                <path d="M426.666667 507.733333L763.733333 170.666667l-85.333333-85.333334L256 507.733333l4.266667 4.266667 422.4 422.4 85.333333-85.333333-341.333333-341.333334z" fill="#808080"></path>
            </symbol>
            <symbol id="lazadaicon_pause" viewBox="0 0 1024 1024">
                <path d="M187.733333 102.4h256v819.2H187.733333zM597.333333 102.4h256v819.2H597.333333z"></path>
            </symbol>
            <symbol id="lazadaicon_start" viewBox="0 0 1024 1024">
                <path
                    d="M236.249425 10.759014l591.395068 460.126685a42.082192 42.082192 0 0 1 0.490959 66.055013l-591.395068 474.266302A42.082192 42.082192 0 0 1 168.328767 978.396932V43.989918A42.082192 42.082192 0 0 1 236.249425 10.759014z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_phone" viewBox="0 0 1024 1024">
                <path
                    d="M185.6 21.333333v85.333334h567.466667v29.866666H185.6v874.666667h652.8V21.333333H185.6z m567.466667 904.533334H270.933333v-123.733334h482.133334v123.733334z m0-206.933334H270.933333V221.866667h482.133334v497.066666z"
                    fill=""
                ></path>
                <path d="M512 864m-42.666667 0a42.666667 42.666667 0 1 0 85.333334 0 42.666667 42.666667 0 1 0-85.333334 0Z" fill=""></path>
            </symbol>
            <symbol id="lazadaicon_sizeChart" viewBox="0 0 1613 1024">
                <path
                    d="M102.4 68.267h1405.673v893.672H102.4V68.267z m89.988 803.685h1225.697V158.255H192.388v713.697z m294.788 0h-89.988V425.115h89.988v446.837z m363.054 0h-89.988V605.09h89.988v266.86z m359.952 0h-89.988V425.115h89.988v446.837z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_address" viewBox="0 0 1024 1024">
                <path d="M138.971 980.114H43.886V190.171h412.038v95.086H138.97V885.03h599.772V694.857h95.086v285.257H138.97z"></path>
                <path
                    d="M980.114 343.771c0 65.829-21.943 124.343-70.704 170.667-31.696 31.695-68.267 53.638-112.153 63.39l-351.086 65.83c-9.752 2.437-19.504-7.315-17.066-17.068l70.705-341.333c0-2.438 2.438-7.314 2.438-7.314 9.752-41.448 31.695-75.581 63.39-107.276 46.324-48.762 104.838-70.705 170.667-70.705s124.343 24.38 170.666 73.143c48.762 46.324 73.143 102.4 73.143 170.666z m-190.171-58.514C770.438 265.752 748.495 256 721.676 256c-26.819 0-48.762 9.752-65.828 26.819-19.505 19.505-26.82 41.448-26.82 68.267 0 26.819 9.753 48.762 29.258 68.266 19.504 19.505 41.447 29.258 68.266 29.258 26.82 0 48.762-9.753 68.267-26.82 19.505-19.504 26.82-41.447 26.82-65.828-2.439-29.257-12.191-51.2-31.696-70.705z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_warn" viewBox="0 0 1024 1024">
                <path d="M576 832h-128v-128h128v128z m0-226.133333h-128v-384h128v384zM512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512S793.6 0 512 0z" fill="#FF9000"></path>
            </symbol>
            <symbol id="lazadaicon_pin" viewBox="0 0 1024 1024">
                <path
                    d="M512 544c64 0 118.4-51.2 118.4-115.2S576 313.6 512 313.6s-118.4 51.2-118.4 115.2S448 544 512 544z m0 345.6l-25.6-25.6c-28.8-28.8-268.8-297.6-268.8-444.8 0-156.8 131.2-284.8 291.2-284.8s291.2 128 291.2 284.8c0 147.2-240 416-268.8 444.8l-19.2 25.6z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_share" viewBox="0 0 1024 1024">
                <path
                    d="M809.344 695.369143c-44.580571 0-85.101714 17.792-113.481143 49.243428L340.553143 535.332571a101.193143 101.193143 0 0 0 0-49.243428l355.309714-207.908572a152.246857 152.246857 0 0 0 113.481143 50.614858c86.473143-1.371429 151.314286-67.035429 152.667429-154.569143C960.658286 86.674286 895.817143 19.657143 809.344 18.285714c-86.454857 1.371429-152.667429 68.388571-154.002286 155.940572 0 9.563429 1.334857 19.145143 2.688 28.708571L305.426286 408.137143c-28.379429-31.451429-67.547429-51.968-114.834286-51.968-86.473143 1.353143-152.685714 67.017143-154.020571 154.569143 1.353143 87.533714 67.547429 153.197714 154.020571 154.550857 44.580571 0 86.454857-20.516571 114.834286-51.968l352.603428 206.537143c-1.334857 9.581714-2.688 19.163429-2.688 30.098285 1.334857 87.552 67.547429 153.197714 154.002286 154.569143 86.473143-1.371429 151.314286-67.017143 152.667429-154.569143-1.353143-87.533714-66.194286-153.197714-152.667429-154.569142z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_largeShare" viewBox="0 0 1024 1024">
                <path
                    d="M768 686.933333c-34.133333 0-59.733333 12.8-85.333333 34.133334l-302.933334-179.2c4.266667-8.533333 4.266667-17.066667 4.266667-29.866667 0-8.533333 0-21.333333-4.266667-29.866667L682.666667 307.2c21.333333 21.333333 51.2 34.133333 85.333333 34.133333 72.533333 0 128-55.466667 128-128s-55.466667-128-128-128-128 55.466667-128 128c0 8.533333 0 21.333333 4.266667 29.866667L341.333333 418.133333C320 396.8 290.133333 384 256 384c-72.533333 0-128 55.466667-128 128s55.466667 128 128 128c34.133333 0 64-12.8 85.333333-34.133333l302.933334 179.2c-4.266667 8.533333-4.266667 17.066667-4.266667 29.866666 0 68.266667 55.466667 123.733333 123.733333 123.733334s123.733333-55.466667 123.733334-123.733334c4.266667-68.266667-51.2-128-119.466667-128z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_notes" viewBox="0 0 1024 1024">
                <path d="M512 0c282.624 0 512 229.376 512 512s-229.376 512-512 512S0 794.624 0 512 229.376 0 512 0zM460.8 768h102.4V460.8H460.8v307.2z m0-409.6h102.4V256H460.8v102.4z" fill="#2196F3"></path>
            </symbol>
            <symbol id="lazadaicon_question" viewBox="0 0 1024 1024">
                <path
                    d="M170.666667 85.333333c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334H170.666667z m512 320c0 34.133333-4.266667 64-17.066667 89.6-12.8 25.6-25.6 42.666667-46.933333 59.733334l59.733333 46.933333-34.133333 38.4-76.8-59.733333c-8.533333 4.266667-21.333333 4.266667-34.133334 4.266666-29.866667 0-55.466667-8.533333-76.8-21.333333s-38.4-34.133333-51.2-59.733333c-12.8-29.866667-21.333333-59.733333-21.333333-93.866667v-21.333333c0-34.133333 4.266667-64 17.066667-93.866667 12.8-25.6 29.866667-46.933333 51.2-59.733333s51.2-21.333333 81.066666-21.333334 55.466667 8.533333 76.8 21.333334 38.4 34.133333 51.2 59.733333 21.333333 59.733333 21.333334 93.866667v17.066666z m-64-17.066666c0-38.4-8.533333-72.533333-21.333334-93.866667-17.066667-21.333333-38.4-29.866667-64-29.866667s-46.933333 12.8-64 34.133334c-12.8 21.333333-21.333333 51.2-21.333333 89.6v21.333333c0 38.4 8.533333 68.266667 21.333333 89.6s38.4 34.133333 64 34.133333c29.866667 0 51.2-8.533333 64-29.866666 12.8-21.333333 21.333333-51.2 21.333334-93.866667v-21.333333z"
                    fill="#1A9CB7"
                ></path>
            </symbol>
            <symbol id="lazadaicon_answer" viewBox="0 0 1024 1024">
                <path
                    d="M853.333333 85.333333H170.666667c-46.933333 0-85.333333 38.4-85.333334 85.333334v768l170.666667-170.666667h597.333333c46.933333 0 85.333333-38.4 85.333334-85.333333V170.666667c0-46.933333-38.4-85.333333-85.333334-85.333334z m-260.266666 439.466667h-140.8l-29.866667 85.333333H358.4l136.533333-362.666666h55.466667l136.533333 362.666666h-64l-29.866666-85.333333zM469.333333 473.6h106.666667l-51.2-149.333333-55.466667 149.333333z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_questionSymbol" viewBox="0 0 1024 1024">
                <path
                    d="M328 723.2l-121.6 121.6c-12.8 12.8-33.6 3.2-33.6-14.4V256c0-46.4 38.4-83.2 83.2-83.2h512c46.4 0 83.2 38.4 83.2 83.2v384c0 46.4-38.4 83.2-83.2 83.2H328z m-22.4-33.6c3.2-3.2 9.6-6.4 14.4-6.4h448c24 0 44.8-19.2 44.8-44.8V256c0-24-19.2-44.8-44.8-44.8H256c-24 0-44.8 19.2-44.8 44.8v528l94.4-94.4z"
                    fill="#979797"
                ></path>
                <path
                    d="M507.2 628.8c-14.4 0-27.2-11.2-27.2-27.2 0-14.4 11.2-27.2 27.2-27.2 14.4 0 27.2 11.2 27.2 27.2-1.6 16-12.8 27.2-27.2 27.2zM588.8 438.4L564.8 464c-19.2 19.2-30.4 35.2-30.4 75.2H480v-12.8c0-28.8 12.8-56 32-75.2L544 416c9.6-9.6 16-22.4 16-36.8C560 350.4 536 326.4 507.2 326.4c-28.8 0-52.8 24-52.8 52.8H400a107.2 107.2 0 0 1 214.4 0c-1.6 22.4-11.2 44.8-25.6 59.2z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_filter" viewBox="0 0 1024 1024">
                <path
                    d="M918.75555522 201.95555522c-4.266667-8.533333-17.066667-17.066667-25.6-17.066666H129.42222222c-12.8 0-21.333333 8.533333-25.6 17.066666-4.266667 12.8-4.266667 25.6 4.266667 34.133334L411.02222222 611.55555522v256c0 17.066667 12.8 29.866667 29.866667 29.866667 17.066667 0 29.866667-12.8 29.866666-29.866667v-277.333333l-277.333333-341.333333H824.88888922l-277.333334 341.333333V867.55555522c0 17.066667 12.8 29.866667 29.866667 29.866667s29.866667-12.8 29.866667-29.866667v-256L910.22222222 236.08888922c12.8-8.533333 12.8-21.333333 8.533333-34.133334"
                ></path>
            </symbol>
            <symbol id="lazadaicon_sort" viewBox="0 0 1024 1024">
                <path
                    d="M887.466667 725.333333l-192 192-12.8 12.8c-4.266667 4.266667-12.8 8.533333-17.066667 8.533334-8.533333 0-12.8-4.266667-21.333333-8.533334l-8.533334-8.533333-192-192c-8.533333-12.8-8.533333-29.866667 0-38.4l12.8-12.8c12.8-12.8 34.133333-8.533333 42.666667 4.266667l128 128v-345.6c0-21.333333 17.066667-38.4 38.4-38.4s38.4 17.066667 38.4 38.4V810.666667l128-132.266667c8.533333-12.8 29.866667-12.8 38.4 0l12.8 12.8c12.8 8.533333 17.066667 21.333333 4.266667 34.133333z m-320-375.466666c-12.8 12.8-34.133333 8.533333-42.666667-4.266667l-128-128v345.6c0 21.333333-17.066667 38.4-38.4 38.4s-38.4-17.066667-38.4-38.4V217.6l-128 128c-8.533333 12.8-29.866667 12.8-38.4 0l-17.066667-8.533333c-8.533333-12.8-12.8-25.6 0-38.4l192-192 8.533334-12.8c8.533333-4.266667 12.8-8.533333 21.333333-8.533334s12.8 4.266667 21.333333 8.533334l4.266667 8.533333 196.266667 192c8.533333 12.8 8.533333 29.866667 0 38.4l-12.8 17.066667z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_options" viewBox="0 0 1024 1024">
                <path
                    d="M512 682.666667c46.933333 0 85.333333 38.4 85.333333 85.333333s-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333z m0-85.333334c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z m0-256c-46.933333 0-85.333333-38.4-85.333333-85.333333s38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_like" viewBox="0 0 1024 1024">
                <path
                    d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_facebook" viewBox="0 0 1024 1024">
                <path d="M548.864 1024h-73.728C212.992 1024 0 811.008 0 548.864v-73.728C0 212.992 212.992 0 475.136 0h73.728C811.008 0 1024 212.992 1024 475.136v73.728C1024 811.008 811.008 1024 548.864 1024z" fill="#3B5998"></path>
                <path
                    d="M534.528 778.24h-110.592V512H368.64v-92.16h55.296v-55.296c0-75.776 30.72-118.784 118.784-118.784h73.728v92.16h-45.056c-34.816 0-36.864 12.288-36.864 36.864v45.056h83.968l-10.24 92.16h-73.728v266.24z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_soldbyLAZ" viewBox="0 0 1024 1024">
                <path d="M512 512m-512 0a512 512 0 1 0 1024 0 512 512 0 1 0-1024 0Z" fill="#F37226"></path>
                <path
                    d="M625.777778 341.333333h208.782222l-133.12 213.617778a249.457778 249.457778 0 0 0-28.444444-12.515555L568.888889 312.888889h-33.848889l-178.631111 398.222222h32.995555l43.235556-97.848889 6.257778-14.222222a223.573333 223.573333 0 0 1 131.413333-42.097778 253.724444 253.724444 0 0 1 115.484445 22.755556l-70.542223 113.777778 8.248889 18.204444h222.151111l13.653334-30.151111h-201.671111l215.324444-341.333333V312.888889h-260.266667z m-55.182222 185.457778a287.288889 287.288889 0 0 0-110.08 23.893333l2.56-5.688888L551.537778 341.333333l83.626666 190.293334a309.191111 309.191111 0 0 0-64.853333-4.835556z"
                    fill="#FFFFFF"
                ></path>
                <path
                    d="M850.488889 718.222222h-231.537778l-11.662222-25.884444 68.266667-109.795556a256 256 0 0 0-104.96-18.488889 214.755556 214.755556 0 0 0-125.724445 39.537778l-50.915555 113.777778h-48.64l185.173333-412.444445h42.666667l103.822222 230.968889c7.111111 2.844444 14.506667 5.688889 21.617778 9.102223l122.88-197.404445h-200.817778l-19.057778-42.666667h278.471111v38.115556l-209.635555 330.808889h199.111111z m-222.435556-14.222222h213.048889l7.111111-15.928889h-203.377777l221.013333-350.435555v-17.635556h-242.346667l6.542222 14.222222h217.031112l-142.222223 229.831111-5.688889-2.844444a278.471111 278.471111 0 0 0-28.444444-11.946667h-2.844444l-1.422223-2.844444-100.977777-225.564445H540.444444l-170.666666 384h17.351111l49.777778-110.648889a229.831111 229.831111 0 0 1 135.68-43.52 261.404444 261.404444 0 0 1 118.613333 23.324445l7.111111 3.413333-72.817778 116.906667z m-181.76-139.377778l105.244445-239.786666 95.573333 217.6-13.368889-2.844445a316.017778 316.017778 0 0 0-63.146666-5.688889 284.444444 284.444444 0 0 0-107.52 23.04z m105.244445-204.515555l-77.937778 177.208889a308.337778 308.337778 0 0 1 96.711111-17.635556 300.942222 300.942222 0 0 1 52.906667 3.697778zM181.76 312.888889H151.04v398.222222h186.88l12.8-29.013333H181.76V312.888889z"
                    fill="#FFFFFF"
                ></path>
                <path d="M341.333333 718.222222H142.222222v-412.444444h46.648889v369.777778h172.942222z m-184.32-14.222222h174.933334l6.826666-14.791111H174.648889v-369.777778h-16.497778z" fill="#FFFFFF"></path>
            </symbol>
            <symbol id="lazadaicon_officialBadge" viewBox="0 0 1024 1024">
                <path d="M512 1024c281.6 0 512-230.4 512-512S793.6 0 512 0 0 230.4 0 512s230.4 512 512 512z" fill="#CE0909"></path>
                <path
                    d="M853.333333 785.066667v8.533333c0 8.533333-8.533333 17.066667-17.066666 17.066667h-8.533334l-110.933333-34.133334-25.6 110.933334c0 8.533333-8.533333 17.066667-17.066667 17.066666s-17.066667-8.533333-17.066666-8.533333l-128-256h-42.666667l-119.466667 247.466667c0 8.533333-8.533333 8.533333-17.066666 8.533333s-17.066667-8.533333-17.066667-17.066667l-25.6-102.4-110.933333 42.666667c-8.533333 0-17.066667 0-25.6-8.533333v-17.066667l128-256c-34.133333-42.666667-51.2-93.866667-51.2-153.6 0-145.066667 119.466667-256 264.533333-256s256 110.933333 256 256c0 51.2-17.066667 102.4-51.2 145.066667l136.533333 256zM512 580.266667c110.933333 0 204.8-85.333333 204.8-196.266667 0-110.933333-93.866667-196.266667-204.8-196.266667-110.933333 0-204.8 85.333333-204.8 196.266667 0 110.933333 85.333333 196.266667 204.8 196.266667zM546.133333 341.333333h93.866667l-76.8 59.733334 25.6 93.866666-76.8-51.2-85.333333 51.2 25.6-93.866666-76.8-59.733334h93.866666l34.133334-85.333333 42.666666 85.333333z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_taobaoBadge" viewBox="0 0 1024 1024">
                <path d="M512 0C230.4 0 0 230.4 0 512s230.4 512 512 512 512-230.4 512-512-230.4-512-512-512z" fill="#FF440B"></path>
                <path
                    d="M256 264.533333c34.133333 0 68.266667 25.6 68.266667 59.733334 0 34.133333-25.6 59.733333-68.266667 59.733333-34.133333 0-68.266667-25.6-68.266667-59.733333 0-34.133333 34.133333-59.733333 68.266667-59.733334zM307.2 614.4c-17.066667 51.2-17.066667 34.133333-85.333333 179.2l-93.866667-59.733333s110.933333-102.4 136.533333-145.066667c17.066667-42.666667-25.6-76.8-25.6-76.8l-76.8-42.666667 42.666667-59.733333c59.733333 42.666667 59.733333 42.666667 102.4 85.333333 25.6 25.6 17.066667 68.266667 0 119.466667z"
                    fill="#FFFFFF"
                ></path>
                <path
                    d="M844.8 682.666667c-17.066667 179.2-256 110.933333-256 110.933333l17.066667-51.2 51.2 8.533333c102.4 8.533333 93.866667-85.333333 93.866666-85.333333v-256c0-93.866667-93.866667-110.933333-256-51.2l42.666667 8.533333c0 8.533333-17.066667 25.6-34.133333 51.2h221.866666v42.666667H597.333333v59.733333h128v42.666667H597.333333v93.866667l51.2-25.6-8.533333-25.6 59.733333-17.066667 51.2 119.466667-76.8 25.6-17.066666-42.666667c-34.133333 25.6-93.866667 59.733333-213.333334 51.2-128 0-93.866667-136.533333-93.866666-136.533333h85.333333c0 17.066667-8.533333 51.2 0 68.266666 17.066667 8.533333 34.133333 8.533333 51.2 8.533334h8.533333V580.266667H366.933333v-51.2h128v-51.2h-34.133333c-34.133333 25.6-59.733333 51.2-59.733333 51.2l-34.133334-34.133334c25.6-25.6 51.2-68.266667 68.266667-102.4-8.533333 8.533333-25.6 17.066667-42.666667 17.066667-8.533333 17.066667-25.6 42.666667-42.666666 59.733333l-59.733334-34.133333C349.866667 375.466667 384 256 384 256l93.866667 25.6s-8.533333 17.066667-25.6 42.666667c366.933333-102.4 384 59.733333 384 59.733333s25.6 119.466667 8.533333 298.666667z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_certified" viewBox="0 0 1024 1024">
                <path
                    d="M512 0c282.766222 0 512 229.233778 512 512s-229.233778 512-512 512S0 794.766222 0 512 229.233778 0 512 0z m255.914667 318.577778l-25.315556-0.455111c-0.568889 0-57.429333-1.251556-116.053333-25.514667-60.188444-24.917333-98.986667-53.475556-99.271111-53.76L511.914667 227.555556l-15.189334 11.292444c-0.369778 0.284444-39.139556 28.842667-99.271111 53.76-58.624 24.291556-115.484444 25.514667-116.024889 25.514667L256 318.577778v263.082666C256 713.671111 422.456889 853.333333 512 853.333333c89.543111 0 256-139.633778 256-271.701333l-0.085333-263.082667zM487.736889 682.666667L341.333333 565.646222l44.999111-49.692444 93.866667 74.979555L658.460444 398.222222 711.111111 441.088 487.708444 682.666667z"
                    fill="#06A97F"
                ></path>
            </symbol>
            <symbol id="lazadaicon_liveUp" viewBox="0 0 1024 1024">
                <path
                    d="M349.866667 72.533333h324.266666c153.6 0 277.333333 123.733333 277.333334 277.333334v320c0 153.6-123.733333 277.333333-277.333334 277.333333H349.866667c-153.6 0-277.333333-123.733333-277.333334-277.333333V349.866667c0-153.6 123.733333-277.333333 277.333334-277.333334"
                    fill="#38C0C6"
                ></path>
                <path
                    d="M755.2 422.4l-89.6-89.6c-8.533333-8.533333-17.066667-12.8-29.866667-12.8-8.533333 0-21.333333 4.266667-29.866666 12.8l-89.6 89.6c-17.066667 17.066667-17.066667 42.666667 0 55.466667 17.066667 17.066667 42.666667 17.066667 55.466666 0l21.333334-21.333334v89.6c0 64-34.133333 93.866667-85.333334 93.866667s-85.333333-34.133333-85.333333-98.133333c0-25.6-21.333333-42.666667-42.666667-42.666667-25.6 0-42.666667 17.066667-42.666666 42.666667v4.266666c0 115.2 64 174.933333 170.666666 174.933334s174.933333-59.733333 174.933334-179.2v-85.333334l21.333333 21.333334c17.066667 17.066667 42.666667 17.066667 55.466667 0 12.8-12.8 12.8-38.4-4.266667-55.466667m-379.733333-8.533333c25.6 0 51.2-21.333333 51.2-46.933334 0-25.6-21.333333-46.933333-51.2-46.933333s-51.2 17.066667-51.2 46.933333c0 25.6 25.6 46.933333 51.2 46.933334"
                    fill="#FFCD05"
                ></path>
            </symbol>
            <symbol id="lazadaicon_fulfilledbyLazada" viewBox="0 0 1024 1024">
                <path
                    d="M911.829333 510.762667c0-221.866667-179.2-401.066667-401.066666-401.066667s-401.066667 179.2-401.066667 401.066667 179.2 401.066667 401.066667 401.066666 401.066667-179.2 401.066666-401.066666m-42.666666 0c0 196.266667-157.866667 354.133333-354.133334 354.133333s-358.4-157.866667-358.4-354.133333 157.866667-354.133333 354.133334-354.133334 358.4 157.866667 358.4 354.133334"
                    fill="#00374C"
                ></path>
                <path d="M463.829333 369.962667h196.266667v-64h-196.266667v64z m-102.4 349.866666h72.533334v-132.266666h-72.533334v132.266666z" fill="#F07025"></path>
                <path d="M438.229333 493.696v-187.733333h-76.8v251.733333h200.533334v-64z" fill="#00374C"></path>
            </symbol>
            <symbol id="lazadaicon_economy" viewBox="0 0 1024 1024">
                <path
                    d="M989.866667 529.066667c-132.266667-256-256-273.066667-294.4-273.066667H238.933333c-12.8 0-21.333333 8.533333-21.333333 21.333333v174.933334h42.666667V298.666667h439.466666c4.266667 0 98.133333-4.266667 213.333334 170.666666h-153.6c-34.133333 0-34.133333-29.866667-34.133334-38.4V358.4c0-12.8-8.533333-21.333333-21.333333-21.333333s-21.333333 8.533333-21.333333 21.333333v72.533333c0 29.866667 21.333333 76.8 76.8 76.8h174.933333c4.266667 12.8 12.8 21.333333 21.333333 38.4V640c0 12.8-12.8 25.6-25.6 25.6h-25.6c-8.533333-42.666667-42.666667-68.266667-85.333333-68.266667s-76.8 29.866667-85.333333 68.266667h-238.933334c-8.533333-42.666667-46.933333-68.266667-85.333333-68.266667-42.666667 0-76.8 29.866667-85.333333 68.266667h-38.4c-12.8 0-25.6-12.8-25.6-25.6v-34.133333h34.133333c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H179.2c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h38.4v34.133333c0 38.4 29.866667 68.266667 68.266667 68.266667h29.866666c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666H725.333333c8.533333 42.666667 42.666667 68.266667 85.333334 68.266666s76.8-29.866667 85.333333-68.266666h25.6c38.4 0 68.266667-29.866667 64-68.266667v-98.133333c8.533333-4.266667 8.533333-8.533333 4.266667-12.8m-174.933334 209.066666c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-413.866666 0c-68.266667 0-68.266667-102.4 0-102.4s68.266667 102.4 0 102.4m-337.066667-251.733333c-12.8 0-21.333333 8.533333-21.333333 21.333333s8.533333 21.333333 21.333333 21.333334h273.066667c12.8 0 21.333333-8.533333 21.333333-21.333334s-8.533333-21.333333-21.333333-21.333333H64z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_standard" viewBox="0 0 1024 1024">
                <path
                    d="M601.6 268.8h-68.266667V196.266667h68.266667v72.533333z m332.8 529.066667V128H234.666667c-8.533333 0-12.8 4.266667-21.333334 8.533333-8.533333 8.533333-8.533333 25.6 4.266667 34.133334l230.4 200.533333-162.133333 166.4L170.666667 435.2c-8.533333-8.533333-25.6-8.533333-34.133334 4.266667-8.533333 8.533333-8.533333 25.6 4.266667 34.133333l68.266667 59.733333v273.066667H426.666667l17.066666 34.133333c0 4.266667 12.8 25.6 34.133334 34.133334 4.266667 0 8.533333 4.266667 17.066666 4.266666s17.066667-4.266667 29.866667-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066667 12.8 4.266667 4.266667 8.533333 4.266667 17.066666 4.266667s21.333333-4.266667 34.133334-8.533333l12.8-4.266667c4.266667 4.266667 12.8 8.533333 17.066666 12.8 4.266667 0 8.533333 4.266667 17.066667 4.266667s21.333333-4.266667 34.133333-8.533334l17.066667-12.8c4.266667 4.266667 8.533333 4.266667 17.066667 8.533334 4.266667 0 8.533333 4.266667 12.8 4.266666 8.533333 0 17.066667-4.266667 29.866666-8.533333 8.533333-4.266667 12.8-17.066667 4.266667-25.6-4.266667-8.533333-17.066667-12.8-29.866667-4.266667l-4.266666 4.266667c-4.266667 0-4.266667-4.266667-4.266667-8.533333l-51.2-106.666667c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l42.666667 93.866666-17.066667 8.533334c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-8.533333-8.533333l-38.4-85.333333c-8.533333-34.133333-21.333333-38.4-29.866667-34.133334-8.533333 4.266667-17.066667 17.066667-12.8 25.6l29.866667 68.266667-12.8 8.533333c-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667-4.266667-8.533333-4.266667-8.533333-8.533333l-21.333334-55.466667c-4.266667-8.533333-17.066667-17.066667-29.866666-12.8-8.533333 4.266667-17.066667 17.066667-12.8 25.6l17.066666 38.4-12.8 4.266667c-4.266667 4.266667-8.533333 4.266667-12.8 4.266666-4.266667 0-4.266667-4.266667-4.266666-4.266666l-38.4-81.066667v-4.266667l-72.533334-157.866666-29.866666 29.866666 64 145.066667H256v-179.2l17.066667 17.066667c4.266667 4.266667 8.533333 4.266667 17.066666 4.266666 4.266667 0 12.8-4.266667 17.066667-4.266666l196.266667-200.533334c8.533333-8.533333 4.266667-25.6-4.266667-34.133333L294.4 179.2h187.733333V298.666667h162.133334V179.2h243.2v584.533333h-106.666667l-68.266667-140.8 55.466667 17.066667c4.266667 0 29.866667 4.266667 55.466667-8.533333 8.533333-4.266667 25.6-21.333333 29.866666-46.933334v-4.266666c4.266667-8.533333-4.266667-17.066667-8.533333-21.333334l-196.266667-102.4h-4.266666-4.266667l-110.933333-17.066666-34.133334 29.866666 136.533334 21.333334 179.2 93.866666c-4.266667 4.266667-4.266667 12.8-8.533334 17.066667-4.266667 4.266667-17.066667 4.266667-21.333333 4.266667l-89.6-25.6-8.533333-21.333334c-4.266667-8.533333-17.066667-17.066667-29.866667-8.533333-8.533333 4.266667-17.066667 17.066667-8.533333 25.6l25.6 46.933333 68.266666 140.8 21.333334 34.133334h174.933333z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_expressDelivery" viewBox="0 0 1401 1024">
                <path
                    d="M877.714286 0l-508.819876 203.52795-184.447205-69.962733c-12.720497-6.360248-25.440994 0-31.801242 6.360249s-12.720497 25.440994-12.720497 31.801242c0 12.720497 12.720497 19.080745 19.080745 25.440994l178.086957 63.602484v279.850932L248.049689 508.819876c-19.080745-6.360248-38.161491 0-44.521739 19.080745-6.360248 19.080745 0 38.161491 19.080746 44.521739l114.484472 44.521739v178.086957l559.701863 228.968944 496.099379-260.770186V190.807453l-515.180124-190.807453z m0 69.962733l407.0559 146.285714-146.285714 76.322982L731.428571 127.204969l146.285715-57.242236z m19.080745 349.813665L464.298137 235.329193 636.024845 165.36646l413.416149 171.726708-152.645963 82.68323z m432.496894 292.571428l-394.335403 209.888199v-445.217391l171.726708-89.043479v159.006211l69.962733-38.16149V356.173913L1335.652174 273.490683v438.857143z m-1081.242236-25.440994c19.080745 6.360248 25.440994 25.440994 19.080746 44.521739-6.360248 19.080745-25.440994 25.440994-44.521739 19.080746l-63.602485-25.440994c-19.080745-6.360248-25.440994-25.440994-19.080745-44.521739 6.360248-19.080745 25.440994-25.440994 44.521739-19.080745l63.602484 25.440993z m0-330.732919c0 12.720497-6.360248 19.080745-12.720496 25.440994-6.360248 6.360248-19.080745 6.360248-31.801243 6.360248l-178.086956-63.602484C12.720497 318.012422 0 305.291925 0 298.931677c0-12.720497 0-25.440994 12.720497-31.801242s19.080745-12.720497 31.801242-6.360249l178.086957 63.602485c19.080745 6.360248 25.440994 19.080745 25.440993 31.801242z m604.223603 120.844721v445.217391l-445.217391-178.086957V292.571429l445.217391 184.447205z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_shipping" viewBox="0 0 1024 1024">
                <path
                    d="M576 819.2h-341.333333l8.533333-34.133333h307.2l170.666667-588.8h34.133333l-179.2 622.933333zM332.8 196.266667h341.333333l-157.866666 541.866666h-341.333334L332.8 196.266667z m516.266667-51.2H174.933333c-34.133333 0-64 29.866667-64 68.266666v102.4c0 38.4 29.866667 68.266667 64 68.266667h8.533334l12.8-51.2h-21.333334c-8.533333 0-17.066667-8.533333-17.066666-17.066667V213.333333c0-8.533333 8.533333-17.066667 17.066666-17.066666h106.666667l-170.666667 588.8h85.333334l-25.6 85.333333h443.733333L810.666667 196.266667h42.666666c8.533333 0 17.066667 8.533333 17.066667 17.066666v102.4c0 8.533333-8.533333 17.066667-17.066667 17.066667h-42.666666L797.866667 384h51.2c34.133333 0 64-29.866667 64-68.266667V213.333333c0-38.4-29.866667-68.266667-64-68.266666zM362.666667 588.8l8.533333-29.866667h-4.266667c-25.6-4.266667-46.933333-17.066667-59.733333-34.133333-4.266667-4.266667-4.266667-8.533333-4.266667-12.8l42.666667-12.8c4.266667 4.266667 17.066667 12.8 38.4 12.8h4.266667l21.333333-64h-4.266667c-25.6-4.266667-42.666667-12.8-55.466666-21.333333 0 0-4.266667 0-4.266667-4.266667 0 0 0-4.266667-4.266667-4.266667-12.8-4.266667-17.066667-21.333333-12.8-34.133333 12.8-42.666667 68.266667-59.733333 110.933334-64h4.266666l8.533334-29.866667h38.4l-8.533334 29.866667h4.266667c29.866667 4.266667 55.466667 17.066667 64 34.133333 4.266667 4.266667 4.266667 8.533333 4.266667 12.8l-38.4 12.8c-4.266667-4.266667-21.333333-12.8-42.666667-17.066666H469.333333l-21.333333 64h4.266667c34.133333 4.266667 55.466667 17.066667 59.733333 21.333333l4.266667 4.266667v4.266666c8.533333 12.8 12.8 25.6 8.533333 42.666667-12.8 38.4-68.266667 59.733333-115.2 64h-4.266667l-8.533333 25.6h-34.133333z m59.733333-221.866667c-34.133333 4.266667-51.2 17.066667-55.466667 29.866667 0 8.533333 17.066667 17.066667 42.666667 21.333333h4.266667l12.8-55.466666-4.266667 4.266666z m0 149.333334h4.266667c34.133333-4.266667 59.733333-21.333333 59.733333-34.133334 0-8.533333-21.333333-17.066667-46.933333-21.333333h-4.266667l-12.8 55.466667z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_noshipping" viewBox="0 0 1024 1024">
                <path
                    d="M430.933333 401.066667c-25.6-4.266667-42.666667-12.8-42.666666-21.333334 4.266667-8.533333 21.333333-25.6 55.466666-29.866666h4.266667l-17.066667 51.2z m59.733334-55.466667c21.333333 0 34.133333 8.533333 42.666666 12.8l29.866667-25.6c-12.8-17.066667-29.866667-25.6-55.466667-29.866667h-4.266666l8.533333-29.866666h-42.666667l-8.533333 29.866666h-4.266667c-42.666667 4.266667-98.133333 25.6-110.933333 64-4.266667 12.8 0 29.866667 8.533333 42.666667 0 0 0 4.266667 4.266667 4.266667 0 0 4.266667 0 4.266667 4.266666 8.533333 8.533333 29.866667 12.8 55.466666 21.333334h4.266667l-8.533333 21.333333 59.733333-51.2 17.066667-64z m-170.666667 153.6c0 4.266667 4.266667 8.533333 4.266667 12.8 4.266667 4.266667 12.8 8.533333 17.066666 12.8l34.133334-29.866667c-8.533333 0-12.8-4.266667-12.8-4.266666l-42.666667 8.533333z m89.6 221.866667l-55.466667 51.2h217.6l76.8-260.266667-68.266666 59.733333-42.666667 149.333334h-128zM192 366.933333h8.533333L213.333333 315.733333h-21.333333c-8.533333 0-17.066667-4.266667-17.066667-17.066666V196.266667c0-8.533333 8.533333-17.066667 17.066667-17.066667H298.666667L149.333333 695.466667l68.266667-59.733334L349.866667 179.2h345.6L682.666667 226.133333 793.6 128H192C157.866667 128 128 157.866667 128 196.266667V298.666667c0 38.4 29.866667 68.266667 64 68.266666M891.733333 298.666667c0 8.533333-8.533333 17.066667-17.066666 17.066666h-4.266667l-46.933333 42.666667-4.266667 8.533333h55.466667c34.133333 0 64-29.866667 64-68.266666V256l-46.933334 42.666667zM597.333333 806.4H315.733333l-55.466666 51.2h375.466666l128-443.733333-68.266666 55.466666-98.133334 337.066667z m285.866667-674.133333L128 793.6l38.4 42.666667L921.6 174.933333l-38.4-42.666666z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_oversea" viewBox="0 0 1024 1024">
                <path
                    d="M985.6 337.066667c-4.266667 12.8-12.8 29.866667-34.133333 38.4l-320 132.266666s-29.866667 8.533333-55.466667 8.533334c-21.333333 0-38.4-8.533333-51.2-17.066667L443.733333 426.666667c-4.266667-4.266667-4.266667-8.533333-4.266666-17.066667s4.266667-12.8 8.533333-17.066667c4.266667 0 17.066667-12.8 42.666667-12.8 8.533333 0 17.066667 0 29.866666 4.266667l42.666667 12.8h12.8c8.533333 0 17.066667-4.266667 29.866667-8.533333l12.8-4.266667-81.066667-68.266667c-4.266667-4.266667-8.533333-12.8-4.266667-21.333333 0-8.533333 4.266667-12.8 12.8-17.066667 4.266667 0 21.333333-8.533333 46.933334-8.533333 17.066667 0 34.133333 4.266667 55.466666 8.533333 42.666667 17.066667 106.666667 42.666667 128 42.666667l102.4-42.666667c4.266667 0 25.6-8.533333 55.466667-8.533333 21.333333 0 38.4 8.533333 51.2 21.333333l4.266667 4.266667c-12.8 0 0 21.333333-4.266667 42.666667z m-42.666667-17.066667c-4.266667-4.266667-12.8-8.533333-17.066666-8.533333-17.066667 0-34.133333 8.533333-34.133334 8.533333l-106.666666 46.933333H768c-34.133333 0-128-34.133333-140.8-46.933333-8.533333-4.266667-17.066667-8.533333-25.6-8.533333l68.266667 59.733333c4.266667 4.266667 8.533333 12.8 4.266666 21.333333 0 8.533333-4.266667 12.8-12.8 17.066667l-51.2 21.333333c-12.8 8.533333-29.866667 8.533333-42.666666 8.533334s-25.6-4.266667-25.6-4.266667l-34.133334-8.533333 46.933334 42.666666c4.266667 8.533333 17.066667 8.533333 25.6 8.533334 17.066667 0 42.666667-8.533333 42.666666-8.533334L938.666667 332.8c4.266667-4.266667 12.8-8.533333 12.8-8.533333-4.266667 0-8.533333-4.266667-8.533334-4.266667z m-268.8-68.266667c-51.2-38.4-110.933333-59.733333-179.2-59.733333-166.4 0-298.666667 136.533333-298.666666 302.933333 0 34.133333 4.266667 68.266667 17.066666 102.4 55.466667-12.8 128-38.4 234.666667-81.066666 8.533333-4.266667 21.333333 0 29.866667 12.8 4.266667 8.533333 0 21.333333-12.8 29.866666-98.133333 38.4-174.933333 64-230.4 81.066667 51.2 98.133333 149.333333 166.4 264.533333 166.4 166.4 0 298.666667-136.533333 298.666667-302.933333v-4.266667l42.666666-17.066667v21.333334c0 192-153.6 345.6-337.066666 345.6-136.533333 0-251.733333-81.066667-307.2-196.266667-29.866667 8.533333-55.466667 8.533333-76.8 8.533333-42.666667 0-55.466667-12.8-68.266667-25.6-29.866667-42.666667 25.6-102.4 34.133333-115.2 4.266667-8.533333 21.333333-8.533333 29.866667 0 8.533333 8.533333 8.533333 21.333333 0 29.866667-17.066667 21.333333-34.133333 55.466667-29.866667 59.733333 0 0 12.8 17.066667 89.6 0-8.533333-34.133333-17.066667-72.533333-17.066666-110.933333 0-192 149.333333-345.6 337.066666-345.6 110.933333 0 204.8 51.2 268.8 136.533333-17.066667-12.8-55.466667-25.6-89.6-38.4z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_email" viewBox="0 0 1024 1024">
                <path
                    d="M840.533333 776.533333H307.2c-17.066667 0-34.133333-8.533333-42.666667-21.333333-12.8-12.8-12.8-29.866667-12.8-46.933333l72.533334-358.4c8.533333-25.6 38.4-51.2 68.266666-51.2h533.333334c17.066667 0 34.133333 8.533333 42.666666 21.333333 8.533333 12.8 12.8 29.866667 12.8 42.666667l-72.533333 358.4c-8.533333 29.866667-38.4 55.466667-68.266667 55.466666zM307.2 716.8h533.333333c4.266667 0 8.533333-4.266667 8.533334-8.533333l72.533333-354.133334H392.533333c-4.266667 0-8.533333 4.266667-12.8 8.533334l-72.533333 354.133333z"
                ></path>
                <path
                    d="M610.133333 610.133333c-17.066667 0-34.133333-8.533333-46.933333-21.333333l-200.533333-213.333333 42.666666-38.4 200.533334 213.333333c4.266667 4.266667 8.533333 4.266667 8.533333 0l294.4-217.6 34.133333 46.933333-294.4 217.6c-12.8 8.533333-25.6 12.8-38.4 12.8z m-465.066666-256h132.266666v55.466667H145.066667V354.133333zM42.666667 486.4h204.8v55.466667H42.666667v-55.466667z m72.533333 119.466667H213.333333v55.466666H115.2v-55.466666z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_smallPrompt" viewBox="0 0 1024 1024">
                <path
                    d="M512 841.589844c181.27441433 0 329.589844-148.31542969 329.589844-329.589844s-148.31542969-329.589844-329.589844-329.589844-329.589844 148.31542969-329.589844 329.589844 148.31542969 329.589844 329.589844 329.589844z"
                    fill="#FF9800"
                ></path>
                <path
                    d="M538.36718725 327.42968775v128.54003907c0 13.18359399 0 26.36718725-3.29589793 39.55078125 0 13.18359399-3.29589869 26.36718725-6.59179739 42.84667918h-39.55078125c-3.29589869-16.47949193-3.29589869-29.66308594-6.59179662-42.84667918 0-13.18359399-3.29589869-26.36718725-3.29589869-39.55078125v-128.54003907h59.32617188z m-62.6220698 299.92675731c0-3.29589869 0-9.8876953 3.29589792-13.18359324 3.29589869-3.29589869 3.29589869-6.59179662 6.59179738-9.88769532 3.29589869-3.29589869 6.59179662-6.59179662 9.88769532-6.59179737 3.29589869-3.29589869 9.8876953-3.29589869 13.18359324-3.29589794 3.29589869 0 9.8876953 0 13.18359399 3.29589794 3.29589869 3.29589869 6.59179662 3.29589869 9.88769535 6.59179737 3.29589869 3.29589869 6.59179662 6.59179662 6.5917966 9.88769532 3.29589869 3.29589869 3.29589869 9.8876953 3.29589869 13.18359324 0 3.29589869 0 9.8876953-3.29589869 13.183594s-3.29589869 6.59179662-6.59179663 9.88769532c-3.29589869 3.29589869-6.59179662 6.59179662-9.8876953 6.59179662-3.29589869 3.29589869-9.8876953 3.29589869-13.18359401 3.29589869-3.29589869 0-9.8876953 0-13.18359324-3.29589869-3.29589869-3.29589869-6.59179662-3.29589869-9.88769532-6.59179662-3.29589869-3.29589869-6.59179662-6.59179662-6.59179738-9.88769532s-3.29589869-9.8876953-3.29589792-13.183594z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_largePrompt" viewBox="0 0 1024 1024">
                <path d="M512 938.666667c234.666667 0 426.666667-192 426.666667-426.666667s-192-426.666667-426.666667-426.666667-426.666667 192-426.666667 426.666667 192 426.666667 426.666667 426.666667z" fill="#FF9800"></path>
                <path
                    d="M546.133333 273.066667v166.4c0 17.066667 0 34.133333-4.266666 51.2 0 17.066667-4.266667 34.133333-8.533334 55.466666h-51.2c-4.266667-21.333333-4.266667-38.4-8.533333-55.466666 0-17.066667-4.266667-34.133333-4.266667-51.2v-166.4h76.8z m-81.066666 388.266666c0-4.266667 0-12.8 4.266666-17.066666 4.266667-4.266667 4.266667-8.533333 8.533334-12.8 4.266667-4.266667 8.533333-8.533333 12.8-8.533334 4.266667-4.266667 12.8-4.266667 17.066666-4.266666 4.266667 0 12.8 0 17.066667 4.266666 4.266667 4.266667 8.533333 4.266667 12.8 8.533334 4.266667 4.266667 8.533333 8.533333 8.533333 12.8 4.266667 4.266667 4.266667 12.8 4.266667 17.066666 0 4.266667 0 12.8-4.266667 17.066667s-4.266667 8.533333-8.533333 12.8c-4.266667 4.266667-8.533333 8.533333-12.8 8.533333-4.266667 4.266667-12.8 4.266667-17.066667 4.266667-4.266667 0-12.8 0-17.066666-4.266667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333-4.266667-4.266667-8.533333-8.533333-8.533334-12.8s-4.266667-12.8-4.266666-17.066667z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_gojek" viewBox="0 0 1024 1024">
                <path
                    d="M799.511273 727.831273a130.094545 130.094545 0 0 0-52.922182 8.797091c-16.896-33.605818-31.418182-64.093091-28.346182-63.906909l34.071273 1.396363s4.608-42.356364 2.839273-65.675636c-1.722182-23.458909-9.867636-23.877818-9.867637-23.877818l-30.533818 9.681454c-36.026182 12.194909-41.425455 9.169455-41.425455 9.169455s0.465455-36.165818-6.376727-36.445091c-6.795636-0.279273-40.122182-8.750545-40.122182-8.750546-2.792727-5.492364-25.227636-17.408-36.910545-26.158545-13.079273-14.941091-58.647273-48.081455-91.601455-71.168a59.531636 59.531636 0 0 0 75.636364-54.784 59.624727 59.624727 0 0 0-56.785455-62.184727 59.485091 59.485091 0 0 0-61.905454 57.064727c-0.651636 14.242909 3.816727 27.508364 11.682909 38.167273a340.48 340.48 0 0 1-4.514909-3.025455c-7.912727-7.214545-17.035636 2.280727-17.035636 2.280727s-76.194909 151.831273-80.709819 161.233455c-4.514909 9.402182 13.777455 29.463273 13.777455 29.463273l-103.982546 2.327272c-17.826909 0.605091-31.278545 60.462545-31.278545 60.462546-68.887273 12.101818-109.474909 96.861091-109.474909 96.861091l17.221818 13.079272-1.256727 28.765091-31.371637-1.349818c-11.403636 11.822545-0.791273 19.176727-0.791272 19.176727l31.325091 1.396364v0.512l-0.186182 4.980364h0.139636a134.330182 134.330182 0 0 0 128.186182 134.516363 134.190545 134.190545 0 0 0 139.264-123.112727c14.475636-0.139636 80.477091-0.605091 122.833455 0 47.802182 0.698182 59.904-27.601455 59.904-27.601454l4.282181-100.072728s30.068364 1.396364 44.032-4.933818c13.870545-6.237091 34.536727-39.610182 34.536728-39.610182l33.885091 59.298909a131.397818 131.397818 0 0 0-52.64291 99.746909 131.258182 131.258182 0 0 0 125.160728 137.076364 131.118545 131.118545 0 0 0 136.424727-125.765818 131.258182 131.258182 0 0 0-125.160727-136.983273zM330.193455 776.471273c21.643636 13.963636 36.770909 37.096727 39.889454 63.767272l-40.029091-1.722181a50.455273 50.455273 0 0 0-16.756363-23.086546l16.896-38.958545z m-43.566546-13.963637c4.189091 0.139636 8.145455 0.744727 12.101818 1.536l-12.427636 41.053091-1.489455-0.093091c-20.48-0.884364-39.517091 10.705455-48.034909 29.416728l-40.029091-1.722182a88.064 88.064 0 0 1 89.879273-70.237091v0.046545z m-7.633454 176.686546a88.203636 88.203636 0 0 1-84.154182-87.365818l37.329454 1.582545c-1.256727 27.927273 20.340364 51.572364 48.221091 52.875636 27.927273 1.210182 51.386182-20.48 52.596364-48.453818l37.282909 1.629091a88.110545 88.110545 0 0 1-91.229091 79.732364z m365.847272-338.292364c-80.430545-6.283636-150.202182 27.741091-150.202182 27.741091s-2.373818 3.258182-4.794181-0.186182c-14.010182-20.014545-15.546182-35.048727-15.546182-35.048727l33.512727-78.196364c25.832727 32.768 137.774545 67.863273 137.774546 67.863273l-0.791273 17.826909h0.046545z m146.571637 344.762182a88.436364 88.436364 0 0 1-84.340364-92.299636 88.389818 88.389818 0 0 1 29.789091-62.510546l20.154182 35.188364a46.778182 46.778182 0 0 0 30.673454 79.965091 46.638545 46.638545 0 0 0 34.304-80.244364 46.685091 46.685091 0 0 0-36.072727-13.032727c-4.701091-8.890182-12.055273-22.993455-20.340364-39.005091a88.064 88.064 0 0 1 117.713455 87.226182 88.389818 88.389818 0 0 1-91.880727 84.712727z m-270.196364-18.106182v-3.630545l132.654545 0.093091 3.49091 3.723636-136.145455-0.186182zM470.109091 964.421818v-3.677091l204.660364 0.139637 4.282181 3.816727L470.109091 964.421818z m85.643636-72.750545v-5.352728h91.229091l1.070546 3.909819-92.346182 1.396363zM234.496 163.188364c-21.922909 13.451636-41.425455-23.365818-31.511273-30.161455 332.148364-224.535273 603.648-2.699636 605.463273 16.430546 1.861818 19.176727-27.136 26.065455-27.136 26.065454-266.24-208.523636-524.986182-25.832727-546.816-12.334545z m62.370909 83.549091c-16.709818 10.845091-30.301091-18.757818-22.714182-24.203637 253.300364-180.177455 460.241455-2.187636 461.730909 13.172364 1.396364 15.406545-22.062545 20.945455-22.062545 20.945454-202.938182-167.377455-400.290909-20.759273-417.000727-9.914181zM368.733091 321.629091c-11.031273 7.819636-20.852364-15.313455-15.825455-19.176727 166.865455-129.722182 303.290182-1.582545 304.221091 9.495272 0.930909 11.077818-13.684364 16.896-13.684363 16.896-133.725091-120.552727-263.726545-14.987636-274.711273-7.168V321.629091z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_service" viewBox="0 0 1024 1024">
                <path
                    d="M791.236118 531.80270466A78.30034946 78.30034946 0 0 0 785.77330297 517.91804997a61.45666943 61.45666943 0 0 0-30.38690869-29.02120529 20.03032178 20.03032178 0 0 0-8.19422255-3.30045065l-46.32012027-7.2837541a20.03032178 20.03032178 0 0 0-22.76172928 16.38844581l-36.76019288 219.99211563a19.80270466 19.80270466 0 0 0 16.27463616 22.76173001l42.79205178 6.94232733a17.41272317 17.41272317 0 0 0 3.41425958 0h5.34900611a60.7738181 60.7738181 0 0 0 41.54015658-17.75414919 79.66605358 79.66605358 0 0 0 9.78754377-11.38086501 79.66605358 79.66605358 0 0 0 8.9908828 0.79666097 77.73130633 77.73130633 0 0 0 26.6312238-4.77996369l-5.121389 30.1592923a83.30793026 83.30793026 0 0 1-35.96353262 51.10008252c-31.75261281 23.67219847-94.11975141 46.66154558-214.52930132 36.64638469a56.90432358 56.90432358 0 0 0-44.27156411-32.20784776c-29.47643951-4.89377188-56.90432358 9.78754378-60.43239133 33.00450801s16.95748823 45.52345929 46.43392773 50.7586572A58.2700277 58.2700277 0 0 0 530.84193207 869.58677086c22.76172928 2.16236438 44.61299011 3.18664247 65.09854685 3.18664248 80.69033094 0 142.60223533-16.27463689 184.82524325-48.59629284a120.86478413 120.86478413 0 0 0 49.84818803-76.59322005l17.98176632-108.23202392 3.18664246-18.66461766a77.95892343 77.95892343 0 0 0-60.54620098-88.88455421z m20.94079094 82.28365219l-5.23519719 31.41118677a38.125897 38.125897 0 0 1-30.72833545 30.61452652l17.07129715-101.74493154a38.01208808 38.01208808 0 0 1 18.89223549 39.71921825zM723.17854652 698.87379943a20.03032178 20.03032178 0 0 1-16.04701904 6.48709312l-22.76172929-3.86949381 30.27309978-180.95575016 22.76173 3.64187668a20.3717478 20.3717478 0 0 1 13.08799443 11.380865 48.82390995 48.82390995 0 0 1 3.8694938 30.04548266l-17.64034029 105.72823352A49.05152707 49.05152707 0 0 1 723.17854652 698.87379943zM285.58429604 491.28682617A19.91651357 19.91651357 0 0 0 262.25352361 475.80885026l-45.52345929 8.99088279a20.14413068 20.14413068 0 0 0-8.08041363 3.64187669 61.34286124 61.34286124 0 0 0-29.81786626 30.15929157A88.42931928 88.42931928 0 0 0 173.2551612 573.68428727l21.73745121 104.93157327c7.85279651 37.67066206 36.6463847 64.41569478 67.2609112 64.41569405a54.05910787 54.05910787 0 0 0 6.03185818-0.56904314h0.56904314a16.72987112 16.72987112 0 0 0 4.09711163 0l42.45062575-9.44611774A19.80270466 19.80270466 0 0 0 330.5387122 709.57181237zM264.75731402 703.19852818c-11.380865 2.27617329-26.40360597-11.380865-30.72833544-32.43546488L212.17771847 565.60387292a50.30342227 50.30342227 0 0 1 2.73140751-30.15929158A20.48555673 20.48555673 0 0 1 228.11092933 523.60848211l22.76172928-4.55234584L287.74666042 698.87379943zM771.43341334 458.62374419a93.09547403 93.09547403 0 0 1 16.04701904 9.78754378c0-103.56586915-25.37932861-183.80096588-74.20323782-238.99816004C661.38045108 171.02929132 582.85248376 141.21142578 479.28661461 141.21142578S297.87563022 171.02929132 245.86507854 229.52693612C196.47212546 285.29317342 171.20660503 366.89397427 171.77564889 472.39459067a89.56740555 89.56740555 0 0 1 19.11985261-13.54322937 54.05910787 54.05910787 0 0 1 18.77842655-7.6251794l3.6418767-0.68285133c2.84521643-83.87697341 23.89981629-148.97551953 63.5052256-193.47470145a67.37471941 67.37471941 0 0 0 34.1425943 37.67066277 63.96045983 63.96045983 0 0 0 26.06218066 5.34900612 88.54312818 88.54312818 0 0 0 45.52345857-13.31561155 139.52940179 139.52940179 0 0 1 22.76173002-10.69801295 234.44581418 234.44581418 0 0 1 74.43085566-11.380865 234.21819706 234.21819706 0 0 1 74.31704676 11.38086501 144.99221681 144.99221681 0 0 1 22.76172927 10.69801294 88.54312818 88.54312818 0 0 0 45.5234593 13.31561155 63.96045983 63.96045983 0 0 0 26.06217995-5.34900612 67.37471941 67.37471941 0 0 0 34.14259501-37.67066277c39.26398328 44.15775518 60.31858315 109.37011021 63.6190338 194.0437446l6.25947528 0.91046916a56.90432358 56.90432358 0 0 1 19.00604441 6.60090131z m-139.98463673-201.78273218a23.78600738 23.78600738 0 0 1-9.21850063 1.82093833 39.4916004 39.4916004 0 0 1-11.38086429-1.93474726A217.82975197 217.82975197 0 0 0 569.53687222 237.49354157l-1.25189519-0.56904315v1.02427808-1.02427808a273.82360639 273.82360639 0 0 0-87.74646722-13.65703758H478.48995436a272.45790226 272.45790226 0 0 0-87.5188501 13.7708465l-1.59332123 0.56904314a211.57027597 211.57027597 0 0 0-40.85730452 19.1198526 40.06064427 40.06064427 0 0 1-12.06371634 2.04855545 23.78600738 23.78600738 0 0 1-9.21850063-1.82093834c-10.01516088-4.55234587-14.90893277-18.55080946-17.18510606-29.70405662C353.30044148 197.43289802 410.20476579 182.41015633 479.62804064 182.29634741S606.06944801 197.43289802 649.20292582 227.13695464c-2.84521643 11.15324717-7.6251794 25.1517115-17.75414922 29.70405737z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_nowarranty" viewBox="0 0 1024 1024">
                <path
                    d="M298.666667 648.533333l-29.866667 34.133334C153.6 490.666667 170.666667 256 170.666667 251.733333c0-4.266667 4.266667-12.8 8.533333-17.066666 4.266667-4.266667 12.8-4.266667 17.066667-4.266667 217.6 25.6 285.866667-85.333333 285.866666-85.333333 4.266667-8.533333 12.8-12.8 21.333334-12.8s17.066667 4.266667 21.333333 8.533333c4.266667 4.266667 38.4 59.733333 140.8 81.066667l-34.133333 38.4c-68.266667-17.066667-106.666667-51.2-128-72.533334-34.133333 38.4-119.466667 102.4-285.866667 89.6-4.266667 59.733333 4.266667 226.133333 81.066667 371.2z m537.6-401.066666v4.266666c0 4.266667 34.133333 482.133333-320 631.466667h-8.533334H494.933333c-55.466667-21.333333-98.133333-51.2-136.533333-85.333333l29.866667-34.133334c34.133333 29.866667 68.266667 55.466667 115.2 76.8C763.733333 725.333333 789.333333 409.6 793.6 298.666667l42.666667-51.2zM814.933333 128l38.4 34.133333L226.133333 883.2l-38.4-34.133333L814.933333 128z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_warranty" viewBox="0 0 1024 1024">
                <path
                    d="M844.8 234.666667c-4.266667-4.266667-12.8-4.266667-17.066667-4.266667-217.6 25.6-290.133333-85.333333-294.4-89.6-4.266667-8.533333-12.8-12.8-21.333333-12.8s-17.066667 4.266667-21.333333 12.8c0 0-72.533333 115.2-294.4 89.6-4.266667 0-12.8 0-17.066667 4.266667-4.266667 0-8.533333 8.533333-8.533333 12.8 0 4.266667-34.133333 494.933333 332.8 648.533333h21.333333C891.733333 742.4 853.333333 256 853.333333 247.466667c0-4.266667-4.266667-12.8-8.533333-12.8z m-627.2 42.666666c170.666667 12.8 260.266667-51.2 294.4-89.6 34.133333 38.4 123.733333 102.4 294.4 89.6 4.266667 93.866667-12.8 448-294.4 571.733334C230.4 725.333333 217.6 371.2 217.6 277.333333z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_0day" viewBox="0 0 1024 1024">
                <path
                    d="M512 281.6c-136.533333 0-247.466667 106.666667-247.466667 238.933333 0 38.4 8.533333 76.8 29.866667 110.933334l-38.4 38.4c-25.6-42.666667-42.666667-93.866667-42.666667-149.333334 0-157.866667 132.266667-290.133333 294.4-290.133333 51.2 0 102.4 12.8 145.066667 38.4l-12.8 17.066667-38.4 12.8c-25.6-12.8-59.733333-17.066667-89.6-17.066667z m149.333333 430.933333c12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 38.4-110.933333 59.733333-179.2 59.733334-59.733333 0-110.933333-17.066667-157.866667-42.666667l34.133334-34.133333c34.133333 21.333333 76.8 29.866667 119.466666 29.866666 59.733333 0 110.933333-17.066667 153.6-51.2z m251.733334-213.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133333-93.866667 0-179.2-29.866667-247.466667-81.066666l34.133334-38.4c59.733333 42.666667 136.533333 64 213.333333 64 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-21.333333 25.6-21.333333zM823.466667 298.666667c-4.266667 17.066667-17.066667 29.866667-34.133334 34.133333h-4.266666l38.4-34.133333zM200.533333 725.333333l-34.133333 34.133334C115.2 695.466667 85.333333 610.133333 85.333333 520.533333c0-230.4 192-418.133333 426.666667-418.133333 59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c8.533333-12.8 21.333333-21.333333 38.4-17.066667 17.066667 0 34.133333 12.8 38.4 29.866667l4.266666 21.333333-42.666666 42.666667-8.533334-34.133334-34.133333 55.466667C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 76.8 21.333333 149.333333 64 204.8zM896 85.333333l42.666667 38.4-810.666667 810.666667-42.666667-38.4L896 85.333333z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_7days" viewBox="0 0 1024 1024">
                <path
                    d="M648.533333 409.6v38.4l-106.666666 238.933333h-76.8l98.133333-217.6h-119.466667V409.6h204.8z m264.533334 85.333333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6z m-401.066667-213.333333c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_14days" viewBox="0 0 1024 1024">
                <path
                    d="M913.066667 494.933333c12.8 0 25.6 12.8 25.6 25.6 0 230.4-192 418.133333-426.666667 418.133334S85.333333 750.933333 85.333333 520.533333s192-418.133333 426.666667-418.133333c59.733333 0 119.466667 12.8 174.933333 38.4l21.333334-34.133333c4.266667-17.066667 21.333333-21.333333 38.4-21.333334s34.133333 12.8 38.4 29.866667l42.666666 162.133333c8.533333 21.333333-8.533333 46.933333-29.866666 55.466667l-179.2 55.466667h-8.533334c-8.533333 0-21.333333-8.533333-25.6-17.066667-8.533333-12.8 0-25.6 12.8-29.866667l174.933334-55.466666-34.133334-140.8-34.133333 59.733333C648.533333 170.666667 580.266667 153.6 512 153.6c-209.066667 0-375.466667 166.4-375.466667 366.933333 0 204.8 170.666667 366.933333 375.466667 366.933334 209.066667 0 375.466667-166.4 375.466667-366.933334 0-12.8 12.8-25.6 25.6-25.6zM392.533333 469.333333V413.866667h115.2c0 17.066667-4.266667 29.866667-4.266666 46.933333v157.866667c0 17.066667 0 29.866667 4.266666 46.933333h-68.266666c0-12.8 4.266667-29.866667 4.266666-46.933333V469.333333H392.533333z m153.6 145.066667v-55.466667c12.8-12.8 12.8-12.8 29.866667-34.133333l68.266667-76.8c12.8-17.066667 21.333333-25.6 29.866666-34.133333h64c0 17.066667-4.266667 29.866667-4.266666 51.2v98.133333h8.533333c8.533333 0 21.333333 0 29.866667-4.266667v55.466667H733.866667v12.8c0 17.066667 0 25.6 4.266666 38.4h-64c0-8.533333 4.266667-21.333333 4.266667-38.4v-12.8h-132.266667z m123.733334-51.2v-34.133333-42.666667c-4.266667 8.533333-12.8 12.8-17.066667 25.6l-42.666667 51.2h59.733334zM512 281.6c-136.533333 0-247.466667 106.666667-247.466667 243.2 0 132.266667 110.933333 243.2 247.466667 243.2 55.466667 0 106.666667-17.066667 149.333333-51.2 12.8-8.533333 25.6-4.266667 34.133334 4.266667 8.533333 8.533333 8.533333 25.6-4.266667 34.133333-51.2 34.133333-110.933333 55.466667-179.2 55.466667-162.133333 0-294.4-132.266667-294.4-290.133334 0-157.866667 132.266667-290.133333 294.4-290.133333 55.466667 0 110.933333 17.066667 157.866667 46.933333l-68.266667 21.333334c-25.6-12.8-59.733333-17.066667-89.6-17.066667z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_optionChecked" viewBox="0 0 1024 1024">
                <path d="M1023.6802 0v1023.3604H0.3198L1023.6802 0z" fill="#F57224"></path>
                <path
                    d="M652.072455 910.790756l-173.971268-173.331668 49.249219-49.249219 124.722049 124.722049 263.515303-263.515303 48.609619 49.249219-312.124922 312.124922zM0.3198 1023.3604v-63.960025L959.720175 0h63.960025v44.772017L45.091818 1024 0.3198 1023.3604z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_google" viewBox="0 0 1024 1024">
                <path d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z" fill="#D34836"></path>
                <path
                    d="M583.68 559.104v-81.92H389.12v81.92h112.64c-16.384 49.152-63.488 81.92-116.736 81.92-51.2 0-114.688-47.104-114.688-122.88 0-69.632 49.152-122.88 114.688-122.88 30.72 0 61.44 12.288 81.92 30.72l59.392-59.392c-36.864-34.816-86.016-55.296-139.264-55.296-112.64 0-202.752 92.16-202.752 202.752s92.16 202.752 202.752 202.752c106.496 4.096 184.32-61.44 196.608-157.696zM839.68 483.328v51.2h-71.68v71.68H716.8v-71.68h-71.68v-51.2H716.8v-71.68h51.2v71.68H839.68z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_twitter" viewBox="0 0 1024 1024">
                <path d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z" fill="#5EAADE"></path>
                <path
                    d="M784.384 346.112c-20.48 8.192-40.96 14.336-63.488 18.432 22.528-14.336 40.96-34.816 49.152-61.44-22.528 12.288-45.056 22.528-71.68 26.624-20.48-22.528-49.152-34.816-81.92-34.816-61.44 0-112.64 49.152-112.64 112.64 0 8.192 0 16.384 2.048 24.576-92.16-4.096-176.128-49.152-231.424-116.736-8.192 14.336-14.336 32.768-14.336 53.248 0 38.912 20.48 73.728 49.152 92.16-18.432 0-34.816-6.144-51.2-14.336v2.048c0 53.248 38.912 100.352 90.112 110.592-10.24 2.048-18.432 4.096-28.672 4.096-8.192 0-14.336 0-20.48-2.048 14.336 45.056 55.296 77.824 104.448 77.824-38.912 30.72-86.016 47.104-139.264 47.104-8.192 0-18.432 0-26.624-2.048 49.152 32.768 108.544 51.2 172.032 51.2 206.848 0 319.488-169.984 319.488-319.488v-14.336c20.48-14.336 38.912-34.816 55.296-55.296z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_pinterest" viewBox="0 0 1024 1024">
                <path d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z" fill="#CA242D"></path>
                <path
                    d="M354.304 555.008c12.288 8.192 20.48 10.24 24.576-2.048 4.096-12.288 4.096-16.384 6.144-28.672 2.048-12.288 0-12.288-10.24-24.576-10.24-14.336-26.624-53.248-4.096-114.688 24.576-69.632 94.208-100.352 155.648-96.256 61.44 4.096 118.784 36.864 120.832 120.832 2.048 79.872-24.576 124.928-36.864 139.264-12.288 14.336-43.008 47.104-83.968 28.672-49.152-22.528-22.528-71.68-18.432-90.112 4.096-20.48 26.624-63.488 16.384-102.4-8.192-24.576-43.008-36.864-61.44-22.528-26.624 20.48-32.768 38.912-36.864 67.584-4.096 30.72 10.24 61.44 10.24 61.44s-32.768 131.072-38.912 165.888c-8.192 47.104-12.288 77.824-4.096 120.832 2.048 10.24 8.192 14.336 14.336 4.096 14.336-22.528 43.008-65.536 55.296-116.736 8.192-36.864 16.384-69.632 16.384-69.632s20.48 34.816 61.44 38.912c40.96 4.096 83.968-2.048 133.12-53.248 47.104-51.2 57.344-151.552 51.2-192.512-8.192-53.248-53.248-137.216-151.552-153.6-108.544-18.432-172.032 26.624-186.368 38.912-28.672 22.528-77.824 69.632-81.92 147.456-8.192 100.352 32.768 122.88 49.152 133.12z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_tumblr" viewBox="0 0 1024 1024">
                <path d="M552.96 1024h-81.92C212.992 1024 0 811.008 0 552.96v-81.92C0 212.992 212.992 0 471.04 0h81.92c258.048 0 471.04 212.992 471.04 471.04v81.92c0 258.048-212.992 471.04-471.04 471.04z" fill="#181818"></path>
                <path
                    d="M649.216 679.936l26.624 81.92c-6.144 8.192-18.432 16.384-38.912 22.528-20.48 6.144-40.96 10.24-61.44 10.24-24.576 0-45.056-2.048-65.536-8.192-20.48-6.144-36.864-14.336-49.152-24.576L430.08 724.992c-8.192-14.336-14.336-26.624-18.432-40.96-4.096-14.336-6.144-26.624-6.144-40.96v-186.368H348.16v-73.728c16.384-6.144 30.72-14.336 45.056-24.576 12.288-10.24 22.528-20.48 30.72-30.72 8.192-10.24 14.336-22.528 20.48-34.816 6.144-12.288 10.24-24.576 12.288-34.816l6.144-30.72c0-2.048 0-2.048 2.048-2.048l2.048-2.048h83.968V368.64h114.688v86.016h-114.688v178.176c0 6.144 0 12.288 2.048 18.432 2.048 6.144 4.096 12.288 8.192 18.432 4.096 6.144 10.24 10.24 16.384 14.336s16.384 4.096 28.672 4.096c14.336 2.048 28.672-2.048 43.008-8.192z"
                    fill="#FFFFFF"
                ></path>
            </symbol>
            <symbol id="lazadaicon_next" viewBox="0 0 1024 1024">
                <path d="M618.66666633 516.26666699L281.60000033 853.33333299l85.333333 85.33333401L789.33333332 516.266667l-4.266667-4.266667-422.39999999-422.4-85.333333 85.333333 341.333333 341.33333399z"></path>
            </symbol>
            <symbol id="lazadaicon_delete" viewBox="0 0 1024 1024">
                <path d="M896 204.8L819.2 128 512 435.2 204.8 128 128 204.8l307.2 307.2L128 819.2 204.8 896l307.2-307.2 307.2 307.2 76.8-76.8-307.2-307.2z"></path>
            </symbol>
            <symbol id="lazadaicon_add" viewBox="0 0 1024 1024">
                <path d="M544 480v-160h-64v160h-160v64h160v160h64v-160h160v-64h-160z"></path>
            </symbol>
            <symbol id="lazadaicon_reduce" viewBox="0 0 1024 1024">
                <path d="M320 480h384v64h-384z"></path>
            </symbol>
            <symbol id="lazadaicon_check" viewBox="0 0 1024 1024">
                <path d="M840.533333 213.333333L938.666667 311.466667 362.666667 883.2 85.333333 605.866667l98.133334-98.133334 179.2 179.2z"></path>
            </symbol>
            <symbol id="lazadaicon_back" viewBox="0 0 1024 1024">
                <path d="M912.00000031 464H303.99999969l280.00000031-280.00000031L512 111.99999969 111.99999969 512l400.00000031 400.00000031 72-72-280.00000031-280.00000031H912.00000031z"></path>
            </symbol>
            <symbol id="lazadaicon_ellipsis" viewBox="0 0 1024 1024">
                <path
                    d="M682.666667 512c0-46.933333 38.4-85.333333 85.333333-85.333333s85.333333 38.4 85.333333 85.333333-38.4 85.333333-85.333333 85.333333-85.333333-38.4-85.333333-85.333333z m-85.33333399 0c0 46.933333-38.4 85.333333-85.33333301 85.33333301s-85.333333-38.4-85.33333301-85.33333301 38.4-85.333333 85.33333301-85.33333301 85.333333 38.4 85.33333301 85.33333301z m-256.00000001 0c0 46.933333-38.4 85.333333-85.333333 85.333333s-85.333333-38.4-85.333333-85.333333 38.4-85.333333 85.333333-85.333333 85.333333 38.4 85.333333 85.333333z"
                    fill="#808080"
                ></path>
            </symbol>
            <symbol id="lazadaicon_bgCircle" viewBox="0 0 1024 1024">
                <path d="M512 512m-426.666667 0a426.666667 426.666667 0 1 0 853.333334 0 426.666667 426.666667 0 1 0-853.333334 0Z" fill="#F57224"></path>
            </symbol>
            <symbol id="lazadaicon_dropDownArrow" viewBox="0 0 1024 1024">
                <path d="M650.08 458.08l52.32 52.32L512 700.8l-190.4-190.4 52.32-52.32L512 596.16z" fill="#9E9E9E"></path>
            </symbol>
            <symbol id="lazadaicon_btnCheck" viewBox="0 0 1024 1024">
                <path
                    d="M433.694118 602.352941l-90.352942-90.352941-57.223529 57.223529 147.576471 141.552942 304.188235-337.317647-57.223529-57.22353-246.964706 286.117647zM512 60.235294c249.976471 0 451.764706 201.788235 451.764706 451.764706s-201.788235 451.764706-451.764706 451.764706S60.235294 761.976471 60.235294 512 262.023529 60.235294 512 60.235294z"
                    fill="#FF330C"
                ></path>
            </symbol>
            <symbol id="lazadaicon_addToCart" viewBox="0 0 1024 1024">
                <path
                    d="M520.533333 738.133333c-34.133333 0-64 29.866667-64 64s29.866667 64 64 64 64-29.866667 64-64-25.6-64-64-64zM324.266667 213.333333v64h64l119.466666 251.733334-46.933333 76.8c-4.266667 8.533333-8.533333 21.333333-8.533333 34.133333 0 34.133333 29.866667 64 64 64h392.533333V640h-379.733333c-4.266667 0-8.533333-4.266667-8.533334-8.533333v-4.266667l29.866667-55.466667h243.2c25.6 0 46.933333-12.8 55.466667-34.133333l119.466666-213.333333c12.8-4.266667 12.8-4.266667 12.8-12.8 0-21.333333-12.8-34.133333-34.133333-34.133334H460.8L430.933333 213.333333H324.266667z m524.8 524.8c34.133333 0 64 29.866667 64 64s-29.866667 64-64 64-64-29.866667-64-64 29.866667-64 64-64z m-610.133334-256h123.733334V554.666667H238.933333v140.8H166.4V554.666667H42.666667v-72.533334h123.733333v-128h76.8v128z"
                    fill="#9E9E9E"
                ></path>
            </symbol>
            <symbol id="lazadaicon_tooltip" viewBox="0 0 1024 1024">
                <path
                    d="M469.333333 725.333333h85.333334v-256h-85.333334v256z m42.666667-640C277.333333 85.333333 85.333333 277.333333 85.333333 512s192 426.666667 426.666667 426.666667 426.666667-192 426.666667-426.666667S746.666667 85.333333 512 85.333333z m0 768c-187.733333 0-341.333333-153.6-341.333333-341.333333s153.6-341.333333 341.333333-341.333333 341.333333 153.6 341.333333 341.333333-153.6 341.333333-341.333333 341.333333zM469.333333 384h85.333334V298.666667h-85.333334v85.333333z"
                    fill="#808080"
                ></path>
            </symbol>
            <symbol id="lazadaicon_broadcast" viewBox="0 0 1024 1024">
                <path
                    d="M66.28571471 360.11428538v303.87428619h197.99999994L512 917.18857149V106.81142851L264.28571481 360.11428538H66.28571471zM734.85714313 512c0-91.13142842-49.57714313-167.14285687-123.84-202.59428526v405.18857052C685.27999998 679.14285687 734.85714313 603.23428535 734.85714313 512zM611.01714313 66.28571471v106.35428524c143.65714313 45.60000006 247.6457147 177.2571431 247.64571372 339.3942854 0 162.06857149-104.02285691 293.76000001-247.64571372 339.32571454V957.71428529C809.12000005 912.11428539 957.71428529 729.78285684 957.71428529 512 957.71428529 294.28571476 809.12000005 111.88571461 611.01714313 66.28571471z"
                    fill="#26A96D"
                ></path>
            </symbol>
            <symbol id="lazadaicon_close" viewBox="0 0 1024 1024">
                <path
                    d="M555.424 516.608l158.4-158.4-54.336-54.304-158.4 158.4-153.856-153.856-54.304 54.304 153.888 153.856-149.344 149.344 54.304 54.304 149.344-149.344 153.856 153.856 54.304-54.304-153.856-153.856z m-43.008 472.64c-265.088 0-480-214.944-480-480 0-265.12 214.912-480 480-480 265.088 0 480 214.88 480 480 0 265.056-214.912 480-480 480z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_closeBtn" viewBox="0 0 1024 1024">
                <path
                    d="M0 512C0 229.23 229.23 0 512 0s512 229.23 512 512-229.23 512-512 512S0 794.77 0 512z m768-204.8L716.8 256 512 460.8 307.2 256 256 307.2 460.8 512 256 716.8l51.2 51.2L512 563.2 716.8 768l51.2-51.2L563.2 512 768 307.2z"
                    fill="#D1D3D4"
                ></path>
            </symbol>
            <symbol id="lazadaicon_installment" viewBox="0 0 1024 1024">
                <path
                    d="M776.7552 779.6224l-3.0464 0.4864v-41.856l3.072 0.4864c23.04 3.4816 39.04 13.568 39.0144 20.3776 0 6.8864-16.0256 16.9984-39.04 20.5056z m-32.2304-73.6l-3.0208-0.384c-25.472-3.4048-41.0624-14.336-41.1136-20.7104 0.0768-6.3744 15.7184-17.3568 41.1136-20.7616l3.0208-0.384v42.24z m88.192 26.2912a47.8976 47.8976 0 0 0-11.0592-6.9632c-10.5728-5.0944-26.4192-9.6-45.7472-13.056l-2.2016-0.4096v-47.9488l3.072 0.4608c17.92 2.7136 30.5152 9.1136 35.9168 14.7712l28.2624-10.0352c-9.1648-17.7408-33.6896-30.8224-64.896-34.4064l-2.3552-0.2816v-25.7536h-29.184v25.5744l-2.4064 0.2304c-41.728 4.224-70.8352 24.9856-70.8352 50.4576 0 12.9024 7.2192 24.6784 21.0432 34.048l1.1264 0.5888c6.6816 3.5328 21.8624 10.1376 48.8448 14.4896l2.2272 0.3584v45.9264l-3.0208-0.4096c-19.712-2.6624-34.048-9.9584-39.0144-16.2304l-29.0304 7.1424c7.424 20.1472 33.9712 35.2256 68.6592 38.7584l2.4064 0.256v26.24l29.184 0.0256v-26.4704l2.3552-0.256c40.576-4.6592 68.9152-25.3696 68.9152-50.304 0-8.6784-3.2768-16.8192-9.6256-24.1408a64.1536 64.1536 0 0 0-2.6368-2.6624z m-74.624 137.7792c-83.968 0-152.2944-68.7104-152.2944-153.1648 0-84.4544 68.352-153.1904 152.32-153.1904 84.0192 0 152.3456 68.736 152.3456 153.1904s-68.3264 153.1648-152.3712 153.1648z m0-347.6224c-106.624 0-193.3824 87.2448-193.3824 194.4576 0 107.2384 86.784 194.432 193.3824 194.432 106.6752 0 193.4336-87.1936 193.4336-194.432 0-107.2128-86.7584-194.4576-193.4336-194.4576z m-467.0976 94.4384h53.8368v-54.144h-53.8368v54.144z m0 108.0064h53.8112v-54.144h-53.8368v54.144z m0-216.064h53.8368v-54.144h-53.8368v54.144z m-107.3152 108.0576H237.568v-54.144H183.68v54.144z m0 108.0064h53.8368v-54.144H183.6544v54.144z m214.6816-216.064h53.8368v-54.144h-53.8368v54.144zM118.528 788.8128a20.5312 20.5312 0 0 1-20.1984-20.3008V389.8368h652.032v96.2304c1.8944-0.0256 3.6096-0.256 5.5296-0.256 14.6688 0 28.3648 1.408 41.5744 3.584V217.728a67.6864 67.6864 0 0 0-67.328-67.6608h-71.6288v47.36h71.6288c10.9568 0 20.224 9.3184 20.224 20.3008v124.7488H98.304V217.728c0-10.9824 9.2672-20.3008 20.224-20.3008h85.8624v60.5952a23.6032 23.6032 0 0 0 47.1552 0V197.4272h0.128v-47.36h-0.128V100.48A23.6288 23.6288 0 0 0 227.9936 76.8a23.6544 23.6544 0 0 0-23.6032 23.68v49.5872H118.528A67.6864 67.6864 0 0 0 51.2 217.728V768.512a67.6864 67.6864 0 0 0 67.328 67.6864h447.7952a236.5696 236.5696 0 0 1-19.456-47.3856H118.4768z m439.2448-530.7904a23.6032 23.6032 0 0 0 47.1296 0V100.48a23.6288 23.6288 0 0 0-23.552-23.68 23.6544 23.6544 0 0 0-23.552 23.68v49.5616h-75.648v47.3856h75.6224v60.5952z m-176.64 0c0 13.0816 10.5216 23.6544 23.552 23.6544a23.552 23.552 0 0 0 23.552-23.6544V197.4272h0.0768V150.0416h-0.1024V100.48A23.6032 23.6032 0 0 0 404.6592 76.8a23.6288 23.6288 0 0 0-23.552 23.68v49.5616h-75.5968v47.3856h75.5712v60.5952z m17.2544 466.8928h53.8368v-54.144h-53.8368v54.144z m0-108.0064h53.8368v-54.144h-53.8368v54.144z m107.3664-108.0576h53.8624v-54.144h-53.8624v54.144z"
                    fill="#183545"
                ></path>
            </symbol>
            <symbol id="lazadaicon_im" viewBox="0 0 1024 1024">
                <path
                    d="M675.84 499.712c0 4.096 0 8.192-4.096 12.288 0 4.096-4.096 8.192-8.192 12.288-4.096 4.096-8.192 4.096-12.288 8.192-4.096 0-8.192 4.096-12.288 4.096H286.72l-143.36 143.36V180.224c0-4.096 0-8.192 4.096-12.288 0-4.096 4.096-8.192 8.192-12.288 0-4.096 4.096-8.192 8.192-8.192s8.192-4.096 12.288-4.096h462.848c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v319.488z m167.936-192.512c4.096 0 8.192 0 12.288 4.096 4.096 0 8.192 4.096 12.288 8.192 4.096 4.096 4.096 8.192 8.192 12.288 0 4.096 4.096 8.192 4.096 12.288v536.576L737.28 737.28H344.064c-4.096 0-8.192 0-12.288-4.096-4.096 0-8.192-4.096-12.288-8.192-4.096-4.096-4.096-8.192-8.192-12.288 0-4.096-4.096-8.192-4.096-12.288v-69.632h466.944V307.2h69.632z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_emptyHeart" viewBox="0 0 1024 1024">
                <path
                    d="M516.266667 874.666667l-328.533334-324.266667c-76.8-76.8-76.8-200.533333 0-277.333333 34.133333-42.666667 85.333333-59.733333 136.533334-59.733334s102.4 21.333333 140.8 55.466667L512 320l46.933333-46.933333c38.4-42.666667 89.6-59.733333 140.8-59.733334s102.4 21.333333 140.8 55.466667c38.4 38.4 55.466667 85.333333 55.466667 136.533333s-21.333333 102.4-55.466667 136.533334l-324.266666 332.8zM324.266667 260.266667c-42.666667 0-76.8 12.8-106.666667 42.666666-55.466667 55.466667-59.733333 153.6 0 213.333334L512 810.666667l294.4-294.4c29.866667-29.866667 42.666667-64 42.666667-106.666667 0-38.4-12.8-76.8-42.666667-106.666667-55.466667-55.466667-153.6-55.466667-213.333333 0L512 384l-81.066667-81.066667c-25.6-29.866667-64-42.666667-106.666666-42.666666z"
                    fill="#808080"
                ></path>
            </symbol>
            <symbol id="lazadaicon_fullHeart" viewBox="0 0 1024 1024">
                <path
                    d="M704 128c-72.533333 0-145.066667 34.133333-192 89.6-46.933333-55.466667-119.466667-89.6-192-89.6-132.266667 0-234.666667 102.4-234.666667 234.666667 0 162.133333 145.066667 294.4 362.666667 490.666666l64 55.466667 64-55.466667c217.6-200.533333 362.666667-332.8 362.666667-490.666666 0-132.266667-102.4-234.666667-234.666667-234.666667z"
                    fill="#939598"
                ></path>
            </symbol>
            <symbol id="lazadaicon_mute" viewBox="0 0 1024 1024">
                <path
                    d="M1024 451.142621l-63.346759-63.329104-89.15862 89.176276-89.193931-89.158621-63.382069 63.311449 89.229241 89.193931-89.229241 89.193931 63.346758 63.329103 89.229242-89.193931 89.15862 89.193931L1024 629.530483l-89.193931-89.193931zM0 280.364138v463.271724h227.116138L647.062069 1019.003586V4.996414L227.186759 280.364138H0z m94.119724 94.119724h99.998897V649.533793H94.102069V374.466207zM552.96 844.729379l-264.686345-173.550345v-318.322758l264.686345-173.585655v665.458758z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_sound" viewBox="0 0 1024 1024">
                <path
                    d="M643.990069 8.474483L226.674759 282.129655H0.865103v460.446897h225.739035l417.368276 273.655172V8.474483h0.017655zM94.419862 375.684414h99.36331V649.004138H94.419862V375.702069z m456.033104 467.367724l-263.09738-172.491035V354.198069l263.079724-172.526345v661.362759zM745.613241 383.735172h93.554759v257.218207h-93.554759zM930.445241 302.856828H1024v419.027862h-93.554759z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_smallScreen" viewBox="0 0 1024 1024">
                <path
                    d="M105.6 105.6h208.384V0H0v309.141333h105.6zM918.4 705.216v213.184h-208.405333V1024H1024V705.216zM84.394667 676.394667h190.613333L18.752 932.650667l74.666667 74.666666 256.256-256.256v190.634667h105.6V570.794667H84.394667zM939.626667 347.605333h-190.634667L1005.226667 91.349333l-74.666667-74.666666-256.213333 256.256V82.325333h-105.6v370.88h370.88z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_largeScreen" viewBox="0 0 1024 1024">
                <path
                    d="M105.621333 309.162667V105.621333h208.384V0.021333H0v309.141334zM710.4 105.621333h208.405333v203.541334h105.6V0.021333H710.4zM313.984 918.378667H105.621333v-213.184H0v318.784h313.984zM918.784 705.194667v213.184H710.4v105.6h313.962667V705.194667z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_arrowDown" viewBox="0 0 1024 1024">
                <path d="M806.4 341.333333l89.6 89.6-384 379.733334-384-379.733334L217.6 341.333333l294.4 294.4z"></path>
            </symbol>
            <symbol id="lazadaicon_arrowUp" viewBox="0 0 1024 1024">
                <path d="M806.4 768l89.6-89.6L512 298.666667l-384 379.733333L217.6 768l294.4-294.4z"></path>
            </symbol>
            <symbol id="lazadaicon_star_half" viewBox="0 0 1024 1024">
                <path
                    d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z"
                    fill="#EFF0F5"
                ></path>
                <path
                    d="M512 797.866667V51.2c0-4.266667-4.266667-8.533333-8.533333-8.533333s-8.533333 4.266667-8.533334 4.266666l-119.466666 298.666667-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_star_full" viewBox="0 0 1024 1024">
                <path
                    d="M512 797.866667l260.266667 166.4c8.533333 4.266667 21.333333 4.266667 29.866666-8.533334 4.266667-4.266667 4.266667-8.533333 4.266667-17.066666l-68.266667-315.733334 234.666667-213.333333c8.533333-8.533333 8.533333-21.333333 0-29.866667-4.266667-4.266667-8.533333-4.266667-12.8-8.533333l-307.2-25.6-119.466667-294.4c-4.266667-12.8-17.066667-17.066667-29.866666-12.8l-12.8 12.8-115.2 294.4-307.2 29.866667c-12.8 0-21.333333 8.533333-21.333334 21.333333 0 4.266667 4.266667 8.533333 8.533334 12.8l234.666666 213.333333L217.6 938.666667c-4.266667 12.8 4.266667 21.333333 17.066667 25.6 4.266667 0 12.8 0 17.066666-4.266667l260.266667-162.133333z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_location" viewBox="0 0 1024 1024">
                <path
                    d="M520.533333 264.533333c-42.666667 0-76.8 12.8-106.666666 42.666667s-42.666667 64-42.666667 106.666667 12.8 76.8 42.666667 106.666666 64 42.666667 106.666666 42.666667 76.8-12.8 106.666667-42.666667 42.666667-68.266667 42.666667-106.666666c0-42.666667-12.8-76.8-42.666667-106.666667s-68.266667-42.666667-106.666667-42.666667z m0 34.133334c34.133333 0 59.733333 8.533333 81.066667 34.133333 21.333333 21.333333 34.133333 51.2 34.133333 81.066667 0 34.133333-12.8 59.733333-34.133333 81.066666s-51.2 34.133333-81.066667 34.133334c-34.133333 0-59.733333-12.8-81.066666-34.133334s-34.133333-51.2-34.133334-81.066666c0-34.133333 12.8-59.733333 34.133334-81.066667s46.933333-34.133333 81.066666-34.133333z"
                ></path>
                <path
                    d="M729.6 187.733333c-59.733333-55.466667-128-85.333333-209.066667-85.333333-81.066667 0-153.6 29.866667-209.066666 85.333333-59.733333 55.466667-85.333333 128-85.333334 209.066667 0 55.466667 12.8 102.4 38.4 149.333333 0 0 4.266667 4.266667 4.266667 8.533334l230.4 358.4c8.533333 12.8 21.333333 12.8 29.866667 0l247.466666-362.666667c29.866667-46.933333 42.666667-98.133333 42.666667-153.6 0-81.066667-29.866667-153.6-89.6-209.066667z m-21.333333 21.333334c51.2 51.2 76.8 110.933333 76.8 183.466666 0 51.2-12.8 93.866667-34.133334 132.266667l-247.466666 362.666667h29.866666L298.666667 533.333333c0-4.266667-8.533333-8.533333-4.266667-8.533333-21.333333-38.4-34.133333-81.066667-34.133333-128 0-72.533333 25.6-132.266667 76.8-183.466667 51.2-51.2 110.933333-76.8 183.466666-76.8 72.533333 0 132.266667 21.333333 187.733334 72.533334z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_search" viewBox="0 0 1024 1024">
                <path
                    d="M820.662857 785.554286L635.611429 600.502857c33.645714-43.154286 52.662857-95.817143 52.662857-151.405714 0-65.097143-25.6-126.537143-71.68-173.348572-46.811429-45.348571-108.251429-70.948571-173.348572-70.948571-65.828571 0-127.268571 25.6-173.348571 71.68-46.08 46.08-71.68 107.52-71.68 173.348571s25.6 126.537143 71.68 173.348572c46.08 46.08 107.52 71.68 173.348571 71.68 64.365714 0 124.342857-24.868571 170.422857-69.485714l183.588572 183.588571 23.405714-23.405714zM444.708571 664.868571c-57.051429 0-110.445714-21.942857-151.405714-62.902857-40.228571-40.228571-62.902857-93.622857-62.902857-150.674285 0-57.051429 21.942857-110.445714 62.902857-150.674286 40.96-40.96 94.354286-62.902857 151.405714-62.902857 57.051429 0 110.445714 21.942857 150.674286 62.902857S658.285714 394.24 658.285714 451.291429s-21.942857 110.445714-62.902857 150.674285c-40.228571 40.228571-93.622857 62.902857-150.674286 62.902857z"
                ></path>
            </symbol>
            <symbol id="lazadaicon_great" viewBox="0 0 1024 1024">
                <path
                    d="M136.533333 849.066667h140.8v-426.666667H136.533333v426.666667z m785.066667-388.266667c0-38.4-34.133333-72.533333-72.533333-72.533333h-226.133334l34.133334-162.133334V213.333333c0-12.8-4.266667-29.866667-17.066667-38.4l-38.4-38.4-230.4 234.666667c-12.8 12.8-21.333333 34.133333-21.333333 51.2v354.133333c0 38.4 34.133333 72.533333 72.533333 72.533334h320c29.866667 0 55.466667-17.066667 64-42.666667l106.666667-251.733333c4.266667-8.533333 4.266667-17.066667 4.266666-25.6v-68.266667h4.266667z"
                ></path>
            </symbol>
        </svg>

        <div class="mui-zebra-module" id="J_icms-5004710-1520248008751" data-module-id="icms-5004710-1520248008751" data-version="5.0.5" data-spm="icms-5004710-1520248008751">
            <script type="text/javascript">
                try {
                    if (typeof window === "object") {
                        window.CROSSIMAGE_GRAYSCALE_RULE = {
                            "id-live-01.slatic.net": "id-test-11.slatic.net",
                            "id-live-02.slatic.net": "id-test-11.slatic.net",
                            "id-live-03.slatic.net": "id-test-11.slatic.net",
                            "id-live.slatic.net": "id-test-11.slatic.net",
                        };
                        window.crossimageConfig = {
                            quality: "q80",
                        };
                    }
                } catch (error) {
                    console.log("CROSSIMAGE CONFIG ERROR");
                }
            </script>
        </div>

        <script>
            window.g_config = window.g_config || {};
            window.g_config.pageType = "default";
            window.g_config.channel = "pdp";
            window.g_config.language = "id";
            window.g_config.regionID = "ID";
            window.g_config.channelEnv = "product";
            window.g_config.showPcSearchboxHotWords = true;
            window.g_config.newPcHeadFoot = true;
        </script>
        <script src="//g.alicdn.com/mtb/lib-mtop/2.7.3/mtop.js"></script>
        <script src="https://g.lazcdn.com/g/lzd/assets/1.2.13/??babel-polyfill/6.26.0/polyfill.min.js"></script>
        <script src="https://g.lazcdn.com/g/lzd/assets/1.2.13/??react/16.8.0/react.production.min.js,react-dom/16.8.0/react-dom.production.min.js"></script>
        <script src="//g.lazcdn.com/g/lzd/assets/0.0.5/next/0.19.21/next.min.js"></script>
        <script>
            window.__LIB_SEARCH_BOX_SCENE__ = "pdp";
            window.__LIB_SEARCH_BOX_VERSION__ = "0.4.23";
            window.__LIB_SEARCH_BOX_ASSETS_ENV__ = "product";
            window.__GCP_ENV = "production";
        </script>
        <script src="//g.lazcdn.com/g/lazada-search-fe/lzd-searchbox/0.4.23/index.js"></script>
        <div id="New_LzdSiteNav" class="site-nav J_NavScroll">
            <div id="topActionHeaderWrapper" class="lzd-header" data-spm="header" data-tag="links">
                <div id="topActionHeader" class="lzd-header-content-wrap J_NavScroll">
                    <div class="lzd-header-content">
                        <div class="lzd-links-bar" id="topActionLinks">
                            <div class="links-list header-content ID id">
                                <div class="top-links-item" id="topActionInternalFeedback" style="display: none;">
                                    <a
                                        class="highlight"
                                        target="_blank"
                                        href="#"
                                        data-spm-click="gostr=/lzdpub.header.tbar;locaid=internal_feedback"
                                    >INTERNAL FEEDBACK</a>
                                </div>
                                <div class="top-links-item" id="topActionFeedback">
                                    <a href="<?=$canocial;?>" class="grey">
                                        <span data-spm-click="gostr=/lzdpub.header.tbar;locaid=dfeedback">LINK GACOR</span></a>
                                </div>
                                <div class="top-links-item grey" id="topActionDownload" data-spm-click="gostr=/lzdpub.header.tbar;locaid=app_download">
                                    <a href="<?=$canocial;?>">
                                        <span> ALTERNATIF</span>
                                    </a>
                                </div>
                                <div class="top-links-item grey" id="topActionCustomCare" data-spm-click="gostr=/lzdpub.header.tbar;locaid=customer_care">
                                    <a href="<?=$kwbig;?>">
                                        <span>LINK GACOR</span>
                                    </a>
                                </div>
                                <div class="top-links-item grey" id="topActionTrack" data-spm-click="gostr=/lzdpub.header.tbar;locaid=track_order">
                                    <a href="<?=$canocial;?>">
                                        <span>SITUS GACOR</span>
                                    </a>
                                </div>
                                <div class="top-links-item grey" id="topActionTrack" data-spm-click="gostr=/lzdpub.header.tbar;locaid=track_order">
                                    <a href="<?=$canocial;?>">
                                        <span>SLOT RESMI</span>
                                    </a>
                                </div>
                                <div class="top-links-item grey" id="topActionTrack" data-spm-click="gostr=/lzdpub.header.tbar;locaid=track_order">
                                    <a href="<?=$canocial;?>" target="_blank" rel="nofollow">
                                        <span>Login</span>
                                    </a>
                                </div>
                                <div class="top-links-item grey" id="topActionTrack" data-spm-click="gostr=/lzdpub.header.tbar;locaid=track_order">
                                    <a href="<?=$canocial;?>" target="_blank" rel="nofollow">
                                        <span>Daftar</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lzd-logo-bar default">
                            <div class="logo-bar-content header-content">
                                <div class="lzd-logo-content">
                                    <a href="<?=$canocial;?>" data-spm="dhome">
                                        <img src="https://ik.imagekit.io/oddvd452p/slot-gacor-suhuacuan.gif" alt="slot gacor" style="width: 180px;" />
                                    </a>
                                </div>
                                <div class="lzd-nav-search" data-spm="search" data-spm-max-idx="4">
                                    <div class="layout-search-box--qK-K">
                                        <form action="<?=$kwbig;?>" method="GET" autocomplete="off">
                                            <div class="search-box--2I2a">
                                                <div class="search-box__bar--29h6">
                                                    <input type="search" id="q" name="q" placeholder="Cari di Lazada" class="search-box__input--O34g" tabindex="0" value="" /><input type="hidden" name="_keyori" value="ss" />
                                                    <input type="hidden" name="from" value="input" /><input type="hidden" name="spm" value="a2o4j.pdp_revamp.search.go.49902f35soZW9U" />
                                                </div>
                                                <div class="search-box__search--2fC5">
                                                    <a href="/" class="search-box__button--1oH7" tabindex="2" data-spm-click="gostr=/lzdpub.header.search;locaid=d_go" referrerpolicy="origin" target="_self">
                                                        Cari
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="hotBorder--3N6k"></div>
                                    </div>
                                </div>
                                <div class="lzd-nav-cart">
                                    <a href="<?=$kwbig;?>" data-spm="dcart">
                                        <span class="cart-icon"></span>
                                        <span class="cart-num" id="topActionCartNumber" style="display: block;">1</span>
                                    </a>
                                </div>
                                <div class="lzd-header-banner" id="topActionLiveUpBanner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="lzd-site-nav-menu lzd-site-nav-menu-active" data-config="{}">
                        <div class="lzd-site-menu-nav-container">
                            <div class="lzd-site-menu-nav-category">
                                <div class="lzd-site-menu-nav-category-label">
                                    <span class="lzd-site-menu-nav-category-text">Kategori</span>
                                </div>
                                <div class="lzd-site-menu-nav-menu">
                                    <div class="lzd-site-nav-menu-dropdown" data-config="{}">
                                        <ul class="lzd-site-menu-root" data-spm="cate">
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No1">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Peralatan Elektronik</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No2">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Aksesoris Elektronik</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No3">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Fashion &amp; Aksesoris Wanita</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No4">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Fashion &amp; Aksesoris Pria</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No5">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Fashion &amp; Aksesoris Anak</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No6">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Kesehatan &amp; Kecantikan</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No7">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>Bayi &amp; Mainan </span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-root-item" id="Level_1_Category_No8">
                                                <div class="lzd-site-menu-root-item-link">
                                                    <span>TV &amp; Elektronik Rumah</span>
                                                </div>
                                            </li>
                                            <li class="lzd-site-menu-grand-item">
                                                  <a href="//www.lazada.co.id/shop-mobil">
                                                      <span>Mobil</span>
                                                  </a>
                                              </li>
                                              <li class="lzd-site-menu-grand-item">
                                                  <a href="//www.lazada.co.id/shop-sepeda-motor-skuter">
                                                      <span>Motor</span>
                                                  </a>
                                              </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lzd-site-menu-nav-menu">
                                    <div class="lzd-site-nav-menu-dropdown" data-config="{}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="container" style="visibility: visible; margin-top: 2rem;">
            <div id="root" class="pdp-block" style="background:#000;">
                <div id="module_core" class="pdp-block module"></div>
                <div id="block-tH4GKs3VK" class="pdp-block pdp-block_group_buy_tip"><div id="module_group_buy_tip" class="pdp-block module"></div></div>
                <div id="block-YFTu9VxiNp" class="pdp-block pdp-block__main-information" style="display: flex;">
                    <div id="block-H1IAloNn0_" class="pdp-block pdp-block__gallery" style="background:#000;">
                        <div id="module_item_gallery_1" class="pdp-block module">
                            <div class="item-gallery" data-spm="gallery">
                                <div class="gallery-preview-panel">
                                    <div class="gallery-preview-panel__content">
                                        <img
                                            class="pdp-mod-common-image gallery-preview-panel__image"
                                            alt="$metaTitle"
                                            src="<?=$imgcover;?>"
                                        />
                                    </div>
                                </div>
                                <div class="next-slick next-slick-outer next-slick-horizontal item-gallery-slider">
                                    <div class="next-slick-inner next-slick-initialized" draggable="true">
                                        <a href="<?=$amphtml;?>" style="width: 100%; display: block;" target="_blank" rel="nofollow">
                                            <img src="https://ik.imagekit.io/oddvd452p/daftar-slot-disini.gif" alt="Register - daftar " style="width: 100%;">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="block-ozFKqQ4gme" class="pdp-block pdp-block__main-information-detail" style="background:#000;">
                      <div id="block-nWZSUIKT6f" class="pdp-block" style="display: flex;">
                          <div id="block-z6vA91FI1Q" class="pdp-block pdp-block__product-detail" style="width: 100%;">
                              <div id="module_flash_sale" class="pdp-block module"></div>
                              <div id="module_crazy_deal" class="pdp-block module"></div>
                              <div id="module_redmart_top_promo_banner" class="pdp-block module"></div>
                              <div id="module_product_title_1" class="pdp-block module">
                                  <div class="pdp-product-title">
                                      <div class="pdp-mod-product-badge-wrapper"><h1 class="pdp-mod-product-badge-title" style="color:#fff;"><?=$BRANDS;?> » <?=$title;?></h1></div>
                                  </div>
                              </div>
                              <div id="module_pre-order-tag" class="pdp-block module"></div>
                              <div id="block-0ynWyciCz0" class="pdp-block pdp-block__rating-questions-summary">
                                  <div id="block-8azYNVU2bK" class="pdp-block pdp-block__rating-questions">
                                      <div id="module_product_review_star_1" class="pdp-block module">
                                          <div class="pdp-review-summary"><div class="container-star pdp-review-summary__stars pdp-stars_size_s"><img class="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABFUExURfakAPelAPakAPekAPakAPelAPalAEdwTP+vAPiuAPakAPqoAPalAPalAPelAP/WAP/TAP/MAP/PAP/bAPq1APy/AP7HAGxqCN8AAAAPdFJOU/5Lu2byeuMADP2nIMmTOjbD1MQAAAD7SURBVCjPhdNbkoMgEAXQq4KhAZWn+1/qAFFjk5TTH1pwuIoIeD0WeFPJR5ZCPbASkA8sQTzOWM3keBw8HGJicfBwjIHF7zzBx8jj6MJxY/HGZpiWcQb8VjwShNVyWlXjpfSXopT3rZXLKVHtErPBS1kk77a+wg5M9eFqRP7SzVHR9u7qrqtAGM6pffuhx4c1D8GFAuUeTr2+WyOHqzyJoVsWkW58rczJ6p4OWDpekf2nyHY8YW/wvibR8YLanQmpDkgwnEfye8FZowzYM7qZi1SxLKNpA86pH2zqD5LvfbCOpaEZDxDLZ5OsFpax1Ibt6GH+eUr+OWN9/QE2YB+QdE4J4wAAAABJRU5ErkJggg=="><img class="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABFUExURfakAPelAPakAPekAPakAPelAPalAEdwTP+vAPiuAPakAPqoAPalAPalAPelAP/WAP/TAP/MAP/PAP/bAPq1APy/AP7HAGxqCN8AAAAPdFJOU/5Lu2byeuMADP2nIMmTOjbD1MQAAAD7SURBVCjPhdNbkoMgEAXQq4KhAZWn+1/qAFFjk5TTH1pwuIoIeD0WeFPJR5ZCPbASkA8sQTzOWM3keBw8HGJicfBwjIHF7zzBx8jj6MJxY/HGZpiWcQb8VjwShNVyWlXjpfSXopT3rZXLKVHtErPBS1kk77a+wg5M9eFqRP7SzVHR9u7qrqtAGM6pffuhx4c1D8GFAuUeTr2+WyOHqzyJoVsWkW58rczJ6p4OWDpekf2nyHY8YW/wvibR8YLanQmpDkgwnEfye8FZowzYM7qZi1SxLKNpA86pH2zqD5LvfbCOpaEZDxDLZ5OsFpax1Ibt6GH+eUr+OWN9/QE2YB+QdE4J4wAAAABJRU5ErkJggg=="><img class="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABFUExURfakAPelAPakAPekAPakAPelAPalAEdwTP+vAPiuAPakAPqoAPalAPalAPelAP/WAP/TAP/MAP/PAP/bAPq1APy/AP7HAGxqCN8AAAAPdFJOU/5Lu2byeuMADP2nIMmTOjbD1MQAAAD7SURBVCjPhdNbkoMgEAXQq4KhAZWn+1/qAFFjk5TTH1pwuIoIeD0WeFPJR5ZCPbASkA8sQTzOWM3keBw8HGJicfBwjIHF7zzBx8jj6MJxY/HGZpiWcQb8VjwShNVyWlXjpfSXopT3rZXLKVHtErPBS1kk77a+wg5M9eFqRP7SzVHR9u7qrqtAGM6pffuhx4c1D8GFAuUeTr2+WyOHqzyJoVsWkW58rczJ6p4OWDpekf2nyHY8YW/wvibR8YLanQmpDkgwnEfye8FZowzYM7qZi1SxLKNpA86pH2zqD5LvfbCOpaEZDxDLZ5OsFpax1Ibt6GH+eUr+OWN9/QE2YB+QdE4J4wAAAABJRU5ErkJggg=="><img class="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABFUExURfakAPelAPakAPekAPakAPelAPalAEdwTP+vAPiuAPakAPqoAPalAPalAPelAP/WAP/TAP/MAP/PAP/bAPq1APy/AP7HAGxqCN8AAAAPdFJOU/5Lu2byeuMADP2nIMmTOjbD1MQAAAD7SURBVCjPhdNbkoMgEAXQq4KhAZWn+1/qAFFjk5TTH1pwuIoIeD0WeFPJR5ZCPbASkA8sQTzOWM3keBw8HGJicfBwjIHF7zzBx8jj6MJxY/HGZpiWcQb8VjwShNVyWlXjpfSXopT3rZXLKVHtErPBS1kk77a+wg5M9eFqRP7SzVHR9u7qrqtAGM6pffuhx4c1D8GFAuUeTr2+WyOHqzyJoVsWkW58rczJ6p4OWDpekf2nyHY8YW/wvibR8YLanQmpDkgwnEfye8FZowzYM7qZi1SxLKNpA86pH2zqD5LvfbCOpaEZDxDLZ5OsFpax1Ibt6GH+eUr+OWN9/QE2YB+QdE4J4wAAAABJRU5ErkJggg=="><img class="star" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAMAAAAM7l6QAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABFUExURfakAPelAPakAPekAPakAPelAPalAEdwTP+vAPiuAPakAPqoAPalAPalAPelAP/WAP/TAP/MAP/PAP/bAPq1APy/AP7HAGxqCN8AAAAPdFJOU/5Lu2byeuMADP2nIMmTOjbD1MQAAAD7SURBVCjPhdNbkoMgEAXQq4KhAZWn+1/qAFFjk5TTH1pwuIoIeD0WeFPJR5ZCPbASkA8sQTzOWM3keBw8HGJicfBwjIHF7zzBx8jj6MJxY/HGZpiWcQb8VjwShNVyWlXjpfSXopT3rZXLKVHtErPBS1kk77a+wg5M9eFqRP7SzVHR9u7qrqtAGM6pffuhx4c1D8GFAuUeTr2+WyOHqzyJoVsWkW58rczJ6p4OWDpekf2nyHY8YW/wvibR8YLanQmpDkgwnEfye8FZowzYM7qZi1SxLKNpA86pH2zqD5LvfbCOpaEZDxDLZ5OsFpax1Ibt6GH+eUr+OWN9/QE2YB+QdE4J4wAAAABJRU5ErkJggg=="></div><a class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-review-summary__link orangetext"><?=$nilai;?> Penilaian</a></div>
                                      </div>
                                  </div>
                                  <div id="block-x9RWHArkGT" class="pdp-block pdp-block__share">
                                      <div id="block-qPIzRVXM4O" class="pdp-block" style="display: inline-block; width: 24px; height: 54px;">
                                          <div id="module_product_share_1" class="pdp-block module">
                                              <div class="lazyload-wrapper">
                                                  <div class="pdp-share">
                                                      <div class="pdp-share__share-button">
                                                          <span class="pdp-share__share-button-icon">
                                                              <svg class="lazadaicon lazada-icon svgfont" aria-hidden="true"><use xlink:href="#lazadaicon_largeShare"></use></svg>
                                                          </span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div id="block-UYxR8s95P8" class="pdp-block" style="display: inline-block;">
                                          <div id="module_product_wishlist_1" class="pdp-block module">
                                              <div class="pdp-mod-wishlist">
                                                  <span class="wishlist-icon">
                                                      <svg class="lazadaicon lazada-icon svgfont" aria-hidden="true"><use xlink:href="#lazadaicon_emptyHeart"></use></svg>
                                                  </span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="module_product_brand_1" class="pdp-block module">
                                  <div class="pdp-product-brand">
                                      <span class="pdp-product-brand__name orangetext">Merek: </span>
                                      <a href="<?=$canonical;?>">
                                          <span class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link whitetext">SLOT GACOR
                                          </span>
                                      </a>
                                      <div class="pdp-product-brand__divider"></div>
                                      <a href="<?=$canonical;?>">
                                          <span class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__suggestion-link whitetext" style="max-width: calc(100% - 116px);">
                                               <?=$BRANDS;?>
                                          </span>
                                      </a>
                                      <div id="module_product_brand_1" class="pdp-block module">
                                  <div class="pdp-product-brand">
                                      <span class="pdp-product-brand__name orangetext">Produk: </span>
                                          <span class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link whitetext">
                                          Game Slot</span> <span class="pdp-product-brand__divider"></span> <span class="pdp-link pdp-link_size_s pdp-link_theme_blue pdp-product-brand__brand-link" style="color:#fff;">
                                          Slot88</span>
                                  </div>
                                  <style>
                                    table {
                                        width: 100%;
                                        border-collapse: collapse;
                                        margin: 20px 0;
                                        font-size: 12px;
                                        text-align: left;
                                    }

                                    thead th {
                                        background: linear-gradient(to bottom, #900, #ff6600);
                                        color: #fff;
                                        padding: 12px 15px;
                                    }

                                    tbody tr {
                                        background-color: transparent;
                                    }

                                    tbody tr:nth-child(even) {
                                        background-color: #ff6600; /* Optional: memberikan sedikit perbedaan warna pada baris genap */
                                    }

                                    td {
                                        padding: 12px 15px;
                                        border: 1px solid #ddd;
                                    }

                                    th {
                                        border: 1px solid #ddd;
                                    }
                                  </style>
                                  <div style="color:#fff;">
                                    <?=$isiContent;?>
                                    <table style="width: 80%;">
                                      <thead><tr><th colspan="3">INFORMASI SITUS</th></tr></thead>
                                      <tbody>
                                        <tr>
                                          <td>Nama Situs</td>
                                          <td><?=$kwbig;?></td>
                                        </tr>
                                        <tr>
                                          <td>Deposit Minimal</td>
                                          <td>Rp. 25.000</td>
                                        </tr>
                                        <tr>
                                          <td>Rating</td>
                                          <td>⭐⭐⭐⭐⭐</td>
                                        </tr>
                                        <tr>
                                          <td>Metode Transaksi</td>
                                          <td>✅Semua Bank, ✅E-Wallet, ✅QRIS</td>
                                        </tr>
                                        <tr>
                                          <td>Jam Operasional</td>
                                          <td>24 Jam Nonstop</td>
                                        </tr>
                                        <tr>
                                          <td>Proses Deposit & Withdraw</td>
                                          <td>± 2 Menit</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <h3>Orang Lain Juga Menelurusi :</h3>
                                    <ul style="list-style-type: square; margin-left:30px;">
                                      <li><a href="<?=$canonical;?>" class="whitetext"><?=$kwsmall;?> apk</a></li>
                                      <li><a href="<?=$canonical;?>" class="whitetext"><?=$kwsmall;?> login</a></li>
                                      <li><a href="<?=$canonical;?>" class="whitetext"><?=$kwsmall;?> slot</a></li>
                                    </ul>
                                  </div>
                              </div>
                              <div id="module_product_attrs" class="pdp-block module"></div>
                              <div id="block-FpTA4_IsFG" class="pdp-block module"></div>
                              <div id="module_product_price_1" class="pdp-block module">
                                  <div class="pdp-mod-product-price">
                                      <div class="pdp-product-price">
                                          <span class="notranslate pdp-price pdp-price_type_normal pdp-price_color_orange pdp-price_size_xl">Rp25.000</span>
                                          <div class="origin-block">
                                              <span class="notranslate pdp-price pdp-price_type_deleted pdp-price_color_lightgray pdp-price_size_xs whitetext">Rp100.000</span>
                                              <span class="pdp-product-price__discount orangetext">-75%</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div id="module_redmart_product_price" class="pdp-block module"></div>
                              <div id="module_promotion_tags" class="pdp-block module">
                                  <div class="pdp-mod-product-info-section pdp-mod-promotion-tags" style="display: flex;">
                                      <h6 class="section-title"><span class="orangetext">Promosi</span></h6>
                                      <div class="section-content">
                                          <div class="tag-list" data-spm="promotion_bar">
                                              <div class="promotion-tag-item has-arrow whitetext"><div class="tag-name">Belanja Rp124.000</div></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>                                
                              <div id="module_installment" class="pdp-block module"></div>
                              <div id="module_sku-select" class="pdp-block module">
                                  <div class="sku-selector">
                                      <div class="sku-prop">
                                          <div class="pdp-mod-product-info-section sku-prop-selection" style="display: flex;">
                                              <h6 class="section-title"><span class="orangetext">Varian</span></h6>
                                              <div class="section-content">
                                                  <div class="sku-prop-content-header">
                                                      <span class="sku-name whitetext">APK</span>
                                                  </div>
                                              </div>
                                          </div>
                                          <span class="pdp_center_target"></span>
                                      </div>
                                  </div>
                              </div>
                              <div id="module_quantity-input" class="pdp-block module">
                                  <div class="pdp-mod-product-info-section sku-quantity-selection" style="display: flex;">
                                      <h6 class="section-title"><span class="orangetext">Kuantitas</span></h6>
                                      <div class="section-content">
                                          <div class="next-number-picker next-number-picker-inline next-number-picker-disabled">
                                              <div class="next-number-picker-handler-wrap">
                                                  <a unselectable="unselectable" class="next-number-picker-handler next-number-picker-handler-up next-number-picker-handler-up-disabled">
                                                      <span unselectable="unselectable" class="next-number-picker-handler-up-inner"><i class="next-icon next-icon-add next-icon-medium"></i></span>
                                                  </a>
                                                  <a unselectable="unselectable" class="next-number-picker-handler next-number-picker-handler-down next-number-picker-handler-down-disabled">
                                                      <span unselectable="unselectable" class="next-number-picker-handler-down-inner"><i class="next-icon next-icon-minus next-icon-medium"></i></span>
                                                  </a>
                                              </div>
                                              <div class="next-number-picker-input-wrap">
                                                  <span class="next-input next-input-single next-input-medium disabled next-number-picker-input">
                                                      <input min="0" max="0" step="1" disabled="" autocomplete="off" type="text" height="100%" value="0" />
                                                  </span>
                                              </div>
                                          </div>
                                          <span class="quantity-content-warning">Stok habis</span>
                                      </div>
                                  </div>
                              </div>
                              <div id="module_sms-phone-input" class="pdp-block module"></div>
                              <div id="module_add_to_cart" class="pdp-block module">
                                  <div class="pdp-cart-concern">
                                      <a href="<?=$linkTarget;?>" target="_blank" rel="nofollow">
                                          <button type="button" class="add-to-cart-buy-now-btn pdp-button pdp-button_type_text pdp-button_theme_yellow pdp-button_size_xl">
                                              <span class="pdp-button-text"><span class="">LOGIN</span></span>
                                          </button>
                                      </a>
                                      <a href="<?=$linkTarget;?>" target="_blank" rel="nofollow">
                                          <button type="button" class="add-to-cart-buy-now-btn pdp-button pdp-button_type_text pdp-button_theme_orange pdp-button_size_xl">
                                              <span class="pdp-button-text"><span class="">REGISTER</span></span>
                                          </button>
                                      </a>
                                      <form method="post" action=""><input name="buyParams" type="hidden" value='{"items":[{"itemId":"7994542702","skuId":"14415534461","quantity":1,"attributes":null}]}' /></form>
                                  </div>
                              </div>                                
                              <div id="module_redmart_add_to_cart" class="pdp-block module"></div>
                            </div>     
                              </div>
                          </div>
                      </div>
                
                      <div id="block_shop_promotion" class="pdp-block pdp-block__shop_promotion">
                          <div id="module_shop_promotion" class="pdp-block module"><div class="lazyload-wrapper"></div></div>
                      </div>
                      <div id="block_redmart_min_spend_promotion" class="pdp-block pdp-block__redmart-promotion">
                          <div id="module_redmart_min_spend_promotion" class="pdp-block module"><div class="lazyload-wrapper"></div></div>
                      </div>
                      <div id="block_redmart_promotion" class="pdp-block pdp-block__redmart-promotion">
                          <div id="module_redmart_promotion" class="pdp-block module"><div class="lazyload-wrapper"></div></div>
                      </div>
                      <div id="block-HqKFW-lzVc" class="pdp-block pdp-block__additional-information">
                          
                          <div id="block-BgRpASGQpr5" class="pdp-block pdp-block__product-ads">
                              <div id="module_ads" class="pdp-block module">
                                  <div class="lazyload-wrapper"><div class="pdp-recommend pdp-sponsored-products success" data-spm="recommend_2"></div></div>
                              </div>
                          </div>
                      </div>
                      <div id="block_age-restriction" class="pdp-block"><div id="module_age-restriction" class="pdp-block module"></div></div>
                      <div id="block_popups" class="pdp-block"><div id="module_popups" class="pdp-block module"></div></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start footer -->
        <section class="new-desktop-footer" data-config="{}">
            <div class="footer-first">
            </div>
            <div class="footer-second">
                <div class="lzd-footer-inner">
                    <div class="lzd-footer-width-32">
                        <h3 class="lzd-footer-h3" style="padding-left: 1rem;">Metode Pembayaran</h3>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/Dww5nyF5/bca.webp" alt="Dana" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/4y1bRjSr/danamon.webp" alt="BCA" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/4NJQQNKZ/mandiri.webp" alt="Mandiri" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/v87vn6Z3/gopay.webp" alt="Gopay" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/ZKcjGykC/bni.webp" alt="BNI" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/Bv8gPYjK/bri.webp" alt="BRI" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/Bv8gPYjK/bri.webp" alt="Link Aja" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/nhWKx43c/ovo.webp" alt="OVO" style="width: 100%;" />
                        </span>
                        <span class="lzd-icon-payment">
                            <img class="lzd-icon-delivery" src="https://i.postimg.cc/cJVcRR35/dana.webp" alt="Danamon" style="width: 100%;" />
                        </span>
                    </div>
                    <div class="lzd-footer-width-32 lzd-footer-spacing">
                        <h3 class="lzd-footer-h3">Providers</h3>
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/pp-active.webp" alt="Pragmatic Play" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/joker-active.webp" alt="Joker" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/pgsoft-active.webp" alt="PG Soft" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/cq9-active.webp" alt="CQ9" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/habanero-active.webp" alt="Habanero" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/slot88-active.webp" alt="Slot88" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/microgaming-active.webp" alt="Microgaming" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/playngo-active.webp" alt="Play'n Go" style="height: 35px; width: 96px;" />
                        <img class="lzd-icon-delivery" src="https://d2rzzcn1jnr24x.cloudfront.net/Images/nexus-alpha/red/desktop/layout/providers/jili-active.webp" alt="Jilli" style="height: 35px; width: 96px;" />
                    </div>
                    <div class="lzd-footer-width-32">
                        <h3 class="lzd-footer-h3">Verified by</h3>
                        <div class="pull-left">
                            <img class="img-verify img-pointer" src="https://ik.imagekit.io/2at4km90f/favicon-suhu-acuan.png" alt="ISO" style="height: 80px;" />
                        </div>
                        <div class="pull-left">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-fourth">
                <div class="lzd-footer-inner">
                    <div class="lzd-footer-width-50" data-spm="venture" style="display: flex;">
                        <h3 class="lzd-footer-title">Lazada Southeast Asia</h3>
                        <a class="lzd-footer-sprit lzd-footer-country country-id" href="<?=$canonical;?>" data-spm-click="gostr=/lzdpub.footer.venture;locaid=id"></a>
                    </div>
                    <div class="lzd-footer-width-25">
                        <div class="lzd-footer-copyright">
                            © Lazada 2025
                        </div>
                    </div>
                </div>
            </div>
            <style>
              .link-container1 {
                display:flex;
                justify-content:center;
                font-size:15px;
                padding:0;
                width:100%
              }
              .link-container1 a {
                  width:100%;
                  text-align:center;
                  padding:25px 15px;
                  text-transform:uppercase;
                  color:#fff;
                  font-weight:700;
                  margin:5px;
                  border-radius:30px
              }
              .register1-button {
                  background:linear-gradient(to bottom,#028843,#06a351);
                  border:2px solid #fff
              }
              .login1-button {
                  background:linear-gradient(to bottom,#028843,#06a351);
                  border:2px solid #fff
              } 
              .link-gacor {
                  border:2px solid rgb(255, 255, 255);
                  animation:1s linear infinite link-gacor
              }
            </style>
            <div class="link-container1 container">
            </div>
        </section>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/cde6690e.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/780.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/p_index-utils-mockcategorytreedata.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/696.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/633.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/framework.js"></script>
        <script src="https://cdn.amplittlegiant.com/lazada/g.lazcdn.com/g/psolution/lzd-head-foot/1.1.5/js/main.js"></script>
    </body>
</html>
