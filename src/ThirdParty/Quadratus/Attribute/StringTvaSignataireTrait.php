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
 * Tva signataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaSignataireTrait {

    /**
     * Tva signataire.
     *
     * @var string
     */
    private $tvaSignataire;

    /**
     * Get the tva signataire.
     *
     * @return string Returns the tva signataire.
     */
    public function getTvaSignataire() {
        return $this->tvaSignataire;
    }

    /**
     * Set the tva signataire.
     *
     * @param string $tvaSignataire The tva signataire.
     */
    public function setTvaSignataire($tvaSignataire) {
        $this->tvaSignataire = $tvaSignataire;
        return $this;
    }
}
