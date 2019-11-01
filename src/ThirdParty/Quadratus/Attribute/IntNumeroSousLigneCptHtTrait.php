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
 * Numero sous ligne cpt ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroSousLigneCptHtTrait {

    /**
     * Numero sous ligne cpt ht.
     *
     * @var int
     */
    private $numeroSousLigneCptHt;

    /**
     * Get the numero sous ligne cpt ht.
     *
     * @return int Returns the numero sous ligne cpt ht.
     */
    public function getNumeroSousLigneCptHt() {
        return $this->numeroSousLigneCptHt;
    }

    /**
     * Set the numero sous ligne cpt ht.
     *
     * @param int $numeroSousLigneCptHt The numero sous ligne cpt ht.
     */
    public function setNumeroSousLigneCptHt($numeroSousLigneCptHt) {
        $this->numeroSousLigneCptHt = $numeroSousLigneCptHt;
        return $this;
    }
}
