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
 * Nbre h lundi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbreHLundiTrait {

    /**
     * Nbre h lundi.
     *
     * @var float
     */
    private $nbreHLundi;

    /**
     * Get the nbre h lundi.
     *
     * @return float Returns the nbre h lundi.
     */
    public function getNbreHLundi() {
        return $this->nbreHLundi;
    }

    /**
     * Set the nbre h lundi.
     *
     * @param float $nbreHLundi The nbre h lundi.
     */
    public function setNbreHLundi($nbreHLundi) {
        $this->nbreHLundi = $nbreHLundi;
        return $this;
    }
}
