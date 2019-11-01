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
 * Epargne sal mnt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEpargneSalMnt4Trait {

    /**
     * Epargne sal mnt4.
     *
     * @var float
     */
    private $epargneSalMnt4;

    /**
     * Get the epargne sal mnt4.
     *
     * @return float Returns the epargne sal mnt4.
     */
    public function getEpargneSalMnt4() {
        return $this->epargneSalMnt4;
    }

    /**
     * Set the epargne sal mnt4.
     *
     * @param float $epargneSalMnt4 The epargne sal mnt4.
     */
    public function setEpargneSalMnt4($epargneSalMnt4) {
        $this->epargneSalMnt4 = $epargneSalMnt4;
        return $this;
    }
}
