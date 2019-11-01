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
 * Code tva vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaVenteTrait {

    /**
     * Code tva vente.
     *
     * @var string
     */
    private $codeTvaVente;

    /**
     * Get the code tva vente.
     *
     * @return string Returns the code tva vente.
     */
    public function getCodeTvaVente() {
        return $this->codeTvaVente;
    }

    /**
     * Set the code tva vente.
     *
     * @param string $codeTvaVente The code tva vente.
     */
    public function setCodeTvaVente($codeTvaVente) {
        $this->codeTvaVente = $codeTvaVente;
        return $this;
    }
}
