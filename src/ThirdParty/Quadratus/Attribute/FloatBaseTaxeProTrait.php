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
 * Base taxe pro trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatBaseTaxeProTrait {

    /**
     * Base taxe pro.
     *
     * @var float
     */
    private $baseTaxePro;

    /**
     * Get the base taxe pro.
     *
     * @return float Returns the base taxe pro.
     */
    public function getBaseTaxePro() {
        return $this->baseTaxePro;
    }

    /**
     * Set the base taxe pro.
     *
     * @param float $baseTaxePro The base taxe pro.
     */
    public function setBaseTaxePro($baseTaxePro) {
        $this->baseTaxePro = $baseTaxePro;
        return $this;
    }
}
