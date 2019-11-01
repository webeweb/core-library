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
 * Rib2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRib2Trait {

    /**
     * Rib2.
     *
     * @var string
     */
    private $rib2;

    /**
     * Get the rib2.
     *
     * @return string Returns the rib2.
     */
    public function getRib2() {
        return $this->rib2;
    }

    /**
     * Set the rib2.
     *
     * @param string $rib2 The rib2.
     */
    public function setRib2($rib2) {
        $this->rib2 = $rib2;
        return $this;
    }
}
