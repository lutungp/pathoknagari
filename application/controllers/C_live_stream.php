<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_live_stream extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      require_once(APPPATH.'libraries/Facebook/autoload.php');

      $fb = new Facebook\Facebook([
        'app_id' => '417994868791839',
        'app_secret' => '728f214c765745cfa4806f633682c258',
        'default_graph_version' => 'v2.10',
      ]);

      // try {
      //   // Returns a `FacebookFacebookResponse` object
      //   $response = $fb->post(
      //     '/100000095109218/live_videos',
      //     array (
      //       'status' => 'LIVE_NOW',
      //       'title' => "Today's Live Video",
      //       'description' => "This is the live video for today."
      //     ),
      //     '417994868791839|HixBLy1phVxcPsAA2u53RRAk4MQ'
      //   );
      // } catch(FacebookExceptionsFacebookResponseException $e) {
      //   echo 'Graph returned an error: ' . $e->getMessage();
      //   exit;
      // } catch(FacebookExceptionsFacebookSDKException $e) {
      //   echo 'Facebook SDK returned an error: ' . $e->getMessage();
      //   exit;
      // }
      //
      // $graphNode = $response->getGraphNode();
      // print_r($graphNode);
      $helper = $fb->getCanvasHelper();

      try {
        $accessToken = $helper->getAccessToken();
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

      if (! isset($accessToken)) {
        echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
        exit;
      }

      // Logged in
      echo '<h3>Signed Request</h3>';
      var_dump($helper->getSignedRequest());

      echo '<h3>Access Token</h3>';
      var_dump($accessToken->getValue());
  }

}
