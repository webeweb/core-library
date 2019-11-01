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
 * Nb caracteres ligne fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbCaracteresLigneFactTrait {

    /**
     * Nb caracteres ligne fact.
     *
     * @var string
     */
    private $nbCaracteresLigneFact;

    /**
     * Get the nb caracteres ligne fact.
     *
     * @return string Returns the nb caracteres ligne fact.
     */
    public function getNbCaracteresLigneFact() {
        return $this->nbCaracteresLigneFact;
    }

    /**
     * Set the nb caracteres ligne fact.
     *
     * @param string $nbCaracteresLigneFact The nb caracteres ligne fact.
     */
    public function setNbCaracteresLigneFact($nbCaracteresLigneFact) {
        $this->nbCaracteresLigneFact = $nbCaracteresLigneFact;
        return $this;
    }
}
