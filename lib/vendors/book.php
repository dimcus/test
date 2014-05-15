<?
    namespace Lib\Vendors;

        class Book
        {
            public function get($name)
            {
                print "Value of " . $name . " here\n";
            }

            public function set($name, $value, $time)
            {
                print "Value " . $name . " saved into book cache for " . $time . " seconds\n";
            }
        }
