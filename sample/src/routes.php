<?php
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {	

	//初期index.phtml  http://192.168.179.6/slim3/sample/public/で表示される
	$app->map(['GET', 'POST'], '/', function ($request, $response, $args) {
	  $mapper = new TestMapper($this->db);
	  $test = $mapper->getTests();
	  $response = $this->renderer->render($response, "index.phtml", ["data" => $mapper]);
	});
	
	//detail_tmp.phtmlの初期ページ
	$app->map(['GET', 'POST'], '/detail_tmp', function ($request, $response, $args) {
	  $mapper = new TestMapper($this->db);
	  $test = $mapper->getTests();
	  $response = $this->renderer->render($response, "detail_tmp.phtml", ["data" => $mapper]);
	});

	//出来てる
	 $app->get('/book_api', function (Request $request, Response $response, array $args) use ($container) {
		 error_reporting(0);
		  $mapper = new TestMapper($this->db);
		  $test = $mapper->getTests();

		  ob_start();
		  var_dump($test);
		  $t = ob_get_contents();
		  ob_end_clean();
		  var_dump($test);

		  return $response;
   });
   
   	//出来てる
	 $app->get('/movie', function (Request $request, Response $response, array $args) use ($container) {
		  echo "movie";
		  error_reporting(0);
		  //ファイル名movie_class.php 
		  //クラス名もmovie_classで統一しないとデータが上手く表示されない模様
		  $mapper = new movie_class($this->db);
		  $test = $mapper->movie_info();
		  var_dump($test);
   });
   
   //出来てる
	$app->get('/book_api2', function ($request, $response, $args) {
	  $mapper = new TestMapper($this->db);
	  $test = $mapper->getTests();
	  $response = $this->renderer->render($response, "book_api.phtml", ["data" => $mapper]);
	});
	
	//出来てる｛
	$app->get('/book_api_sample', function ($request, $response, $args) {
	  $mapper = new TestMapper($this->db);
	  $test = $mapper->getTests();
	  $response = $this->renderer->render($response, "book_api_sample.phtml", ["data" => $mapper]);
	});
	
	//出来てる detail 画面
	$app->map(['GET', 'POST'], '/book_api_sample_detail', function ($request, $response, $args) {
	  //TestMapper_detail.phpのClassのインスタンス作成
	  $mapper = new TestMapper_detail($this->db);
	  $response = $this->renderer->render($response, "book_api_sample_detail.phtml", ["data" => $mapper]);
	});
	//｝
	
	//movie_info出来てる｛
	$app->map(['GET', 'POST'],'/movie_info', function ($request, $response, $args) {
	  //movie_class.phpのmovie_classクラスのインスタンス作成
	  $mapper = new movie_class($this->db);
	  $response = $this->renderer->render($response, "movie_info.phtml", ["data" => $mapper]);
	});
	
	//movie_info_details出来てる｛
	$app->map(['GET', 'POST'],'/movie_info_detail', function ($request, $response, $args) {
	  //movie_class.phpのmovie_classクラスのインスタンス作成
	  $mapper = new movie_class_details($this->db);
	  $response = $this->renderer->render($response, "movie_info_detail.phtml", ["data" => $mapper]);
	});
	
	
	
};


//下の、出来てない。
//ポイントの購入、出金履歴
$app->map(['GET', 'POST'], '/point/', function (Request $request, Response $response, array $args) {
    //$this->logger->info("Slim-Skeleton '/' route");
    $mapper = new PointClass($this->db);
    $response = $this->renderer->render($response, "index.phtml", ["data" => $mapper]);
});
