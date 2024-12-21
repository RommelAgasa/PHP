<?php
    
    abstract class Model{

        protected const TABLE_NAME = '';

        public static function all(){
            /**
             * static::TABLE_NAME is used to refer to the TABLE_NAME 
             * constant in the context of the calling class. 
             */
            return 'SELECT * FROM ' . static::TABLE_NAME;
        }
    }

    class User extends Model{
        protected const TABLE_NAME = 'user';
    }

    class Role extends Model{
        protected const TABLE_NAME = 'roles';
    }

    echo User::all();
    echo Role::all();