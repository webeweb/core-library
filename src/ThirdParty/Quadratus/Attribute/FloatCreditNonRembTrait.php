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
 * Credit non remb trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditNonRembTrait {

    /**
     * Credit non remb.
     *
     * @var float
     */
    private $creditNonRemb;

    /**
     * Get the credit non remb.
     *
     * @return float Returns the credit non remb.
     */
    public function getCreditNonRemb() {
        return $this->creditNonRemb;
    }

    /**
     * Set the credit non remb.
     *
     * @param float $creditNonRemb The credit non remb.
     */
    public function setCreditNonRemb($creditNonRemb) {
        $this->creditNonRemb = $creditNonRemb;
        return $this;
    }
}
