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
 * Mt deduction acompte2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtDeductionAcompte2Trait {

    /**
     * Mt deduction acompte2.
     *
     * @var float
     */
    private $mtDeductionAcompte2;

    /**
     * Get the mt deduction acompte2.
     *
     * @return float Returns the mt deduction acompte2.
     */
    public function getMtDeductionAcompte2() {
        return $this->mtDeductionAcompte2;
    }

    /**
     * Set the mt deduction acompte2.
     *
     * @param float $mtDeductionAcompte2 The mt deduction acompte2.
     */
    public function setMtDeductionAcompte2($mtDeductionAcompte2) {
        $this->mtDeductionAcompte2 = $mtDeductionAcompte2;
        return $this;
    }
}
