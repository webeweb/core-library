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
 * Repartition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRepartitionTrait {

    /**
     * Repartition.
     *
     * @var float
     */
    private $repartition;

    /**
     * Get the repartition.
     *
     * @return float Returns the repartition.
     */
    public function getRepartition() {
        return $this->repartition;
    }

    /**
     * Set the repartition.
     *
     * @param float $repartition The repartition.
     */
    public function setRepartition($repartition) {
        $this->repartition = $repartition;
        return $this;
    }
}
