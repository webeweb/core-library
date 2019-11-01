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
 * Portable12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPortable12Trait {

    /**
     * Portable12.
     *
     * @var string
     */
    private $portable12;

    /**
     * Get the portable12.
     *
     * @return string Returns the portable12.
     */
    public function getPortable12() {
        return $this->portable12;
    }

    /**
     * Set the portable12.
     *
     * @param string $portable12 The portable12.
     */
    public function setPortable12($portable12) {
        $this->portable12 = $portable12;
        return $this;
    }
}
