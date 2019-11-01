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
 * Cum base retraite supp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseRetraiteSuppTrait {

    /**
     * Cum base retraite supp.
     *
     * @var float
     */
    private $cumBaseRetraiteSupp;

    /**
     * Get the cum base retraite supp.
     *
     * @return float Returns the cum base retraite supp.
     */
    public function getCumBaseRetraiteSupp() {
        return $this->cumBaseRetraiteSupp;
    }

    /**
     * Set the cum base retraite supp.
     *
     * @param float $cumBaseRetraiteSupp The cum base retraite supp.
     */
    public function setCumBaseRetraiteSupp($cumBaseRetraiteSupp) {
        $this->cumBaseRetraiteSupp = $cumBaseRetraiteSupp;
        return $this;
    }
}
