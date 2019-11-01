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
 * Bt devis deja facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBtDevisDejaFactureTrait {

    /**
     * Bt devis deja facture.
     *
     * @var bool
     */
    private $btDevisDejaFacture;

    /**
     * Get the bt devis deja facture.
     *
     * @return bool Returns the bt devis deja facture.
     */
    public function getBtDevisDejaFacture() {
        return $this->btDevisDejaFacture;
    }

    /**
     * Set the bt devis deja facture.
     *
     * @param bool $btDevisDejaFacture The bt devis deja facture.
     */
    public function setBtDevisDejaFacture($btDevisDejaFacture) {
        $this->btDevisDejaFacture = $btDevisDejaFacture;
        return $this;
    }
}
