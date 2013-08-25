<?php
App::uses('Component', 'Controller');

// require_once 'kaltura'.DS.'KalturaClient.php';
// App::import('Vendor', '')
App::import('Vendor', 'kaltura/KalturaClient');

class KalturaComponent extends Component {
	
	public $adminSecret = '1570499fc0443031b5e73b67c4730200';
	public $partnerId = '1483331';
	public $url = 'http://www.kaltura.com';
	public $userId = 'admin';
    	
	public function getKalturaClient($partnerId = null, $adminSecret = null, $isAdmin = true, $url = '') {
		
		if(!$partnerId)
			$partnerId = $this->partnerId;

		if(!$adminSecret)
			$adminSecret = $this->adminSecret;
		
		$kConfig = new KalturaConfiguration($partnerId);
		
		if($url==''):
			// $kConfig->serviceUrl = 'http://www.kaltura.com';
			$kConfig->serviceUrl = $this->url;
		else:
			$kConfig->serviceUrl = $url;
		endif;
		
		$client = new KalturaClient($kConfig);
		
		// $userId = "admin";
		$userId = $this->userId;
		$sessionType = ($isAdmin)? KalturaSessionType::ADMIN : KalturaSessionType::USER; 
		
		try {
			$ks = $client->generateSession($adminSecret, $userId, $sessionType, $partnerId);
			$client->setKs($ks);
		} catch(Exception $ex) {
			die("Could not start session - check configuration in KajooHelper class");
		}
		
		return $client;
	}
	
	
	// Parece que esta función no la usa kajoo
	public function embedPlayer($partnerId = null, $entry_id = '0_9oj2uhzo', $configId = '8847102') {
		
		if(!$partnerId)
			$partnerId = $this->partnerId;
		
		// Connect to Kaltura API
		$PartnerInfo = self::getPartnerInfo($partnerId);
		// $kClient = self::getKalturaClient($PartnerInfo->partnerid, $PartnerInfo->administratorsecret, true, $PartnerInfo->url);
		$kClient = $this->getKalturaClient();
		
		try	{
			$uiConf = $kClient->uiConf->get($configId);
		} catch(Exception $ex) {
			// echo self::getKalturaError(JText::_('Fail on getting uiconf'));
		}
		
		if($PartnerInfo->url==''):
			// $PartnerInfo->url = 'http://www.kaltura.com';
			$PartnerInfo->url = $this->url;
		endif;
		
		// $video = '<script type="text/javascript" src="http://html5.kaltura.org/js"></script>		
		$video = '		
			<div id="myVideoTarget" style="width:720px;height:306px;">
				<!--  SEO and video metadata go here -->
				<span property="dc:description" content="An Open Source Movie from the Project Durian"></span>
				<span property="media:title" content="Sintel"></span>
				<span property="media:width" content="720"></span>
				<span property="media:height" content="306"></span>
			</div>
			
			<script>
				mw.setConfig( "KalturaSupport.LeadWithHTML5", false );
				mw.setConfig("Kaltura.ForceFlashOnDesktop", true );
				kWidget.embed({
					"targetId": "myVideoTarget",
					"wid": "_'.$PartnerInfo->partnerid.'",
					"uiconf_id" : "'.$uiConf->id.'",
					"entry_id" : "'.$entry_id.'",
					"flashvars":{
						"externalInterfaceDisabled" : false,
						"autoPlay" : false,
						"fooBar": "cats"
					},
					"readyCallback": function( playerId ){
						console.log( "kWidget player ready: " + playerId );
						var kdp = $("#" + playerId ).get(0);
					}
				});
			</script>';
		
		return $video;	
	}

	public function getPartnerInfo($partnerId) {
		try	{
			// $db =& JFactory::getDBO();
			// $query  = 'SELECT * FROM `#__kajoo_partners`';    	
	    	// $query .= ' WHERE id = '.(int)$partnerId;
			// $db->setQuery($query);
			// $partnerInfo = $db->loadObject();
			$partnerInfo = new Object();
			$partnerInfo->url = '';
			$partnerInfo->partnerid = $partnerId;
		} catch(Exception $ex) {
			die("Check the partner ID");
		}
		
		return $partnerInfo;
		
		
	}


	// public function getUrlEmbed($partnerId, $entry_id, $configId) {
	public function getUrlEmbed($partnerId = null, $entry_id = '0_9oj2uhzo', $configId = '8847102') {
		
		if(!$partnerId)
			$partnerId = $this->partnerId;
			
		// Connect to Kaltura API
		$PartnerInfo = self::getPartnerInfo($partnerId);
		// $kClient = self::getKalturaClient($PartnerInfo->partnerid, $PartnerInfo->administratorsecret, true, $PartnerInfo->url);
		$kClient = $this->getKalturaClient();
		
		try
		{
			$uiConf = $kClient->uiConf->get($configId);
		}
		catch(Exception $ex)
		{
			echo self::getKalturaError(JText::_('Fail on getting uiconf'));
		}
		
		if($PartnerInfo->url==''):
			$typeEmbed = 'sas';
			// $PartnerInfo->url = 'http://www.kaltura.com';
			$PartnerInfo->url = $this->url;
		else:
			$typeEmbed = 'cdn';
		endif;
	

		$video  = '<script type="text/javascript" src="http://html5.kaltura.org/js"></script>';
		$video .= '<object 
			  id="video_'.$entry_id.'" 
			  name="video_'.$entry_id.'" 
			  type="application/x-shockwave-flash" 
			  height="'.$uiConf->height.'" 
			  width="'.$uiConf->width.'" 
			  allowFullScreen="true" 
			  allowNetworking="all" 
			  allowScriptAccess="always" 
			  data="'.$PartnerInfo->url.'/kwidget/wid/_'.$PartnerInfo->partnerid.'/uiconf_id/'.$uiConf->id.'/entry_id/'.$entry_id.'" 
			  xmlns:dc="http://purl.org/dc/terms/" 
			  xmlns:media="http://search.yahoo.com/searchmonkey/media/" 
			  rel="media:video" 
			  resource="'.$PartnerInfo->url.'/kwidget/wid/_'.$PartnerInfo->partnerid.'/uiconf_id/'.$uiConf->id.'/entry_id/'.$entry_id.'">
			  <param name="allowFullScreen" value="true" />
			  <param name="allowNetworking" value="all" />
			  <param name="allowScriptAccess" value="always" />
			  <param name="bgcolor" value="#000000" />
			  <param name="flashVars" value="" />
			  <param name="movie" value="'.$PartnerInfo->url.'/kwidget/wid/_'.$PartnerInfo->partnerid.'/uiconf_id/'.$uiConf->id.'/entry_id/'.$entry_id.'" />
			</object>';
		
		return $video;
		
	}
	
}

?>