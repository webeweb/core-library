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
 * Paiement edi vlu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaiementEdiVluTrait {

    /**
     * Paiement edi vlu.
     *
     * @var bool
     */
    private $paiementEdiVlu;

    /**
     * Get the paiement edi vlu.
     *
     * @return bool Returns the paiement edi vlu.
     */
    public function getPaiementEdiVlu() {
        return $this->paiementEdiVlu;
    }

    /**
     * Set the paiement edi vlu.
     *
     * @param bool $paiementEdiVlu The paiement edi vlu.
     */
    public function setPaiementEdiVlu($paiementEdiVlu) {
        $this->paiementEdiVlu = $paiementEdiVlu;
        return $this;
    }
}
