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
 * Numero sous ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroSousLigneTrait {

    /**
     * Numero sous ligne.
     *
     * @var int
     */
    private $numeroSousLigne;

    /**
     * Get the numero sous ligne.
     *
     * @return int Returns the numero sous ligne.
     */
    public function getNumeroSousLigne() {
        return $this->numeroSousLigne;
    }

    /**
     * Set the numero sous ligne.
     *
     * @param int $numeroSousLigne The numero sous ligne.
     */
    public function setNumeroSousLigne($numeroSousLigne) {
        $this->numeroSousLigne = $numeroSousLigne;
        return $this;
    }
}
