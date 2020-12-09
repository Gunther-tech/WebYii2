<?php

//Пространство имён(доступ к файлам)
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Post;
use app\models\PostSearch;
use app\models\PostFrontendSearch;


class PostController extends Controller
{
    

    /*
    Список всех постов блога
    */
  public function actionIndex()
  {
      $searchModel = new PostFrontendSearch();
      $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      return $this->render('index', [
          'dataProvider' => $dataProvider,
          'searchModel' => $searchModel
      ]);
  }

    //Отдельный пост
    public function actionView($id)
    {
        $post = Post::find()->where(['id' => $id])->one();

        if ($post) {
            return $this -> render('view',['model' => $post]);
        }
        throw new \yii\web\NotFoundHttpException("Пост не найден!");

    }


}
