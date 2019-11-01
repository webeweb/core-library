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
 * Saisonnier prec trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSaisonnierPrecTrait {

    /**
     * Saisonnier prec.
     *
     * @var string
     */
    private $saisonnierPrec;

    /**
     * Get the saisonnier prec.
     *
     * @return string Returns the saisonnier prec.
     */
    public function getSaisonnierPrec() {
        return $this->saisonnierPrec;
    }

    /**
     * Set the saisonnier prec.
     *
     * @param string $saisonnierPrec The saisonnier prec.
     */
    public function setSaisonnierPrec($saisonnierPrec) {
        $this->saisonnierPrec = $saisonnierPrec;
        return $this;
    }
}
