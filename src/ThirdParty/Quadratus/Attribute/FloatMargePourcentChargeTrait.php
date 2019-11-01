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
 * Marge pourcent charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMargePourcentChargeTrait {

    /**
     * Marge pourcent charge.
     *
     * @var float
     */
    private $margePourcentCharge;

    /**
     * Get the marge pourcent charge.
     *
     * @return float Returns the marge pourcent charge.
     */
    public function getMargePourcentCharge() {
        return $this->margePourcentCharge;
    }

    /**
     * Set the marge pourcent charge.
     *
     * @param float $margePourcentCharge The marge pourcent charge.
     */
    public function setMargePourcentCharge($margePourcentCharge) {
        $this->margePourcentCharge = $margePourcentCharge;
        return $this;
    }
}
