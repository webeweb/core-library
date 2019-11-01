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
 * Nature menu3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu3Trait {

    /**
     * Nature menu3.
     *
     * @var string
     */
    private $natureMenu3;

    /**
     * Get the nature menu3.
     *
     * @return string Returns the nature menu3.
     */
    public function getNatureMenu3() {
        return $this->natureMenu3;
    }

    /**
     * Set the nature menu3.
     *
     * @param string $natureMenu3 The nature menu3.
     */
    public function setNatureMenu3($natureMenu3) {
        $this->natureMenu3 = $natureMenu3;
        return $this;
    }
}
