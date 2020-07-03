<?php
    namespace backend\controllers;

    use core\baseController;
    use common\models\orderModel;
    use backend\models\orderListModel;
    use common\models\bookModel;

    class orderController extends baseController
    {
        public function indexAction()
        {
            $order_list = orderListModel::find()
                            ->all();
            $this->layot = true;
            $this->render('index', ['order_list' => $order_list]);
        }

        public function statusAction(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $id = $_POST['id'];
                $model = new orderModel;
                if ($order = orderModel::find()
                        ->where(['id' => $id])
                        ->one()){
                    $order->book_id;
                    foreach ($order as $key => $value){
                        $model->{$key} = $value;
                    }
                    $model->approval = true;
                    if ($book = bookModel::find()
                        ->where(['id' => $order->book_id])
                        ->one()){
                            $model_book = new bookModel;
                        foreach ($book as $key => $value){
                            $model_book->{$key} = $value;
                        }
                        $model_book->approval = true;
                        $model->update(['id' => $order->id]);
                        $model_book->update(['id' => $order->book_id]);
                        echo true;
                    }
                }
            }
            echo false;
        }
    }