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
 * Rib1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRib1Trait {

    /**
     * Rib1.
     *
     * @var string
     */
    private $rib1;

    /**
     * Get the rib1.
     *
     * @return string Returns the rib1.
     */
    public function getRib1() {
        return $this->rib1;
    }

    /**
     * Set the rib1.
     *
     * @param string $rib1 The rib1.
     */
    public function setRib1($rib1) {
        $this->rib1 = $rib1;
        return $this;
    }
}
