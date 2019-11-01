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
 * Signataire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSignataireTrait {

    /**
     * Signataire.
     *
     * @var string
     */
    private $signataire;

    /**
     * Get the signataire.
     *
     * @return string Returns the signataire.
     */
    public function getSignataire() {
        return $this->signataire;
    }

    /**
     * Set the signataire.
     *
     * @param string $signataire The signataire.
     */
    public function setSignataire($signataire) {
        $this->signataire = $signataire;
        return $this;
    }
}
