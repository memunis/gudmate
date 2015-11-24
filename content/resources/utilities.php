<?php
if(isset($_GET["action"])){
	$action = $_GET["action"];
	if($action=='sendfeedback'){
		$from	= $_GET["from"];
		$subject= $_GET["subject"];
		$message= $_GET["message"];
		if(!mail("memunis@gmail.com,support@gudmate.com","Gudmate Req: $subject",$message,"From: $from\n"))
			echo "failed";
	}else if($action=='sendTemplate'){
		$toadr = $_GET['to'];
		$skey = $_GET['skey'];
		if($skey=="gmate1381"){
		$reslt = 'success';

		$subject  = 'GudMate Lead-In';
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "From: GudMate <info@gudmate.com>\r\n";
		$headers .= "Reply-To: GudMate <noreply@gudmate.com> \r\n";
		$headers .= "Return-Path: GudMate <noreply@gudmate.com>\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .="X-Priority: 3\r\n";
		$headers .="X-Mailer: smail-PHP ".phpversion()."\r\n";
		$message = "
		<html><body style='margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0; background-color:#579584;'>
		<table style='width:100%;border:0;cellspacing:0;cellpadding:0;background-color:#579584;'>
		  <tr>
		    <td>
		    <center>

		      <table style='width:600px;border:0;cellspacing:0;cellpadding:0;'>
			<tr>
			  <td style='padding-top:8px;padding-bottom:8px;padding-right:0;padding-left:0;' ><p style='font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:11px;font-style:italic;color:#F0EDE4;text-align:center;' >Having trouble viewing this e-mail? <a href='http://gudmate.com/resources/mail_pub_template.html' style='color:#B9E1E2;'>View it in your browser.</a></p></td>
			</tr>
		      </table>

		      <table style='width:600px;border:0;cellspacing:0;cellpadding:0;background-color:#579584;'>
			<tr>
			  <td style='border-bottom:5px solid #f77f00;'>
			      <a href='http://www.gudmate.com'><img alt='GudMate.com' src='http://gudmate.com/images/mail_hdr.png' style='margin:0px;width:600px;' /></a>
			  </td>
			</tr>
		      </table>

		      <table style='width:600px;border:0;cellspacing:0;cellpadding:0;background-color:#ffffff;' >
			<tr>
			  <td>
			  <table style='width:560px;border:0;cellspacing:0;cellpadding:0;margin-left:20px; margin-top:20px;margin-right:20px;margin-bottom:20px; background-color:#ffffff;'>
			      <tr>
				<td style='padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:20px;'>
				<h3 style='color:#00746F;font-family:Arial, Helvetica, sans-serif; font-weight:100; font-size:20px; line-height:24px; text-align:left;'>Hello, we are from GudMate</h3>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				We are mainly into online Marketing.  So called eMarketing.  We publish your ads/requirement and share it to different social networking sites.
				</p>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				And also we share it to appropriate business groups to reach your expectation.  Along with emarketing we do Mobile apps development and Website design and development.
				</p>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				To get more information about our marketing and services, visit us on <a href='http://www.gudmate.com' style='color:#006C93'>http://www.gudmate.com</a> website and share your valuable comments.
				</p>
				</td>
			      </tr>
			    </table>
			    </td>
			</tr>
		      </table>

		      <table style='width:600px;height:108;border:0;cellspacing:0;cellpadding:0;background-color:#4C4D4F; margin-bottom:25px;' >
			<tr>
			  <td align='center'>

			    <table style='width:600px;height:88;border:0;cellspacing:0;cellpadding:0;'>
			      <tr>
				<td style='text-align:left;padding-left:40px;padding-top:20px;padding-bottom:20px;padding-right:40px;'><p style='font-family:Helvetica, Arial;font-size:12px;color:#fefefe;line-height:18px; text-align:left;'><a href='http://www.gudmate.com' style='color:#fefefe; text-decoration:none;font-weight:bold;'>CONTACT US<br/>
				    </a><a href='http://www.gudmate.com/' style='color:#fefefe; text-decoration:none;'>gudmate.com</a><br/>
				    MG Road | Bangalore, KA 560001<br/>
				    E-mail: <a href='mailto:support@gudmate.com' style='color:#ffffff; text-decoration:none;'>support@gudmate.com</a><br/>
				    <!--Phone: xxxx | Fax: xxxx<br>-->
				    <span style='color:#f77f00;'><em>Run and Rise.</em></span></p></td>
			      </tr>
			    </table></td>
			</tr>
		      </table>

		    </center>
		    </td>
		  </tr>
		</table>
		</body></html>
		";
		$ary = explode(',', $toadr);
		foreach ($ary as $toad) {
		if(!mail(trim($toad),$subject,$message,$headers))
			$reslt = 'failed';
		}
		echo $reslt;
		}else{
			echo 'failed11';
		}
	}
}else if(isset($_POST["action"])){
	$action = $_POST["action"];
	if($action=='sendMobTemplate'){
		$toadr = $_POST['to'];
		$skey = $_POST['skey'];
		$apname = urldecode($_POST['apnam']);
		$apsubj = urldecode($_POST['apsub']);
		$apdesc = urldecode($_POST['apdes']);
		$aplink = urldecode($_POST['aplnk']);
		$apimg  = urldecode($_POST['apimg']);

			//$reslt = $toadr + ' ' +$skey+' '+$apname+' '+$apsubj+' '+$apdesc+' '+$aplink+' '+$apimg;
			//echo $reslt;

		if($skey=="gmate1381"){
		$reslt = 'success';

		$subject  = $apsubj;
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "From: GudMate <info@gudmate.com>\r\n";
		$headers .= "Reply-To: GudMate <noreply@gudmate.com> \r\n";
		$headers .= "Return-Path: GudMate <noreply@gudmate.com>\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		$headers .="X-Priority: 3\r\n";
		$headers .="X-Mailer: smail-PHP ".phpversion()."\r\n";
		$message = "
		<html><body style='margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0; background-color:#579584;'>
		<table style='width:100%;border:0;cellspacing:0;cellpadding:0;background-color:#579584;'>
		  <tr>
		    <td>
		    <center>

		      <table style='width:600px;border:0;cellspacing:0;cellpadding:0;background-color:#579584;'>
			<tr>
			  <td style='border-bottom:5px solid #f77f00;'>
			      <a href='http://www.gudmate.com'><img alt='GudMate.com' src='http://gudmate.com/images/mail_mob_hdr.png' style='margin:0px;width:600px;' /></a>
			  </td>
			</tr>
		      </table>

		      <table style='width:600px;border:0;cellspacing:0;cellpadding:0;background-color:#ffffff;' >
			<tr>
			  <td>
			  <table style='width:560px;border:0;cellspacing:0;cellpadding:0;margin-left:20px; margin-top:20px;margin-right:20px;margin-bottom:20px; background-color:#ffffff;'>
			      <tr>
				<td style='padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:20px;'>
				<h3 style='color:#00746F;font-family:Arial, Helvetica, sans-serif; font-weight:100; font-size:20px; line-height:24px; text-align:left;'>$apname Android App from GudMate</h3>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;text-align:center;'>
				<a href=$aplink><img src=$apimg style='width:350px'/></a>
				</p>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				$apdesc
				</p>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				To install this application, click <a href=$aplink>here</a>.
				</p>
				<p style='color:#4C4D4F; font-family:Cambria, Georgia, \"Times New Roman\", Times, serif;font-size:16px; line-height:24px; text-align:justify;'>
				To get more free apps, visit our <a href='https://play.google.com/store/apps/developer?id=Gudmate%20Developer' style='color:#006C93'>Gudmate</a> link.
				</p>
				</td>
			      </tr>
			    </table>
			    </td>
			</tr>
		      </table>

		      <table style='width:600px;height:108;border:0;cellspacing:0;cellpadding:0;background-color:#4C4D4F; margin-bottom:25px;' >
			<tr>
			  <td align='center'>

			    <table style='width:600px;height:88;border:0;cellspacing:0;cellpadding:0;'>
			      <tr>
				<td style='text-align:left;padding-left:40px;padding-top:20px;padding-bottom:20px;padding-right:40px;'><p style='font-family:Helvetica, Arial;font-size:12px;color:#fefefe;line-height:18px; text-align:left;'><a href='http://www.gudmate.com' style='color:#fefefe; text-decoration:none;font-weight:bold;'>CONTACT US<br/>
				    </a><a href='http://www.gudmate.com/' style='color:#fefefe; text-decoration:none;'>gudmate.com</a><br/>
				    E-mail: <a href='mailto:support@gudmate.com' style='color:#ffffff; text-decoration:none;'>support@gudmate.com</a><br/>
				    <span style='color:#f77f00;'><em>Run and Rise.</em></span></p></td>
			      </tr>
			    </table></td>
			</tr>
		      </table>

		    </center>
		    </td>
		  </tr>
		</table>
		</body></html>
		";
		$ary = explode(',', $toadr);
		foreach ($ary as $toad) {
		if(!mail(trim($toad),$subject,$message,$headers))
			$reslt = 'failed';
		}
		echo $reslt;
		}else{
			echo 'failed22';
		}
		//echo 'success...';
	}
}

