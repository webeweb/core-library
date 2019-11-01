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
 * Nature menu1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu1Trait {

    /**
     * Nature menu1.
     *
     * @var string
     */
    private $natureMenu1;

    /**
     * Get the nature menu1.
     *
     * @return string Returns the nature menu1.
     */
    public function getNatureMenu1() {
        return $this->natureMenu1;
    }

    /**
     * Set the nature menu1.
     *
     * @param string $natureMenu1 The nature menu1.
     */
    public function setNatureMenu1($natureMenu1) {
        $this->natureMenu1 = $natureMenu1;
        return $this;
    }
}
