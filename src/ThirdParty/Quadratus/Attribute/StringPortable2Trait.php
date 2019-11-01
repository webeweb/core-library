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
 * Portable2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPortable2Trait {

    /**
     * Portable2.
     *
     * @var string
     */
    private $portable2;

    /**
     * Get the portable2.
     *
     * @return string Returns the portable2.
     */
    public function getPortable2() {
        return $this->portable2;
    }

    /**
     * Set the portable2.
     *
     * @param string $portable2 The portable2.
     */
    public function setPortable2($portable2) {
        $this->portable2 = $portable2;
        return $this;
    }
}
