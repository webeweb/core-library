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
 * Nb h sup fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHSupFillonTrait {

    /**
     * Nb h sup fillon.
     *
     * @var float
     */
    private $nbHSupFillon;

    /**
     * Get the nb h sup fillon.
     *
     * @return float Returns the nb h sup fillon.
     */
    public function getNbHSupFillon() {
        return $this->nbHSupFillon;
    }

    /**
     * Set the nb h sup fillon.
     *
     * @param float $nbHSupFillon The nb h sup fillon.
     */
    public function setNbHSupFillon($nbHSupFillon) {
        $this->nbHSupFillon = $nbHSupFillon;
        return $this;
    }
}
