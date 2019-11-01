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
 * Nb bul valides trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulValidesTrait {

    /**
     * Nb bul valides.
     *
     * @var int
     */
    private $nbBulValides;

    /**
     * Get the nb bul valides.
     *
     * @return int Returns the nb bul valides.
     */
    public function getNbBulValides() {
        return $this->nbBulValides;
    }

    /**
     * Set the nb bul valides.
     *
     * @param int $nbBulValides The nb bul valides.
     */
    public function setNbBulValides($nbBulValides) {
        $this->nbBulValides = $nbBulValides;
        return $this;
    }
}
