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
 * P lafond exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPLafondExoTrait {

    /**
     * P lafond exo.
     *
     * @var float
     */
    private $pLafondExo;

    /**
     * Get the p lafond exo.
     *
     * @return float Returns the p lafond exo.
     */
    public function getPLafondExo() {
        return $this->pLafondExo;
    }

    /**
     * Set the p lafond exo.
     *
     * @param float $pLafondExo The p lafond exo.
     */
    public function setPLafondExo($pLafondExo) {
        $this->pLafondExo = $pLafondExo;
        return $this;
    }
}