function getVisitors(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "select count(*) as ucount from ucount;";
	//error_log("Select candidate query: ".$sql);
	//$result = mysqli_query($con,$sql) or  die("Unable to retrieve the user count");
	$result = mysqli_query($con,$sql);
	$usrc = mysqli_fetch_array($result);
	if($usrc)
		$uc = $usrc['ucount'];
	unset($con);
	return $uc;
}

function getVisitorDetails(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "select id,cip,clocation,accessed from ucount order by id desc;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to retrieve the user details");
	$num_rows = mysqli_num_rows($result);
	unset($visitors);
	while ($row = mysqli_fetch_array($result)) {
			$visitor['id']=$row['id'];
			$visitor['cip']=$row['cip'];
			$visitor['clocation']=$row['clocation'];
			$visitor['accessed']=$row['accessed'];
			$visitors[] = $visitor;
	}
	unset($con);
	return $visitors;
}

function alterLocation(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "alter table ucount add clocation varchar(600) default 'NA' after cip;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to alter the location");
	unset($con);
}

function alterPriority(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "alter table marketing add mk_priority int(2) default '1' after mk_uid;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to alter priority");
	unset($con);
}

function alterPrice(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "alter table marketing add mk_price varchar(300) default 'NA' after status;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to alter price");
	unset($con);
}

