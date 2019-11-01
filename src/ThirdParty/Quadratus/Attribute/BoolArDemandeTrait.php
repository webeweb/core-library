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
 * Ar demande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArDemandeTrait {

    /**
     * Ar demande.
     *
     * @var bool
     */
    private $arDemande;

    /**
     * Get the ar demande.
     *
     * @return bool Returns the ar demande.
     */
    public function getArDemande() {
        return $this->arDemande;
    }

    /**
     * Set the ar demande.
     *
     * @param bool $arDemande The ar demande.
     */
    public function setArDemande($arDemande) {
        $this->arDemande = $arDemande;
        return $this;
    }
}
