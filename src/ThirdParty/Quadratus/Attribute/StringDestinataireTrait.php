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
 * Destinataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDestinataireTrait {

    /**
     * Destinataire.
     *
     * @var string
     */
    private $destinataire;

    /**
     * Get the destinataire.
     *
     * @return string Returns the destinataire.
     */
    public function getDestinataire() {
        return $this->destinataire;
    }

    /**
     * Set the destinataire.
     *
     * @param string $destinataire The destinataire.
     */
    public function setDestinataire($destinataire) {
        $this->destinataire = $destinataire;
        return $this;
    }
}
