<?php

class View
{

    public $components = [];

    public function __construct($name)
    {
        $this->name = $name;
    }
    static function head()
    {
        require("{$_SERVER['DOCUMENT_ROOT']}/views/extra/header.php");
    }
    public function component(string $name, array $slots, bool $hasMore = false)
    {
        if (!array_key_exists($name, $this->components) || (array_keys($slots) === range(0, count($slots) - 1))) {
            return;
        }

        $component = $this->components[$name];

        foreach ($slots as $name => $value) {
            $component = str_replace('{' . $name . '}', htmlspecialchars($value), $component);
        }

        echo $component;
    }
    public function addComponent($name, $html)
    {
        $this->components[$name] = $html;
    }
    private static function _404()
    {
        die("File not found.");
    }
}
