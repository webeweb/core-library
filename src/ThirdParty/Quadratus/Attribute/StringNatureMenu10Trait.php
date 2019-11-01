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
 * Nature menu10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu10Trait {

    /**
     * Nature menu10.
     *
     * @var string
     */
    private $natureMenu10;

    /**
     * Get the nature menu10.
     *
     * @return string Returns the nature menu10.
     */
    public function getNatureMenu10() {
        return $this->natureMenu10;
    }

    /**
     * Set the nature menu10.
     *
     * @param string $natureMenu10 The nature menu10.
     */
    public function setNatureMenu10($natureMenu10) {
        $this->natureMenu10 = $natureMenu10;
        return $this;
    }
}
