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
 * Code destinataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeDestinataireTrait {

    /**
     * Code destinataire.
     *
     * @var string
     */
    private $codeDestinataire;

    /**
     * Get the code destinataire.
     *
     * @return string Returns the code destinataire.
     */
    public function getCodeDestinataire() {
        return $this->codeDestinataire;
    }

    /**
     * Set the code destinataire.
     *
     * @param string $codeDestinataire The code destinataire.
     */
    public function setCodeDestinataire($codeDestinataire) {
        $this->codeDestinataire = $codeDestinataire;
        return $this;
    }
}
