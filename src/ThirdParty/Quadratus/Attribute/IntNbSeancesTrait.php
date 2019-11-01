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
 * Nb seances trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbSeancesTrait {

    /**
     * Nb seances.
     *
     * @var int
     */
    private $nbSeances;

    /**
     * Get the nb seances.
     *
     * @return int Returns the nb seances.
     */
    public function getNbSeances() {
        return $this->nbSeances;
    }

    /**
     * Set the nb seances.
     *
     * @param int $nbSeances The nb seances.
     */
    public function setNbSeances($nbSeances) {
        $this->nbSeances = $nbSeances;
        return $this;
    }
}
