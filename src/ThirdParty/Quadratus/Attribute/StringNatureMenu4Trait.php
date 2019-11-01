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
 * Nature menu4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu4Trait {

    /**
     * Nature menu4.
     *
     * @var string
     */
    private $natureMenu4;

    /**
     * Get the nature menu4.
     *
     * @return string Returns the nature menu4.
     */
    public function getNatureMenu4() {
        return $this->natureMenu4;
    }

    /**
     * Set the nature menu4.
     *
     * @param string $natureMenu4 The nature menu4.
     */
    public function setNatureMenu4($natureMenu4) {
        $this->natureMenu4 = $natureMenu4;
        return $this;
    }
}
