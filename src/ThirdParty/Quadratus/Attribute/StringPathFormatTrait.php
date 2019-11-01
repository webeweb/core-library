<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Path format trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPathFormatTrait {

    /**
     * Path format.
     *
     * @var string
     */
    private $pathFormat;

    /**
     * Get the path format.
     *
     * @return string Returns the path format.
     */
    public function getPathFormat() {
        return $this->pathFormat;
    }

    /**
     * Set the path format.
     *
     * @param string $pathFormat The path format.
     */
    public function setPathFormat($pathFormat) {
        $this->pathFormat = $pathFormat;
        return $this;
    }
}
