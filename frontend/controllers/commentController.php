<?php
    namespace frontend\controllers;

    use core\baseController;
    use common\models\commentModel;

    class commentController extends baseController
    {
        public function createAction()
        {
            $id = $_GET['id'];
            $model = new commentModel;
            $model->book_id = $id;
            if ($model->loadPost() && $model->validate()){
                if ($model->save()){
                    session_start();
                    $_SESSION['success'] = 'record save';
                    $this->redirect("book/item?id=$id");
                } else {
                    session_start();
                    $_SESSION['error'] = 'error save DB';
                    $this->redirect("book/item?id=$id");
                }
            }
            $this->layot = true;
            $this->render('create', ['model' => $model]);
        }
    }