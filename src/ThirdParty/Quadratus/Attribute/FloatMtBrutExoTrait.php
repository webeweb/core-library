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
 * Mt brut exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtBrutExoTrait {

    /**
     * Mt brut exo.
     *
     * @var float
     */
    private $mtBrutExo;

    /**
     * Get the mt brut exo.
     *
     * @return float Returns the mt brut exo.
     */
    public function getMtBrutExo() {
        return $this->mtBrutExo;
    }

    /**
     * Set the mt brut exo.
     *
     * @param float $mtBrutExo The mt brut exo.
     */
    public function setMtBrutExo($mtBrutExo) {
        $this->mtBrutExo = $mtBrutExo;
        return $this;
    }
}
