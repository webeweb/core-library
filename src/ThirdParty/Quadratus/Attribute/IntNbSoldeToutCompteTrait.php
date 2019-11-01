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
 * Nb solde tout compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSoldeToutCompteTrait {

    /**
     * Nb solde tout compte.
     *
     * @var int
     */
    private $nbSoldeToutCompte;

    /**
     * Get the nb solde tout compte.
     *
     * @return int Returns the nb solde tout compte.
     */
    public function getNbSoldeToutCompte() {
        return $this->nbSoldeToutCompte;
    }

    /**
     * Set the nb solde tout compte.
     *
     * @param int $nbSoldeToutCompte The nb solde tout compte.
     */
    public function setNbSoldeToutCompte($nbSoldeToutCompte) {
        $this->nbSoldeToutCompte = $nbSoldeToutCompte;
        return $this;
    }
}
