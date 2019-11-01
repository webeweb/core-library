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
 * Code ventil vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilVenteTrait {

    /**
     * Code ventil vente.
     *
     * @var string
     */
    private $codeVentilVente;

    /**
     * Get the code ventil vente.
     *
     * @return string Returns the code ventil vente.
     */
    public function getCodeVentilVente() {
        return $this->codeVentilVente;
    }

    /**
     * Set the code ventil vente.
     *
     * @param string $codeVentilVente The code ventil vente.
     */
    public function setCodeVentilVente($codeVentilVente) {
        $this->codeVentilVente = $codeVentilVente;
        return $this;
    }
}
