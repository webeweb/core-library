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
 * Type paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypePaiementTrait {

    /**
     * Type paiement.
     *
     * @var string
     */
    private $typePaiement;

    /**
     * Get the type paiement.
     *
     * @return string Returns the type paiement.
     */
    public function getTypePaiement() {
        return $this->typePaiement;
    }

    /**
     * Set the type paiement.
     *
     * @param string $typePaiement The type paiement.
     */
    public function setTypePaiement($typePaiement) {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
