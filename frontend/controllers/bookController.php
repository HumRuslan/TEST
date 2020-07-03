<?php
    namespace frontend\controllers;

    use core\baseController;
    use common\models\bookModel;
    use common\models\commentModel;


    class bookController extends baseController
    {
        public function itemAction()
        {
            $id = $_GET['id'];
            $book = bookModel::find()
                    ->where(['id' => $id])
                    ->one();
            $comment_list = commentModel::find()
                            ->where(['book_id' => $id,
                                    'approval' => true])
                            ->all();
            if (!$comment_list){
                $comment_list = [];
            }      
            $this->layot = true;
            $this->render('item', ['book' => $book, 'comment_list' => $comment_list]);
            
        }
    }