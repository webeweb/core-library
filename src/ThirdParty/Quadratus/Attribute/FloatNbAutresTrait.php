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
 * Nb autres trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbAutresTrait {

    /**
     * Nb autres.
     *
     * @var float
     */
    private $nbAutres;

    /**
     * Get the nb autres.
     *
     * @return float Returns the nb autres.
     */
    public function getNbAutres() {
        return $this->nbAutres;
    }

    /**
     * Set the nb autres.
     *
     * @param float $nbAutres The nb autres.
     */
    public function setNbAutres($nbAutres) {
        $this->nbAutres = $nbAutres;
        return $this;
    }
}