function updateLocation(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$uc = 0;
	$sql = "select cip from ucount group by cip;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to retrieve cip");
	//$num_rows = mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) {
		$cip	= $row['cip'];
		$caddr	= getIpLocation($cip);
		$sql2	= "update ucount set clocation='$caddr' where cip='$cip';";
		//error_log('Location query: '.$sql2);
		$result2 = mysqli_query($con,$sql2) or  die("Unable to update clocation");
	}
	unset($con);
	//return $visitors;
}

function getIpLocation($cip){
	$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$cip));
	$caddr = 'NA';
	if($query['status'] == 'success') {
		$city='';
		$rgon='';
		$cnty='';
		if(strlen($query['city'])>0)
			$city = $query['city'].', ';
		if(strlen($query['regionName'])>0)
			$rgon = $query['regionName'].', ';
		if(strlen($query['country'])>0)
			$cnty = $query['country'];
	  $caddr=$city.''.$rgon.''.$cnty;
	}
	return $caddr;
}

function getMarketDetails($mkid){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$sql = "select mk_type,area,dimensions,facing,ptype,locality,city,picture,contact_no,status,mk_price,short_url,comments,created from marketing where mk_uid='".$mkid."';";
	//error_log("Select market details query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to get market details");
	unset($marketdata);
	$mkdt = mysqli_fetch_array($result);
	if($mkdt){
		$marketdata['mk_type']		= $mkdt['mk_type'];
		$marketdata['area']			= $mkdt['area'];
		$marketdata['dimensions']	= $mkdt['dimensions'];
		$marketdata['facing']		= $mkdt['facing'];
		$marketdata['ptype']		= $mkdt['ptype'];
		$marketdata['locality']		= $mkdt['locality'];
		$marketdata['city']			= $mkdt['city'];
		$marketdata['picture']		= $mkdt['picture'];
		$marketdata['contact_no']	= $mkdt['contact_no'];
		$marketdata['status']		= $mkdt['status'];
		$marketdata['mk_price']		= $mkdt['mk_price'];
		$marketdata['short_url']	= $mkdt['short_url'];
		$marketdata['comments']		= $mkdt['comments'];
		$marketdata['posted']		= $mkdt['created'];
		unset($con);
		return $marketdata;
	}
	unset($con);
}

