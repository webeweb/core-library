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
 * Nature menu5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu5Trait {

    /**
     * Nature menu5.
     *
     * @var string
     */
    private $natureMenu5;

    /**
     * Get the nature menu5.
     *
     * @return string Returns the nature menu5.
     */
    public function getNatureMenu5() {
        return $this->natureMenu5;
    }

    /**
     * Set the nature menu5.
     *
     * @param string $natureMenu5 The nature menu5.
     */
    public function setNatureMenu5($natureMenu5) {
        $this->natureMenu5 = $natureMenu5;
        return $this;
    }
}
