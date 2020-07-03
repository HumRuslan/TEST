<?php
    namespace backend\controllers;

    use core\baseController;
    use common\models\commentModel;
    use backend\models\commentListModel;

    class commentController extends baseController
    {
        public function indexAction()
        {
            $comment_list = commentListModel::find()
                            ->all();
            $this->layot = true;
            $this->render('index', ['comment_list' => $comment_list]);
        }

        public function statusAction(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $model = new commentModel;
                if ($comment = commentModel::find()
                        ->where(['id' => $id])
                        ->one()){
                    foreach ($comment as $key => $value){
                        $model->{$key} = $value;
                    }
                    $model->approval = true;
                    if ($model->update(['id' => $comment->id])){
                        echo true;
                    }
                }
            }
            echo false;
        }
    }