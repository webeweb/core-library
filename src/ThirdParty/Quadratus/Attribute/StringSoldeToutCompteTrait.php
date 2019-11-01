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
 * Solde tout compte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSoldeToutCompteTrait {

    /**
     * Solde tout compte.
     *
     * @var string
     */
    private $soldeToutCompte;

    /**
     * Get the solde tout compte.
     *
     * @return string Returns the solde tout compte.
     */
    public function getSoldeToutCompte() {
        return $this->soldeToutCompte;
    }

    /**
     * Set the solde tout compte.
     *
     * @param string $soldeToutCompte The solde tout compte.
     */
    public function setSoldeToutCompte($soldeToutCompte) {
        $this->soldeToutCompte = $soldeToutCompte;
        return $this;
    }
}
