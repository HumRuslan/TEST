<?php

    namespace common\models;

    use core\baseModel;

    class bookModel extends baseModel
    {
        public $id;
        public $name;
        public $autor;
        public $description;
        public $urlPhoto;
        public $booked;
        public $approval;

        static $table = 'book';

        public function rules()
        {
            return [
                'required' => ['name', 'autor', 'description', 'urlPhoto'],
                'string' => ['name', 'autor', 'description', 'urlPhoto'],
                'boolean' => ['booked', 'approval'],
            ];
        }
    }