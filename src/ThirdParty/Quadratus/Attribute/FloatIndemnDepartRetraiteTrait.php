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
 * Indemn depart retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnDepartRetraiteTrait {

    /**
     * Indemn depart retraite.
     *
     * @var float
     */
    private $indemnDepartRetraite;

    /**
     * Get the indemn depart retraite.
     *
     * @return float Returns the indemn depart retraite.
     */
    public function getIndemnDepartRetraite() {
        return $this->indemnDepartRetraite;
    }

    /**
     * Set the indemn depart retraite.
     *
     * @param float $indemnDepartRetraite The indemn depart retraite.
     */
    public function setIndemnDepartRetraite($indemnDepartRetraite) {
        $this->indemnDepartRetraite = $indemnDepartRetraite;
        return $this;
    }
}
