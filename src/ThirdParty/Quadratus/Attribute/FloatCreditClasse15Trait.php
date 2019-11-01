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
 * Credit classe15 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditClasse15Trait {

    /**
     * Credit classe15.
     *
     * @var float
     */
    private $creditClasse15;

    /**
     * Get the credit classe15.
     *
     * @return float Returns the credit classe15.
     */
    public function getCreditClasse15() {
        return $this->creditClasse15;
    }

    /**
     * Set the credit classe15.
     *
     * @param float $creditClasse15 The credit classe15.
     */
    public function setCreditClasse15($creditClasse15) {
        $this->creditClasse15 = $creditClasse15;
        return $this;
    }
}
