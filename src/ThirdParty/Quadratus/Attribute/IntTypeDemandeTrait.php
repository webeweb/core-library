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
 * Type demande trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeDemandeTrait {

    /**
     * Type demande.
     *
     * @var int
     */
    private $typeDemande;

    /**
     * Get the type demande.
     *
     * @return int Returns the type demande.
     */
    public function getTypeDemande() {
        return $this->typeDemande;
    }

    /**
     * Set the type demande.
     *
     * @param int $typeDemande The type demande.
     */
    public function setTypeDemande($typeDemande) {
        $this->typeDemande = $typeDemande;
        return $this;
    }
}
