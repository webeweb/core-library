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
 * Deduction h sup fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDeductionHSupFillonTrait {

    /**
     * Deduction h sup fillon.
     *
     * @var bool
     */
    private $deductionHSupFillon;

    /**
     * Get the deduction h sup fillon.
     *
     * @return bool Returns the deduction h sup fillon.
     */
    public function getDeductionHSupFillon() {
        return $this->deductionHSupFillon;
    }

    /**
     * Set the deduction h sup fillon.
     *
     * @param bool $deductionHSupFillon The deduction h sup fillon.
     */
    public function setDeductionHSupFillon($deductionHSupFillon) {
        $this->deductionHSupFillon = $deductionHSupFillon;
        return $this;
    }
}
