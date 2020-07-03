<?php

    namespace common\models;

    use core\baseModel;

    class commentModel extends baseModel
    {
        public $id;
        public $autor;
        public $comment;
        public $approval;

        static $table = 'comment';

        public function rules()
        {
            return [
                'required' => ['autor', 'comment'],
                'string' => ['autor', 'comment'],
                'integer' => ['book_id'],
                'boolean' => ['approval'],
            ];
        }
    }