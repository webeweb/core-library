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
 * Path trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPathTrait {

    /**
     * Path.
     *
     * @var string
     */
    private $path;

    /**
     * Get the path.
     *
     * @return string Returns the path.
     */
    public function getPath() {
        return $this->path;
    }

    /**
     * Set the path.
     *
     * @param string $path The path.
     */
    public function setPath($path) {
        $this->path = $path;
        return $this;
    }
}
