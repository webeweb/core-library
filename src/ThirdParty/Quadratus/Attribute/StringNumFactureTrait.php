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
 * Num facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumFactureTrait {

    /**
     * Num facture.
     *
     * @var string
     */
    private $numFacture;

    /**
     * Get the num facture.
     *
     * @return string Returns the num facture.
     */
    public function getNumFacture() {
        return $this->numFacture;
    }

    /**
     * Set the num facture.
     *
     * @param string $numFacture The num facture.
     */
    public function setNumFacture($numFacture) {
        $this->numFacture = $numFacture;
        return $this;
    }
}
