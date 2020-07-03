<?php
    namespace backend\controllers;

    use core\baseController;
    use common\models\bookModel;

    class bookController extends baseController
    {
        public function createAction()
        {
            $model = new bookModel;
            if ($model->loadPost()){
                if ($_FILES['urlPhoto']['name'] != '') {
                    $fileExtention = explode(".", $_FILES['urlPhoto']['name']);
                    $model->urlPhoto = md5(microtime()) . '.' . $fileExtention[count($fileExtention) - 1];
                    if (!file_exists('onload')) {
                        mkdir('onload');
                    }
                    move_uploaded_file($_FILES['urlPhoto']["tmp_name"], 'onload/' . $model->urlPhoto);
                } else {
                    $model->urlPhoto='';
                }
                if ($model->validate()){
                    if ($model->save()){
                        session_start();
                        $_SESSION['success'] = 'record save';
                        $this->redirect('home/index');
                    } else {
                        session_start();
                        $_SESSION['error'] = 'error save DB';
                        $this->redirect('home/index');
                    }
                }
            }
            $this->layot = true;
            $this->render('create', ['model' => $model]);
        }

        public function updateAction()
        {
            $id = $_GET['id'];
            $model = new bookModel;
            $book = bookModel::find()
                    ->where(['id' => $id])
                    ->one();
            foreach ($book as $key => $value){
                $model->{$key} = $value;
            }

            if ($model->loadPost()){
                if ($_FILES['urlPhoto']['name'] != '') {
                    unlink('onload/'.$book->urlPhoto);
                    $fileExtention = explode(".", $_FILES['urlPhoto']['name']);
                    $model->urlPhoto = md5(microtime()) . '.' . $fileExtention[count($fileExtention) - 1];
                    if (!file_exists('onload')) {
                        mkdir('onload');
                    }
                    move_uploaded_file($_FILES['urlPhoto']["tmp_name"], 'onload/' . $model->urlPhoto);
                } else {
                    $model->urlPhoto=$book->urlPhoto;
                }
                if ($model->validate()){
                    if ($model->update(['id' => $book->id])){
                        session_start();
                        $_SESSION['success'] = 'record update';
                        $this->redirect('home/index');
                    } else {
                        session_start();
                        $_SESSION['error'] = 'error update DB';
                        $this->redirect('home/index');
                    }
                }
            }
            $this->layot = true;
            $this->render('create', ['model' => $model]);
        }

        public function deleteAction()
        {
            $id = $_GET['id'];
            $book = bookModel::find()
                    ->where(['id' => $id])
                    ->one();
            unlink('onload/'.$book->urlPhoto);        
            bookModel::delete(['id' => $id]);
            $this->redirect('home/index');
        }
    }