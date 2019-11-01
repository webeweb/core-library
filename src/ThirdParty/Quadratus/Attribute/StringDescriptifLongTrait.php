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
 * Descriptif long trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDescriptifLongTrait {

    /**
     * Descriptif long.
     *
     * @var string
     */
    private $descriptifLong;

    /**
     * Get the descriptif long.
     *
     * @return string Returns the descriptif long.
     */
    public function getDescriptifLong() {
        return $this->descriptifLong;
    }

    /**
     * Set the descriptif long.
     *
     * @param string $descriptifLong The descriptif long.
     */
    public function setDescriptifLong($descriptifLong) {
        $this->descriptifLong = $descriptifLong;
        return $this;
    }
}
