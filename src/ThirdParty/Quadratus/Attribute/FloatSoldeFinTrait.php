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
 * Solde fin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSoldeFinTrait {

    /**
     * Solde fin.
     *
     * @var float
     */
    private $soldeFin;

    /**
     * Get the solde fin.
     *
     * @return float Returns the solde fin.
     */
    public function getSoldeFin() {
        return $this->soldeFin;
    }

    /**
     * Set the solde fin.
     *
     * @param float $soldeFin The solde fin.
     */
    public function setSoldeFin($soldeFin) {
        $this->soldeFin = $soldeFin;
        return $this;
    }
}
