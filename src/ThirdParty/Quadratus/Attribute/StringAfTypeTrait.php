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
 * Af type trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAfTypeTrait {

    /**
     * Af type.
     *
     * @var string
     */
    private $afType;

    /**
     * Get the af type.
     *
     * @return string Returns the af type.
     */
    public function getAfType() {
        return $this->afType;
    }

    /**
     * Set the af type.
     *
     * @param string $afType The af type.
     */
    public function setAfType($afType) {
        $this->afType = $afType;
        return $this;
    }
}
