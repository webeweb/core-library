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
 * Exo h mnt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMnt1Trait {

    /**
     * Exo h mnt1.
     *
     * @var float
     */
    private $exoHMnt1;

    /**
     * Get the exo h mnt1.
     *
     * @return float Returns the exo h mnt1.
     */
    public function getExoHMnt1() {
        return $this->exoHMnt1;
    }

    /**
     * Set the exo h mnt1.
     *
     * @param float $exoHMnt1 The exo h mnt1.
     */
    public function setExoHMnt1($exoHMnt1) {
        $this->exoHMnt1 = $exoHMnt1;
        return $this;
    }
}
