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
 * Exo h mnt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatExoHMnt3Trait {

    /**
     * Exo h mnt3.
     *
     * @var float
     */
    private $exoHMnt3;

    /**
     * Get the exo h mnt3.
     *
     * @return float Returns the exo h mnt3.
     */
    public function getExoHMnt3() {
        return $this->exoHMnt3;
    }

    /**
     * Set the exo h mnt3.
     *
     * @param float $exoHMnt3 The exo h mnt3.
     */
    public function setExoHMnt3($exoHMnt3) {
        $this->exoHMnt3 = $exoHMnt3;
        return $this;
    }
}
