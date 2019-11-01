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
 * Prct repartition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrctRepartitionTrait {

    /**
     * Prct repartition.
     *
     * @var float
     */
    private $prctRepartition;

    /**
     * Get the prct repartition.
     *
     * @return float Returns the prct repartition.
     */
    public function getPrctRepartition() {
        return $this->prctRepartition;
    }

    /**
     * Set the prct repartition.
     *
     * @param float $prctRepartition The prct repartition.
     */
    public function setPrctRepartition($prctRepartition) {
        $this->prctRepartition = $prctRepartition;
        return $this;
    }
}
