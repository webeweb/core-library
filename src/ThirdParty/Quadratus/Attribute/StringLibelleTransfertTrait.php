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
 * Libelle transfert trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleTransfertTrait {

    /**
     * Libelle transfert.
     *
     * @var string
     */
    private $libelleTransfert;

    /**
     * Get the libelle transfert.
     *
     * @return string Returns the libelle transfert.
     */
    public function getLibelleTransfert() {
        return $this->libelleTransfert;
    }

    /**
     * Set the libelle transfert.
     *
     * @param string $libelleTransfert The libelle transfert.
     */
    public function setLibelleTransfert($libelleTransfert) {
        $this->libelleTransfert = $libelleTransfert;
        return $this;
    }
}
