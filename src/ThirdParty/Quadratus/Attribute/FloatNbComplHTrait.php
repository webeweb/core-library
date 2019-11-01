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
 * Nb compl h trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbComplHTrait {

    /**
     * Nb compl h.
     *
     * @var float
     */
    private $nbComplH;

    /**
     * Get the nb compl h.
     *
     * @return float Returns the nb compl h.
     */
    public function getNbComplH() {
        return $this->nbComplH;
    }

    /**
     * Set the nb compl h.
     *
     * @param float $nbComplH The nb compl h.
     */
    public function setNbComplH($nbComplH) {
        $this->nbComplH = $nbComplH;
        return $this;
    }
}
