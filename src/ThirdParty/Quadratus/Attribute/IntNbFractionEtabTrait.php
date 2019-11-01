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
 * Nb fraction etab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbFractionEtabTrait {

    /**
     * Nb fraction etab.
     *
     * @var int
     */
    private $nbFractionEtab;

    /**
     * Get the nb fraction etab.
     *
     * @return int Returns the nb fraction etab.
     */
    public function getNbFractionEtab() {
        return $this->nbFractionEtab;
    }

    /**
     * Set the nb fraction etab.
     *
     * @param int $nbFractionEtab The nb fraction etab.
     */
    public function setNbFractionEtab($nbFractionEtab) {
        $this->nbFractionEtab = $nbFractionEtab;
        return $this;
    }
}
