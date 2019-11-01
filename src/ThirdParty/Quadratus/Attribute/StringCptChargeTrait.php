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
 * Cpt charge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptChargeTrait {

    /**
     * Cpt charge.
     *
     * @var string
     */
    private $cptCharge;

    /**
     * Get the cpt charge.
     *
     * @return string Returns the cpt charge.
     */
    public function getCptCharge() {
        return $this->cptCharge;
    }

    /**
     * Set the cpt charge.
     *
     * @param string $cptCharge The cpt charge.
     */
    public function setCptCharge($cptCharge) {
        $this->cptCharge = $cptCharge;
        return $this;
    }
}
