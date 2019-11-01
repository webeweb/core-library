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
 * Nb heures previsionnel trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresPrevisionnelTrait {

    /**
     * Nb heures previsionnel.
     *
     * @var float
     */
    private $nbHeuresPrevisionnel;

    /**
     * Get the nb heures previsionnel.
     *
     * @return float Returns the nb heures previsionnel.
     */
    public function getNbHeuresPrevisionnel() {
        return $this->nbHeuresPrevisionnel;
    }

    /**
     * Set the nb heures previsionnel.
     *
     * @param float $nbHeuresPrevisionnel The nb heures previsionnel.
     */
    public function setNbHeuresPrevisionnel($nbHeuresPrevisionnel) {
        $this->nbHeuresPrevisionnel = $nbHeuresPrevisionnel;
        return $this;
    }
}
