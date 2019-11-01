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
 * R recup pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRRecupPrisTrait {

    /**
     * R recup pris.
     *
     * @var float
     */
    private $rRecupPris;

    /**
     * Get the r recup pris.
     *
     * @return float Returns the r recup pris.
     */
    public function getRRecupPris() {
        return $this->rRecupPris;
    }

    /**
     * Set the r recup pris.
     *
     * @param float $rRecupPris The r recup pris.
     */
    public function setRRecupPris($rRecupPris) {
        $this->rRecupPris = $rRecupPris;
        return $this;
    }
}
