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
 * Epargne sal mnt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatEpargneSalMnt1Trait {

    /**
     * Epargne sal mnt1.
     *
     * @var float
     */
    private $epargneSalMnt1;

    /**
     * Get the epargne sal mnt1.
     *
     * @return float Returns the epargne sal mnt1.
     */
    public function getEpargneSalMnt1() {
        return $this->epargneSalMnt1;
    }

    /**
     * Set the epargne sal mnt1.
     *
     * @param float $epargneSalMnt1 The epargne sal mnt1.
     */
    public function setEpargneSalMnt1($epargneSalMnt1) {
        $this->epargneSalMnt1 = $epargneSalMnt1;
        return $this;
    }
}
