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
 * Nb j pris trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbJPrisTrait {

    /**
     * Nb j pris.
     *
     * @var float
     */
    private $nbJPris;

    /**
     * Get the nb j pris.
     *
     * @return float Returns the nb j pris.
     */
    public function getNbJPris() {
        return $this->nbJPris;
    }

    /**
     * Set the nb j pris.
     *
     * @param float $nbJPris The nb j pris.
     */
    public function setNbJPris($nbJPris) {
        $this->nbJPris = $nbJPris;
        return $this;
    }
}
