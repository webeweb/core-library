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
 * Nb dec monnaie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbDecMonnaieTrait {

    /**
     * Nb dec monnaie.
     *
     * @var int
     */
    private $nbDecMonnaie;

    /**
     * Get the nb dec monnaie.
     *
     * @return int Returns the nb dec monnaie.
     */
    public function getNbDecMonnaie() {
        return $this->nbDecMonnaie;
    }

    /**
     * Set the nb dec monnaie.
     *
     * @param int $nbDecMonnaie The nb dec monnaie.
     */
    public function setNbDecMonnaie($nbDecMonnaie) {
        $this->nbDecMonnaie = $nbDecMonnaie;
        return $this;
    }
}
