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
 * Nb colis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbColisTrait {

    /**
     * Nb colis.
     *
     * @var int
     */
    private $nbColis;

    /**
     * Get the nb colis.
     *
     * @return int Returns the nb colis.
     */
    public function getNbColis() {
        return $this->nbColis;
    }

    /**
     * Set the nb colis.
     *
     * @param int $nbColis The nb colis.
     */
    public function setNbColis($nbColis) {
        $this->nbColis = $nbColis;
        return $this;
    }
}
