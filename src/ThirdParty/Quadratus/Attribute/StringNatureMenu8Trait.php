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
 * Nature menu8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu8Trait {

    /**
     * Nature menu8.
     *
     * @var string
     */
    private $natureMenu8;

    /**
     * Get the nature menu8.
     *
     * @return string Returns the nature menu8.
     */
    public function getNatureMenu8() {
        return $this->natureMenu8;
    }

    /**
     * Set the nature menu8.
     *
     * @param string $natureMenu8 The nature menu8.
     */
    public function setNatureMenu8($natureMenu8) {
        $this->natureMenu8 = $natureMenu8;
        return $this;
    }
}
