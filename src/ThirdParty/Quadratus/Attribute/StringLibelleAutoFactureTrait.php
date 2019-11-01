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
 * Libelle auto facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleAutoFactureTrait {

    /**
     * Libelle auto facture.
     *
     * @var string
     */
    private $libelleAutoFacture;

    /**
     * Get the libelle auto facture.
     *
     * @return string Returns the libelle auto facture.
     */
    public function getLibelleAutoFacture() {
        return $this->libelleAutoFacture;
    }

    /**
     * Set the libelle auto facture.
     *
     * @param string $libelleAutoFacture The libelle auto facture.
     */
    public function setLibelleAutoFacture($libelleAutoFacture) {
        $this->libelleAutoFacture = $libelleAutoFacture;
        return $this;
    }
}
