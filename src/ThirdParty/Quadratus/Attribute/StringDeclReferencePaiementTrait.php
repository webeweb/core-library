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
 * Decl reference paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDeclReferencePaiementTrait {

    /**
     * Decl reference paiement.
     *
     * @var string
     */
    private $declReferencePaiement;

    /**
     * Get the decl reference paiement.
     *
     * @return string Returns the decl reference paiement.
     */
    public function getDeclReferencePaiement() {
        return $this->declReferencePaiement;
    }

    /**
     * Set the decl reference paiement.
     *
     * @param string $declReferencePaiement The decl reference paiement.
     */
    public function setDeclReferencePaiement($declReferencePaiement) {
        $this->declReferencePaiement = $declReferencePaiement;
        return $this;
    }
}
