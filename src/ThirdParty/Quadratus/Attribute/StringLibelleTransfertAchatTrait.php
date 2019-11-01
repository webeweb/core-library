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
 * Libelle transfert achat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleTransfertAchatTrait {

    /**
     * Libelle transfert achat.
     *
     * @var string
     */
    private $libelleTransfertAchat;

    /**
     * Get the libelle transfert achat.
     *
     * @return string Returns the libelle transfert achat.
     */
    public function getLibelleTransfertAchat() {
        return $this->libelleTransfertAchat;
    }

    /**
     * Set the libelle transfert achat.
     *
     * @param string $libelleTransfertAchat The libelle transfert achat.
     */
    public function setLibelleTransfertAchat($libelleTransfertAchat) {
        $this->libelleTransfertAchat = $libelleTransfertAchat;
        return $this;
    }
}
