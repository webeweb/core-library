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
 * Preparation tdp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPreparationTdpTrait {

    /**
     * Preparation tdp.
     *
     * @var bool
     */
    private $preparationTdp;

    /**
     * Get the preparation tdp.
     *
     * @return bool Returns the preparation tdp.
     */
    public function getPreparationTdp() {
        return $this->preparationTdp;
    }

    /**
     * Set the preparation tdp.
     *
     * @param bool $preparationTdp The preparation tdp.
     */
    public function setPreparationTdp($preparationTdp) {
        $this->preparationTdp = $preparationTdp;
        return $this;
    }
}
