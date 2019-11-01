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
 * Nb jrtt pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJrttPrisTrait {

    /**
     * Nb jrtt pris.
     *
     * @var float
     */
    private $nbJrttPris;

    /**
     * Get the nb jrtt pris.
     *
     * @return float Returns the nb jrtt pris.
     */
    public function getNbJrttPris() {
        return $this->nbJrttPris;
    }

    /**
     * Set the nb jrtt pris.
     *
     * @param float $nbJrttPris The nb jrtt pris.
     */
    public function setNbJrttPris($nbJrttPris) {
        $this->nbJrttPris = $nbJrttPris;
        return $this;
    }
}
