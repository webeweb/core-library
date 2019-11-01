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
 * Tva fictive prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictivePrecTrait {

    /**
     * Tva fictive prec.
     *
     * @var float
     */
    private $tvaFictivePrec;

    /**
     * Get the tva fictive prec.
     *
     * @return float Returns the tva fictive prec.
     */
    public function getTvaFictivePrec() {
        return $this->tvaFictivePrec;
    }

    /**
     * Set the tva fictive prec.
     *
     * @param float $tvaFictivePrec The tva fictive prec.
     */
    public function setTvaFictivePrec($tvaFictivePrec) {
        $this->tvaFictivePrec = $tvaFictivePrec;
        return $this;
    }
}
