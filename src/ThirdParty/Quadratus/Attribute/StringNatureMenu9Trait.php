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
 * Nature menu9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureMenu9Trait {

    /**
     * Nature menu9.
     *
     * @var string
     */
    private $natureMenu9;

    /**
     * Get the nature menu9.
     *
     * @return string Returns the nature menu9.
     */
    public function getNatureMenu9() {
        return $this->natureMenu9;
    }

    /**
     * Set the nature menu9.
     *
     * @param string $natureMenu9 The nature menu9.
     */
    public function setNatureMenu9($natureMenu9) {
        $this->natureMenu9 = $natureMenu9;
        return $this;
    }
}
