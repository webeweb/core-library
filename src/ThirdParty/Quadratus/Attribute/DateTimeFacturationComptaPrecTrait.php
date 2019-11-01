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
 * Facturation compta prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeFacturationComptaPrecTrait {

    /**
     * Facturation compta prec.
     *
     * @var DateTime|null
     */
    private $facturationComptaPrec;

    /**
     * Get the facturation compta prec.
     *
     * @return DateTime|null Returns the facturation compta prec.
     */
    public function getFacturationComptaPrec() {
        return $this->facturationComptaPrec;
    }

    /**
     * Set the facturation compta prec.
     *
     * @param DateTime|null $facturationComptaPrec The facturation compta prec.
     */
    public function setFacturationComptaPrec(DateTime $facturationComptaPrec = null) {
        $this->facturationComptaPrec = $facturationComptaPrec;
        return $this;
    }
}
