<?php


    namespace Lib\Classes;

    class BookCache implements \Lib\Interfaces\anyCache {
        private $provider;

        function __construct() {
            $this->provider = new \Lib\Vendors\Book();

        }

        public function getValue($id) {
            return $this->provider->get($id);
        }

        public function setValue($id, $value, $expire=0) {
            return $this->provider->set($id, $value, $expire);
        }

    }