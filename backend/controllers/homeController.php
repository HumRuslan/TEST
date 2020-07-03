<?php
    namespace backend\controllers;

    use core\baseController;
    use common\models\bookModel;

    class homeController extends baseController
    {
        public function indexAction()
        {
            $book_list = bookModel::find()
                            ->where(['approval' => false])
                            ->all();
            $this->layot = true;
            $this->render('index', ['book_list' => $book_list]);
        }
    }