function getMarketInviteDetails($iurl){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$sql = "select mk_type,area,dimensions,facing,ptype,locality,city,picture,contact_no,status,short_url,comments,created from marketing where short_url='".$iurl."';";
	//error_log("Select market details query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to retrieve market invite details");
	unset($marketdata);
	$mkdt = mysqli_fetch_array($result);
	if($mkdt){
		$marketdata['mk_type']		= $mkdt['mk_type'];
		$marketdata['area']			= $mkdt['area'];
		$marketdata['dimensions']	= $mkdt['dimensions'];
		$marketdata['facing']		= $mkdt['facing'];
		$marketdata['ptype']		= $mkdt['ptype'];
		$marketdata['locality']		= $mkdt['locality'];
		$marketdata['city']			= $mkdt['city'];
		$marketdata['picture']		= $mkdt['picture'];
		$marketdata['contact_no']	= $mkdt['contact_no'];
		$marketdata['status']		= $mkdt['status'];
		$marketdata['short_url']	= $mkdt['short_url'];
		$marketdata['comments']		= $mkdt['comments'];
		$marketdata['posted']		= $mkdt['created'];
		unset($con);
		return $marketdata;
	}
	unset($con);
}

function getMarketList(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);

	$sql = "select mk_type,area,dimensions,ptype,locality,city,picture,contact_no,status,short_url,comments,created from marketing order by mk_priority,id desc;";
	//error_log("Select candidate query: ".$sql);
	$result = mysqli_query($con,$sql) or  die("Unable to retrieve the market List");
	$num_rows = mysqli_num_rows($result);
	unset($mklist);
	if($num_rows>0){
	while ($mkdt = mysqli_fetch_array($result)) {
		$marketdata['mk_type']		= $mkdt['mk_type'];
		$marketdata['area']			= $mkdt['area'];
		$marketdata['dimensions']	= $mkdt['dimensions'];
		$marketdata['ptype']		= $mkdt['ptype'];
		$marketdata['locality']		= $mkdt['locality'];
		$marketdata['city']			= $mkdt['city'];
		$marketdata['picture']		= $mkdt['picture'];
		$marketdata['contact_no']	= $mkdt['contact_no'];
		$marketdata['status']		= $mkdt['status'];
		$marketdata['short_url']	= $mkdt['short_url'];
		$marketdata['comments']		= $mkdt['comments'];
		$marketdata['posted']		= $mkdt['created'];
		$mklist[] = $marketdata;
	}
	return $mklist;
	}
	unset($con);
}
function updateCounter($cip){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);
	//$cip = $_SERVER['REMOTE_ADDR'];
	$clocation = getIpLocation($cip);
	$sql = "insert into ucount(cip,clocation) values('$cip','$clocation');";
	//error_log("insert count query: ".$sql);
	//mysqli_query($con,$sql) or  die("Unable to insert user count");
	mysqli_query($con,$sql);
	unset($con);
}
function createucount(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);
	//$cip = $_SERVER['REMOTE_ADDR'];
	$sql = "create table ucount(id int(11) auto_increment primary key, cip varchar(15) default 'NA',accessed timestamp default current_timestamp);";
	//error_log("insert count query: ".$sql);
	mysqli_query($con,$sql) or  die("Unable to create ucount table");
	unset($con);
}
function createmarketing(){
	$db_name= "gm_db"; //Name of Database
	$con = mysqli_connect("localhost","intervu","intervuDB123"); // Make Database Connection
	mysqli_select_db($con,$db_name);
	//$cip = $_SERVER['REMOTE_ADDR'];
	$sql = "create table marketing(id int(11) auto_increment primary key, mk_type enum('flat','site','venture','individual') default 'Flat', area varchar(500) default '0', dimensions varchar(500) default 'NA',facing varchar(100) default 'NA',ptype varchar(100) default 'NEW',locality varchar(500) default 'NA', city varchar(500) default 'NA', picture varchar(500) default 'NA',contact_no varchar(50) default '8861626198',status enum('Available','Sold') default 'Available', mk_uid varchar(40) default 'NA', short_url varchar(200) default 'NA', comments varchar(1000) default 'NA', created timestamp default current_timestamp);";
	//error_log("insert count query: ".$sql);
	mysqli_query($con,$sql) or  die("Unable to create marketing table");
	unset($con);
}
?>