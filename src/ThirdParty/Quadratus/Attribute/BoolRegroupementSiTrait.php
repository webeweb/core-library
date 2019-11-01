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
 * Regroupement si trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegroupementSiTrait {

    /**
     * Regroupement si.
     *
     * @var bool
     */
    private $regroupementSi;

    /**
     * Get the regroupement si.
     *
     * @return bool Returns the regroupement si.
     */
    public function getRegroupementSi() {
        return $this->regroupementSi;
    }

    /**
     * Set the regroupement si.
     *
     * @param bool $regroupementSi The regroupement si.
     */
    public function setRegroupementSi($regroupementSi) {
        $this->regroupementSi = $regroupementSi;
        return $this;
    }
}
