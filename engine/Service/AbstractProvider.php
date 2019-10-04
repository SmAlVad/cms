<?php


namespace Engine\Service;

use Engine\DI\DI;

/**
 * Class AbstractProvider
 * @package Engine\Service
 */
abstract class AbstractProvider
{
    /**
     * @var DI
     */
    protected $di;

    /**
     * AbstractProvider constructor.
     * @param DI $di
     */
    public function __construct(DI $di)
    {
        $this->di = $di;
    }

    /**
     * @return mixed
     */
    abstract function init();
}