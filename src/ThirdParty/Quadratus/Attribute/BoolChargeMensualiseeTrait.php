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
 * Charge mensualisee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChargeMensualiseeTrait {

    /**
     * Charge mensualisee.
     *
     * @var bool
     */
    private $chargeMensualisee;

    /**
     * Get the charge mensualisee.
     *
     * @return bool Returns the charge mensualisee.
     */
    public function getChargeMensualisee() {
        return $this->chargeMensualisee;
    }

    /**
     * Set the charge mensualisee.
     *
     * @param bool $chargeMensualisee The charge mensualisee.
     */
    public function setChargeMensualisee($chargeMensualisee) {
        $this->chargeMensualisee = $chargeMensualisee;
        return $this;
    }
}
