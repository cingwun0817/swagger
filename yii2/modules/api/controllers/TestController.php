<?php

namespace app\modules\api\controllers;

use yii\web\Controller;

/**
 * @OA\Info(
 *   version="1.0",
 *   title="Application API",
 *   description="Server - Test API",
 *   @OA\Contact(
 *     name="Leo Wang",
 *     email="cingwun0817@gmail.com",
 *   ),
 * ),
 * @OA\Server(
 *   url="http://localhost:8000/api/test/",
 *   description="server",
 * )
 */
class TestController extends Controller
{
    /**
     * @OA\Get(path="/hello",
     *   summary="Test Hello",
     *   tags={"Test Hello"},
     *   @OA\Parameter(
     *     name="name",
     *     in="query",
     *     required=true,
     *     @OA\Schema(
     *       type="string"
     *     )
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="Returns Hello object",
     *     @OA\MediaType(
     *         mediaType="application/json"
     *     ),
     *   ),
     * )
     */
    public function actionHello()
    {
        $name = ($_GET['name']) ?? "Leo";

        return $this->asJson([
            'text' => "Hello, $name"
        ]);
    }
}