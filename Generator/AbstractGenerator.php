<?php

/*
* This file is part of Chalasdev/CapistranoBundle.
*
* https://github.com/chalasr/CapistranoBundle
* Robin Chalas <robin.chalas@gmail.com>
*
*/

namespace Chalasdev\CapistranoBundle\Generator;

/**
 * Abstract class for generators.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class AbstractGenerator
{
    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var mixed
     */
    protected $file;

    /**
     * @var string
     */
    protected static $headersTemplate = '
###########################################################################
#          This file is generated by Chalasdev/CapistranoBundle           #
#                                                                         #
#               https://github.com/chalasr/CapistranoBundle               #
#                  Robin Chalas <robin.chalas@gmail.com>                  #
#                                                                         #
###########################################################################
';

    /**
     * Constructor.
     *
     * @param array  $parameters
     * @param string $path
     * @param string $name
     */
    public function __construct(array $parameters, $path)
    {
        $this->parameters = $parameters;
        $this->path = $path;
    }

    /**
     * Get parameters.
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Get staging path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Add license headers.
     *
     * @return string
     */
    public function addHeaders($generated)
    {
        return sprintf('%s%s%s', self::$headersTemplate, PHP_EOL, $generated);
    }
}