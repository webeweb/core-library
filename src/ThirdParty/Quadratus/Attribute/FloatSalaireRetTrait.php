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
 * Salaire ret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSalaireRetTrait {

    /**
     * Salaire ret.
     *
     * @var float
     */
    private $salaireRet;

    /**
     * Get the salaire ret.
     *
     * @return float Returns the salaire ret.
     */
    public function getSalaireRet() {
        return $this->salaireRet;
    }

    /**
     * Set the salaire ret.
     *
     * @param float $salaireRet The salaire ret.
     */
    public function setSalaireRet($salaireRet) {
        $this->salaireRet = $salaireRet;
        return $this;
    }
}
