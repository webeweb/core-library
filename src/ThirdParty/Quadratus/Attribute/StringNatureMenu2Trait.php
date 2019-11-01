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
 * Nature menu2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu2Trait {

    /**
     * Nature menu2.
     *
     * @var string
     */
    private $natureMenu2;

    /**
     * Get the nature menu2.
     *
     * @return string Returns the nature menu2.
     */
    public function getNatureMenu2() {
        return $this->natureMenu2;
    }

    /**
     * Set the nature menu2.
     *
     * @param string $natureMenu2 The nature menu2.
     */
    public function setNatureMenu2($natureMenu2) {
        $this->natureMenu2 = $natureMenu2;
        return $this;
    }
}
