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
 * Mt deduction acompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtDeductionAcompteTrait {

    /**
     * Mt deduction acompte.
     *
     * @var float
     */
    private $mtDeductionAcompte;

    /**
     * Get the mt deduction acompte.
     *
     * @return float Returns the mt deduction acompte.
     */
    public function getMtDeductionAcompte() {
        return $this->mtDeductionAcompte;
    }

    /**
     * Set the mt deduction acompte.
     *
     * @param float $mtDeductionAcompte The mt deduction acompte.
     */
    public function setMtDeductionAcompte($mtDeductionAcompte) {
        $this->mtDeductionAcompte = $mtDeductionAcompte;
        return $this;
    }
}
