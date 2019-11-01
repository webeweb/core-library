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
 * Cum base retraite obli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCumBaseRetraiteObliTrait {

    /**
     * Cum base retraite obli.
     *
     * @var float
     */
    private $cumBaseRetraiteObli;

    /**
     * Get the cum base retraite obli.
     *
     * @return float Returns the cum base retraite obli.
     */
    public function getCumBaseRetraiteObli() {
        return $this->cumBaseRetraiteObli;
    }

    /**
     * Set the cum base retraite obli.
     *
     * @param float $cumBaseRetraiteObli The cum base retraite obli.
     */
    public function setCumBaseRetraiteObli($cumBaseRetraiteObli) {
        $this->cumBaseRetraiteObli = $cumBaseRetraiteObli;
        return $this;
    }
}
