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
 * Nb heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresTrait {

    /**
     * Nb heures.
     *
     * @var float
     */
    private $nbHeures;

    /**
     * Get the nb heures.
     *
     * @return float Returns the nb heures.
     */
    public function getNbHeures() {
        return $this->nbHeures;
    }

    /**
     * Set the nb heures.
     *
     * @param float $nbHeures The nb heures.
     */
    public function setNbHeures($nbHeures) {
        $this->nbHeures = $nbHeures;
        return $this;
    }
}
