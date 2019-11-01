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
 * Nb heures tp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHeuresTpTrait {

    /**
     * Nb heures tp.
     *
     * @var float
     */
    private $nbHeuresTp;

    /**
     * Get the nb heures tp.
     *
     * @return float Returns the nb heures tp.
     */
    public function getNbHeuresTp() {
        return $this->nbHeuresTp;
    }

    /**
     * Set the nb heures tp.
     *
     * @param float $nbHeuresTp The nb heures tp.
     */
    public function setNbHeuresTp($nbHeuresTp) {
        $this->nbHeuresTp = $nbHeuresTp;
        return $this;
    }
}
