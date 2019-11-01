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
 * Precompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPrecompteTrait {

    /**
     * Precompte.
     *
     * @var float
     */
    private $precompte;

    /**
     * Get the precompte.
     *
     * @return float Returns the precompte.
     */
    public function getPrecompte() {
        return $this->precompte;
    }

    /**
     * Set the precompte.
     *
     * @param float $precompte The precompte.
     */
    public function setPrecompte($precompte) {
        $this->precompte = $precompte;
        return $this;
    }
}
