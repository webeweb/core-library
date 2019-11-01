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
 * Mt autre deduction trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtAutreDeductionTrait {

    /**
     * Mt autre deduction.
     *
     * @var float
     */
    private $mtAutreDeduction;

    /**
     * Get the mt autre deduction.
     *
     * @return float Returns the mt autre deduction.
     */
    public function getMtAutreDeduction() {
        return $this->mtAutreDeduction;
    }

    /**
     * Set the mt autre deduction.
     *
     * @param float $mtAutreDeduction The mt autre deduction.
     */
    public function setMtAutreDeduction($mtAutreDeduction) {
        $this->mtAutreDeduction = $mtAutreDeduction;
        return $this;
    }
}
