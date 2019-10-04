<?php

namespace Engine;

/**
 * Class Cms
 * @package Engine
 */
class Cms
{
    /**
     * @var DI
     */
    private $di;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
    }

    /**
     * Run Cms
     */
    public function run()
    {

    }
}