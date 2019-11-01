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
 * Nb heures1 tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures1TpTrait {

    /**
     * Nb heures1 tp.
     *
     * @var float
     */
    private $nbHeures1Tp;

    /**
     * Get the nb heures1 tp.
     *
     * @return float Returns the nb heures1 tp.
     */
    public function getNbHeures1Tp() {
        return $this->nbHeures1Tp;
    }

    /**
     * Set the nb heures1 tp.
     *
     * @param float $nbHeures1Tp The nb heures1 tp.
     */
    public function setNbHeures1Tp($nbHeures1Tp) {
        $this->nbHeures1Tp = $nbHeures1Tp;
        return $this;
    }
}
