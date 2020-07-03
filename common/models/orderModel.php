<?php

    namespace common\models;

    use core\baseModel;

    class orderModel extends baseModel
    {
        public $id;
        public $name;
        public $email;
        public $phone;
        public $book_id;
        public $approval;

        static $table = 'order';

        public function rules()
        {
            return [
                'required' => ['name', 'email', 'phone', 'book_id'],
                'string' => ['name', 'email', 'phone'],
                'integer' => ['book_id'],
                'boolean' => ['approval'],
            ];
        }
    }