<?php
    require_once 'ajaxConfig.php';
    require_once _lib.'datamail.php';
    if($func->isAjax()){
        @$data = $_POST['data'];
        @$captcha = $_POST['captcha'];
        if($captcha == $_SESSION['captcha_code']){
            @$check = $_POST['check'];

            $body = "";
            foreach($data as $key => $value){
                $body .= "<p>".$mail[$key].": ".$value."</p>";
            }

            if(isset($_POST['check'])){
                foreach($check as $key => $value){
                    $data[$key] = json_encode($value);
                }
            }

            $data['ngaytao']=time();
            $data['hienthi']=1;
            $insert=$db->insert('newsletter', $data);
            
            $func->sendMailAjax($row_setting['email'],$mail[$data['type']],$body,array($row_setting['email']),null,null);
            if($insert){
                $response['status']=200;
                $response['error']='success';
                $response['message']='Thêm dữ liệu thành công';
            }else{
                $response['status']=201;
                $response['error']='error';
                $response['message']='Thêm dữ liệu không thành công';
            }
        }else{
            $response['status']=201;
            $response['error']='error';
            $response['message']='Mã bảo mật không đúng!';
        }
        echo json_encode($response);

    }
?>