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
 * Mt deduction acompte1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtDeductionAcompte1Trait {

    /**
     * Mt deduction acompte1.
     *
     * @var float
     */
    private $mtDeductionAcompte1;

    /**
     * Get the mt deduction acompte1.
     *
     * @return float Returns the mt deduction acompte1.
     */
    public function getMtDeductionAcompte1() {
        return $this->mtDeductionAcompte1;
    }

    /**
     * Set the mt deduction acompte1.
     *
     * @param float $mtDeductionAcompte1 The mt deduction acompte1.
     */
    public function setMtDeductionAcompte1($mtDeductionAcompte1) {
        $this->mtDeductionAcompte1 = $mtDeductionAcompte1;
        return $this;
    }
}
