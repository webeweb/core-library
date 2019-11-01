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
 * Param cde trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatParamCdeTrait {

    /**
     * Param cde.
     *
     * @var float
     */
    private $paramCde;

    /**
     * Get the param cde.
     *
     * @return float Returns the param cde.
     */
    public function getParamCde() {
        return $this->paramCde;
    }

    /**
     * Set the param cde.
     *
     * @param float $paramCde The param cde.
     */
    public function setParamCde($paramCde) {
        $this->paramCde = $paramCde;
        return $this;
    }
}
