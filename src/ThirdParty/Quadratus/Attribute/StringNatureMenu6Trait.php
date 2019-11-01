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
 * Nature menu6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu6Trait {

    /**
     * Nature menu6.
     *
     * @var string
     */
    private $natureMenu6;

    /**
     * Get the nature menu6.
     *
     * @return string Returns the nature menu6.
     */
    public function getNatureMenu6() {
        return $this->natureMenu6;
    }

    /**
     * Set the nature menu6.
     *
     * @param string $natureMenu6 The nature menu6.
     */
    public function setNatureMenu6($natureMenu6) {
        $this->natureMenu6 = $natureMenu6;
        return $this;
    }
}
