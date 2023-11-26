<?php	
	header("Content-Type:text/html;charset=utf-8");
	
    $datatype = $_POST["datatype"];
    

	if($datatype == "getUserInfo"){
		$data = file_get_contents("https://api.bilibili.com/x/relation/stat?vmid=436662232");
		$arr = json_decode($data,true);
		$returnData["follower"] = $arr["data"]["follower"];

		//echo file_get_contents("https://api.bilibili.com/x/space/upstat?mid=436662232",true);
 

		// $stepList1 = $stepList;



		// foreach ($stepList['data']['archive'] as $s){
		// 	echo $s['view'];
		// 	echo "<br/>";
		// }


		$returnData["view"] = $arr["data"];

		$returnData["static"] = "success";
		$json = json_encode($returnData);
		exit($json);
	}




	