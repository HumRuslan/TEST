<?php
    namespace frontend\controllers;

    use core\baseController;
    use common\models\orderModel;
    use common\models\bookModel;

    class orderController extends baseController
    {
        public function createAction()
        {
            $id = $_GET['id'];
            $model = new orderModel;
            $model->book_id = $id;
            if ($model->loadPost() && $model->validate()){
                $patern = '/\+[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{3}-[0-9]{2}/';
                if (preg_match($patern, $model->phone)){
                    if ($book = bookModel::find()
                        ->where(['id' => $id])
                        ->one()){
                        $model_book = new bookModel;
                        foreach ($book as $key => $value){
                            $model_book->{$key} = $value;
                        }
                        $model_book->booked = true;
                        if (!$model_book->update(['id' => $id])){
                            session_start();
                            $_SESSION['error'] = 'error save DB';
                            $this->redirect("home/index");
                        }
                    } else {
                        session_start();
                        $_SESSION['error'] = 'error save DB';
                        $this->redirect("home/index");
                    }
                    foreach ($order as $key => $value){
                        $model->{$key} = $value;
                    }
                    if ($model->save()){
                        session_start();
                        $_SESSION['success'] = 'record save';
                        $this->redirect("home/index");
                    } else {
                        session_start();
                        $_SESSION['error'] = 'error save DB';
                        $this->redirect("home/index");
                    }
                } else {
                    $_SESSION['error'] = 'phone is not valid';
                }
            }
            $this->layot = true;
            $this->render('create', ['model' => $model]);
        }
    }