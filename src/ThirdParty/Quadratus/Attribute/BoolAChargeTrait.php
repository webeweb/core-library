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
 * A charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAChargeTrait {

    /**
     * A charge.
     *
     * @var bool
     */
    private $aCharge;

    /**
     * Get the a charge.
     *
     * @return bool Returns the a charge.
     */
    public function getACharge() {
        return $this->aCharge;
    }

    /**
     * Set the a charge.
     *
     * @param bool $aCharge The a charge.
     */
    public function setACharge($aCharge) {
        $this->aCharge = $aCharge;
        return $this;
    }
}
