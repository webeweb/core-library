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
 * Fait generic8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitGeneric8Trait {

    /**
     * Fait generic8.
     *
     * @var string
     */
    private $faitGeneric8;

    /**
     * Get the fait generic8.
     *
     * @return string Returns the fait generic8.
     */
    public function getFaitGeneric8() {
        return $this->faitGeneric8;
    }

    /**
     * Set the fait generic8.
     *
     * @param string $faitGeneric8 The fait generic8.
     */
    public function setFaitGeneric8($faitGeneric8) {
        $this->faitGeneric8 = $faitGeneric8;
        return $this;
    }
}
