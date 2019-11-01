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
 * Multi ech par code lib auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiEchParCodeLibAutoTrait {

    /**
     * Multi ech par code lib auto.
     *
     * @var bool
     */
    private $multiEchParCodeLibAuto;

    /**
     * Get the multi ech par code lib auto.
     *
     * @return bool Returns the multi ech par code lib auto.
     */
    public function getMultiEchParCodeLibAuto() {
        return $this->multiEchParCodeLibAuto;
    }

    /**
     * Set the multi ech par code lib auto.
     *
     * @param bool $multiEchParCodeLibAuto The multi ech par code lib auto.
     */
    public function setMultiEchParCodeLibAuto($multiEchParCodeLibAuto) {
        $this->multiEchParCodeLibAuto = $multiEchParCodeLibAuto;
        return $this;
    }
}
