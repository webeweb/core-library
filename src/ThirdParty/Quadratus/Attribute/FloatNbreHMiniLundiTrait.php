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
 * Nbre h mini lundi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHMiniLundiTrait {

    /**
     * Nbre h mini lundi.
     *
     * @var float
     */
    private $nbreHMiniLundi;

    /**
     * Get the nbre h mini lundi.
     *
     * @return float Returns the nbre h mini lundi.
     */
    public function getNbreHMiniLundi() {
        return $this->nbreHMiniLundi;
    }

    /**
     * Set the nbre h mini lundi.
     *
     * @param float $nbreHMiniLundi The nbre h mini lundi.
     */
    public function setNbreHMiniLundi($nbreHMiniLundi) {
        $this->nbreHMiniLundi = $nbreHMiniLundi;
        return $this;
    }
}
