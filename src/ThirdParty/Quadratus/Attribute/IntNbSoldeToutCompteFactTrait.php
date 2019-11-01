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
 * Nb solde tout compte fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSoldeToutCompteFactTrait {

    /**
     * Nb solde tout compte fact.
     *
     * @var int
     */
    private $nbSoldeToutCompteFact;

    /**
     * Get the nb solde tout compte fact.
     *
     * @return int Returns the nb solde tout compte fact.
     */
    public function getNbSoldeToutCompteFact() {
        return $this->nbSoldeToutCompteFact;
    }

    /**
     * Set the nb solde tout compte fact.
     *
     * @param int $nbSoldeToutCompteFact The nb solde tout compte fact.
     */
    public function setNbSoldeToutCompteFact($nbSoldeToutCompteFact) {
        $this->nbSoldeToutCompteFact = $nbSoldeToutCompteFact;
        return $this;
    }
}
