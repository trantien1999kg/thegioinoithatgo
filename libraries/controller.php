<?php
	include_once _source."defaults.php";
	// check url
  


	$func->checkURL();

	$func->checkUrlRedirect();

	// counter
	/*
	$online = $statistic->statusOnline();

	$counter = $statistic->getCounter();
	
	*/

	 /* Watermark */

    $wtmNews =$db->rawQueryOne("select hienthi, photo_$lang as photo,options from #_bannerqc where type=? limit 0,1",array('watermark'));

	/* Router */
	
    $router->setBasePath($config['website']['url']);

    $router->map('GET',array('i-web/','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
	$router->map('GET',array('i-web','i-web'), function(){
		global $func, $config;
		$func->redirect($config['website']['url']."i-web/index.html");
		exit;
	});
    $router->map('GET|POST', '', 'index', 'home');
    $router->map('GET|POST', 'index.php', 'index', 'index');
    $router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
    $router->map('GET|POST', 'carts.js', 'carts', 'carts');
    $router->map('GET|POST', 'users.js', 'users', 'users');
    $router->map('GET|POST', '[a:com]', '', '');
    // $router->map('GET|POST', '[a:com]/[a:lang]/', '', 'lang');
    $router->map('GET|POST', '[a:com]/[a:act]', '', '');
    $router->map('GET|POST', '[a:com]/[a:catalogy]/[a:act]', '', '');
	$router->map('GET|POST', '[a:com]/[a:list]/[a:act]', '', '');
	$router->map('GET|POST', '[a:com]/[a:list]/[a:cat]/[a:act]', '', '');

    $router->map('GET', _thumbs.'/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func;
        $func->createThumb($w,$h,$z,$src,null,_thumbs);
    },'thumb');

    $router->map('GET', _watermark.'/news/[i:w]x[i:h]x[i:z]/[**:src]', function($w,$h,$z,$src){
        global $func, $wtmNews;
        $func->createThumb($w,$h,$z,$src,$wtmNews,"news");
    },'watermark');
	
    $match = $router->match();

	if(is_array($match))
	{
		if(is_callable($match['target']))
		{
			call_user_func_array($match['target'], $match['params']); 
		}
		else
		{
			$com = (isset($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
			$list = (isset($match['params']['list'])) ? htmlspecialchars($match['params']['list']) : htmlspecialchars($match['target']);
			$cat = (isset($match['params']['cat'])) ? htmlspecialchars($match['params']['cat']) : htmlspecialchars($match['target']);
			$act = (isset($match['params']['act'])) ? htmlspecialchars($match['params']['act']) : htmlspecialchars($match['target']);
			$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 1;

		}
	}
	else
	{
		header('HTTP/1.0 404 Not Found', true, 404);
		$template = "error/404";
	}

	// rows page

	

	$itemPage=$deviceType!='phone' ? 8 : 12;

	/* SEO Lang */
    $seolang = "vi";
	
    
	$attr_com=array(

		array("tbl"=>"info","field"=>"id","source"=>"info","com"=>"gioi-thieu","type"=>"gioi-thieu"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet_cat","field"=>"idc","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"baiviet_item","field"=>"idi","source"=>"news","com"=>"san-pham","type"=>"san-pham"),

		array("tbl"=>"photo","field"=>"id","source"=>"combo","com"=>"feedback","type"=>"feedback"),
		
		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"tin-tuc","type"=>"tin-tuc"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"bao-gia","type"=>"bao-gia"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"bao-gia","type"=>"bao-gia"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"baiviet_list","field"=>"idl","source"=>"news","com"=>"dich-vu","type"=>"dich-vu"),

		array("tbl"=>"baiviet","field"=>"id","source"=>"news","com"=>"chinh-sach","type"=>"chinh-sach"),

		array("tbl"=>"contact","field"=>"id","source"=>"contact","com"=>"lien-he","type"=>"lien-he")

	);
	
	
	if(isset($com) & $com != "" & $com != "index" & !in_array($com,$config['product-type'])){
		foreach($attr_com as $key => $val){
			if(isset($com) && $val['tbl']!='info' && $val['tbl']!='contact' && $com == $val['com']){
				if($act != ""){
					$row = $db->rawQueryOne("select id from #_".$val['tbl']." where hienthi=1 and tenkhongdau_$lang='".$act."' and type='".$val['type']."'");
					if(!empty($row)){
						$_GET[$val['field']]=$row['id'];
					}
				}
			}
		}
	}

	switch($com){

		case 'lien-he':

			$title_seo = _contact;

			$type="lien-he";

			$seo->setSeo('type','object');

			$source = "contact";

			$template = "contacts/contact";

			break;

		case 'gioi-thieu':

			$title_seo = _gioithieu;

			$type = 'gioi-thieu';

			$seo->setSeo('type','article');

			$source = "baiviet";

			$template ="pages/baiviet";

			break;

		case 'san-pham':

			$title_seo = 'S???N PH???M';

			$type="san-pham";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "products/product_detail" : "products/product";

			break;
		
		case 'tin-tuc':

			$title_seo = 'Tin t???c';

			$type="tin-tuc";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		case 'bao-gia':

			$title_seo = 'B??O GI??';
	
			$type="bao-gia";
	
			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
			$source = "news";
	
			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
	
			break;
		case 'dich-vu':

				$title_seo = 'D???CH V???';
	
				$type="dich-vu";
	
				$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");
	
				$source = "news";
	
				$template =isset($_GET['id']) ? "news/news_detail" : "news/news";
	
				break;	
		case 'feedback':

			$title_seo = 'Th??ng tin chung';

			$type="feedback";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;
		case 'chinh-sach':

			$title_seo = 'Ch??nh s??ch';

			$type="chinh-sach";

			$seo->setSeo('type',isset($_GET['id']) ? "article" : "object");

			$source = "news";

			$template =isset($_GET['id']) ? "news/news_detail" : "news/news";

			break;

		case 'tim-kiem':

			$type='san-pham';

			$seo->setSeo('type','object');

			$source = "search";

			$template = "products/product";

			break;

		case 'sitemap':

			include_once "sitemap.php";

			exit();

			break;
		
		case 'lang':
			
			
			if(isset($_GET['locale']))

			{
				
				switch($_GET['locale']){

					case 'vi':

						$_SESSION['lang'] = 'vi';

						break;

					case 'en':

						$_SESSION['lang'] = 'en';

						break;

					case 'jp':

						$_SESSION['lang'] = 'jp';

						break;

					case 'cn':

						$_SESSION['lang'] = 'cn';

						break;

					default:

						$_SESSION['lang'] = 'vi';

						break;

				}

			}else{

				$_SESSION['lang'] = 'vi';

			}

			$func->redirect($_SERVER['HTTP_REFERER']);

			

			break;

		case '': 

		case 'index': 

			$source = 'index';

			$template = 'index';

			$seo->setSeo('type','website');

			break;

		default:

			header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);

			$template = "error/404";

			break;

	}

	include_once _lib."style.php";

	if($source!="") include _source.$source.".php";



?>