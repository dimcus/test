<?php

    namespace Lib\Interfaces;

    interface anyCache {
        public function getValue($id);
        public function setValue($id, $value, $expire);
    }