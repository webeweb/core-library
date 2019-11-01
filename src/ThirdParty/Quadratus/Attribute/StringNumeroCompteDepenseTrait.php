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
 * Numero compte depense trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumeroCompteDepenseTrait {

    /**
     * Numero compte depense.
     *
     * @var string
     */
    private $numeroCompteDepense;

    /**
     * Get the numero compte depense.
     *
     * @return string Returns the numero compte depense.
     */
    public function getNumeroCompteDepense() {
        return $this->numeroCompteDepense;
    }

    /**
     * Set the numero compte depense.
     *
     * @param string $numeroCompteDepense The numero compte depense.
     */
    public function setNumeroCompteDepense($numeroCompteDepense) {
        $this->numeroCompteDepense = $numeroCompteDepense;
        return $this;
    }
}
