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
 * Nb h pas droit fillon trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHPasDroitFillonTrait {

    /**
     * Nb h pas droit fillon.
     *
     * @var float
     */
    private $nbHPasDroitFillon;

    /**
     * Get the nb h pas droit fillon.
     *
     * @return float Returns the nb h pas droit fillon.
     */
    public function getNbHPasDroitFillon() {
        return $this->nbHPasDroitFillon;
    }

    /**
     * Set the nb h pas droit fillon.
     *
     * @param float $nbHPasDroitFillon The nb h pas droit fillon.
     */
    public function setNbHPasDroitFillon($nbHPasDroitFillon) {
        $this->nbHPasDroitFillon = $nbHPasDroitFillon;
        return $this;
    }
}
