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
 * Nb h travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHTravailTrait {

    /**
     * Nb h travail.
     *
     * @var float
     */
    private $nbHTravail;

    /**
     * Get the nb h travail.
     *
     * @return float Returns the nb h travail.
     */
    public function getNbHTravail() {
        return $this->nbHTravail;
    }

    /**
     * Set the nb h travail.
     *
     * @param float $nbHTravail The nb h travail.
     */
    public function setNbHTravail($nbHTravail) {
        $this->nbHTravail = $nbHTravail;
        return $this;
    }
}
