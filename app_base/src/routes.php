<?php


// Routes

$app->get('/hola', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/inicio', function ($request, $response, $args) {
  $subscriber = 'Osvaldo';
  $data = ['subscriber' => $subscriber];
  return $this->renderer->render($response, 'home.phtml', $data);
});

$app->get('/edit', function ($request, $response, $args) {
  return $this->renderer->render($response, 'edit.phtml', $args);
});

$app->get('/conn', function ($request, $response, $arg) {
    require __DIR__ . '/models/conn.php';
    $stmt = $dbh->prepare("select * from zona");
    $stmt->execute();

    $rows = array();
    while($r = $stmt->fetch()){
        $rows[]['data'] = $r;
    }

    echo json_encode($rows, true);
    // echo json_encode($rows);
    //
    // unset($dbh); unset($stmt);
});
