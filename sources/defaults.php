<?php



	$page_index=$deviceType=='phone' ? 20 : 20;


	$viewed = [];

	if(isset($_SESSION['view'])){
		$viewed = $_SESSION['view'];
	}else{
		$_SESSION['view'] = array();
	}
	
	$row_setting= $db->rawQueryOne("select * from #_setting limit 0,1");
	

	$logo= $db->rawQueryOne("select photo_$lang from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logo'));

	$logomobile= $db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('logomobile'));

	$seoPage =$db->rawQueryOne("select photo_$lang,options from #_bannerqc where hienthi=1 and type=? limit 0,1",array('hinhdaidien'));

	$bg_footer =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_footer'));

	$bg_sanpham =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_sanpham'));

	$bct =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bct'));

	$icon_tktc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_tktc'));

	$icon_tintuc =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('icon_tintuc'));

	$bg_body =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_body'));

	$bg_tieuchi =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_tieuchi'));

	$bg_chu =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_chu'));

	$bg_dangky =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_dangky'));

	$bg_header =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_header'));

	$bg_dangky =$db->rawQueryOne("select photo_$lang as photo from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_dangky'));

	$hotlines= $db->rawQuery("select ten_$lang as ten,phone from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('hotline'));

	$gioiThieuThanhXuanBackGround =$db->rawQueryOne("select photo_$lang as photo , mota_$lang as mota from #_bannerqc where hienthi=1 and type=? limit 0,1",array('bg_gioithieu'));
	

	$chinhsach = $db->rawQuery("select ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type from #_baiviet where hienthi=1 and type=? ",array('chinh-sach'));

	$danhmuc1 = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and noibat=1 and type=?  order by stt asc,id desc",array('san-pham'));

	$danhmuc1menu = $db->rawQuery("select id , tenkhongdau_$lang as tenkhongdau , type , ten_$lang as ten , photo from #_baiviet_list where hienthi=1 and type=?  order by stt asc,id desc",array('san-pham'));


	// $thietke_c1 = $db->rawQuery("select id,ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type  from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array('du-an'));

	$baogia_c1 = $db->rawQuery("select id,ten_$lang as ten , tenkhongdau_$lang as tenkhongdau , type  from #_baiviet_list where hienthi=1 and type=? order by stt asc,id desc",array('bao-gia'));

	$footer=$db->rawQueryOne("select mota_$lang as mota from #_company where type=? limit 1 ",array('footer'));

	// photo

	$mangxahoi=$db->rawQuery("select photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('mangxahoi'));

	

	
?>