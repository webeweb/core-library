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
 * Multi ech frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMultiEchFrnTrait {

    /**
     * Multi ech frn.
     *
     * @var bool
     */
    private $multiEchFrn;

    /**
     * Get the multi ech frn.
     *
     * @return bool Returns the multi ech frn.
     */
    public function getMultiEchFrn() {
        return $this->multiEchFrn;
    }

    /**
     * Set the multi ech frn.
     *
     * @param bool $multiEchFrn The multi ech frn.
     */
    public function setMultiEchFrn($multiEchFrn) {
        $this->multiEchFrn = $multiEchFrn;
        return $this;
    }
}
