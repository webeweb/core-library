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
 * Deduction anc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDeductionAncTrait {

    /**
     * Deduction anc.
     *
     * @var int
     */
    private $deductionAnc;

    /**
     * Get the deduction anc.
     *
     * @return int Returns the deduction anc.
     */
    public function getDeductionAnc() {
        return $this->deductionAnc;
    }

    /**
     * Set the deduction anc.
     *
     * @param int $deductionAnc The deduction anc.
     */
    public function setDeductionAnc($deductionAnc) {
        $this->deductionAnc = $deductionAnc;
        return $this;
    }
}
