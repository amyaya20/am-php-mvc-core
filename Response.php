<?php

    namespace amohd12\phpmvc;
    class Response{


        public function setStatusCode(int $code){


            http_response_code($code);


        }


        public function redirect(string $url){

            header("Location: $url");
        }




    }