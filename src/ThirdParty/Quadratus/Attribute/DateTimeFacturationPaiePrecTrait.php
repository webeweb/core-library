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

use DateTime;

/**
 * Facturation paie prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFacturationPaiePrecTrait {

    /**
     * Facturation paie prec.
     *
     * @var DateTime|null
     */
    private $facturationPaiePrec;

    /**
     * Get the facturation paie prec.
     *
     * @return DateTime|null Returns the facturation paie prec.
     */
    public function getFacturationPaiePrec() {
        return $this->facturationPaiePrec;
    }

    /**
     * Set the facturation paie prec.
     *
     * @param DateTime|null $facturationPaiePrec The facturation paie prec.
     */
    public function setFacturationPaiePrec(DateTime $facturationPaiePrec = null) {
        $this->facturationPaiePrec = $facturationPaiePrec;
        return $this;
    }
}
