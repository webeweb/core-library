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
 * Rum trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRumTrait {

    /**
     * Rum.
     *
     * @var string
     */
    private $rum;

    /**
     * Get the rum.
     *
     * @return string Returns the rum.
     */
    public function getRum() {
        return $this->rum;
    }

    /**
     * Set the rum.
     *
     * @param string $rum The rum.
     */
    public function setRum($rum) {
        $this->rum = $rum;
        return $this;
    }
}
