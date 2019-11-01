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
 * Centralisation vente trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCentralisationVenteTrait {

    /**
     * Centralisation vente.
     *
     * @var bool
     */
    private $centralisationVente;

    /**
     * Get the centralisation vente.
     *
     * @return bool Returns the centralisation vente.
     */
    public function getCentralisationVente() {
        return $this->centralisationVente;
    }

    /**
     * Set the centralisation vente.
     *
     * @param bool $centralisationVente The centralisation vente.
     */
    public function setCentralisationVente($centralisationVente) {
        $this->centralisationVente = $centralisationVente;
        return $this;
    }
}
