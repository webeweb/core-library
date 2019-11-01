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
 * Dim type2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDimType2Trait {

    /**
     * Dim type2.
     *
     * @var string
     */
    private $dimType2;

    /**
     * Get the dim type2.
     *
     * @return string Returns the dim type2.
     */
    public function getDimType2() {
        return $this->dimType2;
    }

    /**
     * Set the dim type2.
     *
     * @param string $dimType2 The dim type2.
     */
    public function setDimType2($dimType2) {
        $this->dimType2 = $dimType2;
        return $this;
    }
}
