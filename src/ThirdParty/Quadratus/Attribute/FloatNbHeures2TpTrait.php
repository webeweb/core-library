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
 * Nb heures2 tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeures2TpTrait {

    /**
     * Nb heures2 tp.
     *
     * @var float
     */
    private $nbHeures2Tp;

    /**
     * Get the nb heures2 tp.
     *
     * @return float Returns the nb heures2 tp.
     */
    public function getNbHeures2Tp() {
        return $this->nbHeures2Tp;
    }

    /**
     * Set the nb heures2 tp.
     *
     * @param float $nbHeures2Tp The nb heures2 tp.
     */
    public function setNbHeures2Tp($nbHeures2Tp) {
        $this->nbHeures2Tp = $nbHeures2Tp;
        return $this;
    }
}
