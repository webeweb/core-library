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
 * From cde type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFromCdeTypeTrait {

    /**
     * From cde type.
     *
     * @var bool
     */
    private $fromCdeType;

    /**
     * Get the from cde type.
     *
     * @return bool Returns the from cde type.
     */
    public function getFromCdeType() {
        return $this->fromCdeType;
    }

    /**
     * Set the from cde type.
     *
     * @param bool $fromCdeType The from cde type.
     */
    public function setFromCdeType($fromCdeType) {
        $this->fromCdeType = $fromCdeType;
        return $this;
    }
}
