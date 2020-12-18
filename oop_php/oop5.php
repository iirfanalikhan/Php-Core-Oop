<?php
    namespace html;
    abstract class tag
    {
        public $name;
        private $_tagname;
        
        function _construct(string $tagname)
        {
            $this->_tagname = $tagname;
        }
        function write($text)
        {
            echo "<span> $text </span>";
        }
}
class span extends tag
{
    function __construct()
    {
        parent:: _construct("span");
    }
}


?>