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
 * Crr type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCrrTypeTrait {

    /**
     * Crr type.
     *
     * @var string
     */
    private $crrType;

    /**
     * Get the crr type.
     *
     * @return string Returns the crr type.
     */
    public function getCrrType() {
        return $this->crrType;
    }

    /**
     * Set the crr type.
     *
     * @param string $crrType The crr type.
     */
    public function setCrrType($crrType) {
        $this->crrType = $crrType;
        return $this;
    }
}
