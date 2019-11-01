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
 * Tds indemn depart retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTdsIndemnDepartRetraiteTrait {

    /**
     * Tds indemn depart retraite.
     *
     * @var float
     */
    private $tdsIndemnDepartRetraite;

    /**
     * Get the tds indemn depart retraite.
     *
     * @return float Returns the tds indemn depart retraite.
     */
    public function getTdsIndemnDepartRetraite() {
        return $this->tdsIndemnDepartRetraite;
    }

    /**
     * Set the tds indemn depart retraite.
     *
     * @param float $tdsIndemnDepartRetraite The tds indemn depart retraite.
     */
    public function setTdsIndemnDepartRetraite($tdsIndemnDepartRetraite) {
        $this->tdsIndemnDepartRetraite = $tdsIndemnDepartRetraite;
        return $this;
    }
}
