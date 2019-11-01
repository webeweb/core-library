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
 * String trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStringTrait {

    /**
     * String.
     *
     * @var string
     */
    private $string;

    /**
     * Get the string.
     *
     * @return string Returns the string.
     */
    public function getString() {
        return $this->string;
    }

    /**
     * Set the string.
     *
     * @param string $string The string.
     */
    public function setString($string) {
        $this->string = $string;
        return $this;
    }
}
