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
 * Portable1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPortable1Trait {

    /**
     * Portable1.
     *
     * @var string
     */
    private $portable1;

    /**
     * Get the portable1.
     *
     * @return string Returns the portable1.
     */
    public function getPortable1() {
        return $this->portable1;
    }

    /**
     * Set the portable1.
     *
     * @param string $portable1 The portable1.
     */
    public function setPortable1($portable1) {
        $this->portable1 = $portable1;
        return $this;
    }
}
