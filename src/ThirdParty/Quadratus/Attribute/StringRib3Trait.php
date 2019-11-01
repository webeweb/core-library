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
 * Rib3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRib3Trait {

    /**
     * Rib3.
     *
     * @var string
     */
    private $rib3;

    /**
     * Get the rib3.
     *
     * @return string Returns the rib3.
     */
    public function getRib3() {
        return $this->rib3;
    }

    /**
     * Set the rib3.
     *
     * @param string $rib3 The rib3.
     */
    public function setRib3($rib3) {
        $this->rib3 = $rib3;
        return $this;
    }
}
