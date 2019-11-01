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
 * Handicape trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHandicapeTrait {

    /**
     * Handicape.
     *
     * @var bool
     */
    private $handicape;

    /**
     * Get the handicape.
     *
     * @return bool Returns the handicape.
     */
    public function getHandicape() {
        return $this->handicape;
    }

    /**
     * Set the handicape.
     *
     * @param bool $handicape The handicape.
     */
    public function setHandicape($handicape) {
        $this->handicape = $handicape;
        return $this;
    }
}
