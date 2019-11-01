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
 * Type paiement bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePaiementBulTrait {

    /**
     * Type paiement bul.
     *
     * @var string
     */
    private $typePaiementBul;

    /**
     * Get the type paiement bul.
     *
     * @return string Returns the type paiement bul.
     */
    public function getTypePaiementBul() {
        return $this->typePaiementBul;
    }

    /**
     * Set the type paiement bul.
     *
     * @param string $typePaiementBul The type paiement bul.
     */
    public function setTypePaiementBul($typePaiementBul) {
        $this->typePaiementBul = $typePaiementBul;
        return $this;
    }
}
