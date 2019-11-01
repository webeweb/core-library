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
 * Numi key trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumiKeyTrait {

    /**
     * Numi key.
     *
     * @var string
     */
    private $numiKey;

    /**
     * Get the numi key.
     *
     * @return string Returns the numi key.
     */
    public function getNumiKey() {
        return $this->numiKey;
    }

    /**
     * Set the numi key.
     *
     * @param string $numiKey The numi key.
     */
    public function setNumiKey($numiKey) {
        $this->numiKey = $numiKey;
        return $this;
    }
}
