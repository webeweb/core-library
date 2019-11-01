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
 * Nb ecritures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbEcrituresTrait {

    /**
     * Nb ecritures.
     *
     * @var int
     */
    private $nbEcritures;

    /**
     * Get the nb ecritures.
     *
     * @return int Returns the nb ecritures.
     */
    public function getNbEcritures() {
        return $this->nbEcritures;
    }

    /**
     * Set the nb ecritures.
     *
     * @param int $nbEcritures The nb ecritures.
     */
    public function setNbEcritures($nbEcritures) {
        $this->nbEcritures = $nbEcritures;
        return $this;
    }
}
