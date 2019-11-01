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
 * Exo h mnt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMnt4Trait {

    /**
     * Exo h mnt4.
     *
     * @var float
     */
    private $exoHMnt4;

    /**
     * Get the exo h mnt4.
     *
     * @return float Returns the exo h mnt4.
     */
    public function getExoHMnt4() {
        return $this->exoHMnt4;
    }

    /**
     * Set the exo h mnt4.
     *
     * @param float $exoHMnt4 The exo h mnt4.
     */
    public function setExoHMnt4($exoHMnt4) {
        $this->exoHMnt4 = $exoHMnt4;
        return $this;
    }
}
