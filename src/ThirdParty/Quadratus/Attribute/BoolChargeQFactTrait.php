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
 * Charge q fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolChargeQFactTrait {

    /**
     * Charge q fact.
     *
     * @var bool
     */
    private $chargeQFact;

    /**
     * Get the charge q fact.
     *
     * @return bool Returns the charge q fact.
     */
    public function getChargeQFact() {
        return $this->chargeQFact;
    }

    /**
     * Set the charge q fact.
     *
     * @param bool $chargeQFact The charge q fact.
     */
    public function setChargeQFact($chargeQFact) {
        $this->chargeQFact = $chargeQFact;
        return $this;
    }
}
