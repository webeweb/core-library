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
 * Credit hors ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCreditHorsExTrait {

    /**
     * Credit hors ex.
     *
     * @var float
     */
    private $creditHorsEx;

    /**
     * Get the credit hors ex.
     *
     * @return float Returns the credit hors ex.
     */
    public function getCreditHorsEx() {
        return $this->creditHorsEx;
    }

    /**
     * Set the credit hors ex.
     *
     * @param float $creditHorsEx The credit hors ex.
     */
    public function setCreditHorsEx($creditHorsEx) {
        $this->creditHorsEx = $creditHorsEx;
        return $this;
    }
}
