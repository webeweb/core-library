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
 * Releve facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolReleveFactureTrait {

    /**
     * Releve facture.
     *
     * @var bool
     */
    private $releveFacture;

    /**
     * Get the releve facture.
     *
     * @return bool Returns the releve facture.
     */
    public function getReleveFacture() {
        return $this->releveFacture;
    }

    /**
     * Set the releve facture.
     *
     * @param bool $releveFacture The releve facture.
     */
    public function setReleveFacture($releveFacture) {
        $this->releveFacture = $releveFacture;
        return $this;
    }
}
