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
 * Ref paiement dgi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefPaiementDgiTrait {

    /**
     * Ref paiement dgi.
     *
     * @var string
     */
    private $refPaiementDgi;

    /**
     * Get the ref paiement dgi.
     *
     * @return string Returns the ref paiement dgi.
     */
    public function getRefPaiementDgi() {
        return $this->refPaiementDgi;
    }

    /**
     * Set the ref paiement dgi.
     *
     * @param string $refPaiementDgi The ref paiement dgi.
     */
    public function setRefPaiementDgi($refPaiementDgi) {
        $this->refPaiementDgi = $refPaiementDgi;
        return $this;
    }
}
