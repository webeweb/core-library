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
 * Nature menu7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu7Trait {

    /**
     * Nature menu7.
     *
     * @var string
     */
    private $natureMenu7;

    /**
     * Get the nature menu7.
     *
     * @return string Returns the nature menu7.
     */
    public function getNatureMenu7() {
        return $this->natureMenu7;
    }

    /**
     * Set the nature menu7.
     *
     * @param string $natureMenu7 The nature menu7.
     */
    public function setNatureMenu7($natureMenu7) {
        $this->natureMenu7 = $natureMenu7;
        return $this;
    }
}
