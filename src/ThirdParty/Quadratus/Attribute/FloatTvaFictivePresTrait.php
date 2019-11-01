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
 * Tva fictive pres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTvaFictivePresTrait {

    /**
     * Tva fictive pres.
     *
     * @var float
     */
    private $tvaFictivePres;

    /**
     * Get the tva fictive pres.
     *
     * @return float Returns the tva fictive pres.
     */
    public function getTvaFictivePres() {
        return $this->tvaFictivePres;
    }

    /**
     * Set the tva fictive pres.
     *
     * @param float $tvaFictivePres The tva fictive pres.
     */
    public function setTvaFictivePres($tvaFictivePres) {
        $this->tvaFictivePres = $tvaFictivePres;
        return $this;
    }
}
