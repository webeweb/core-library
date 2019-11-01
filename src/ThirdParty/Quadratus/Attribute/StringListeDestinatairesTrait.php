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
 * Liste destinataires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeDestinatairesTrait {

    /**
     * Liste destinataires.
     *
     * @var string
     */
    private $listeDestinataires;

    /**
     * Get the liste destinataires.
     *
     * @return string Returns the liste destinataires.
     */
    public function getListeDestinataires() {
        return $this->listeDestinataires;
    }

    /**
     * Set the liste destinataires.
     *
     * @param string $listeDestinataires The liste destinataires.
     */
    public function setListeDestinataires($listeDestinataires) {
        $this->listeDestinataires = $listeDestinataires;
        return $this;
    }
}
