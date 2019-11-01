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
 * Nb solde tout compte a deduire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSoldeToutCompteADeduireTrait {

    /**
     * Nb solde tout compte a deduire.
     *
     * @var int
     */
    private $nbSoldeToutCompteADeduire;

    /**
     * Get the nb solde tout compte a deduire.
     *
     * @return int Returns the nb solde tout compte a deduire.
     */
    public function getNbSoldeToutCompteADeduire() {
        return $this->nbSoldeToutCompteADeduire;
    }

    /**
     * Set the nb solde tout compte a deduire.
     *
     * @param int $nbSoldeToutCompteADeduire The nb solde tout compte a deduire.
     */
    public function setNbSoldeToutCompteADeduire($nbSoldeToutCompteADeduire) {
        $this->nbSoldeToutCompteADeduire = $nbSoldeToutCompteADeduire;
        return $this;
    }
}
