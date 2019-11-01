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
 * Flag tel2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFlagTel2Trait {

    /**
     * Flag tel2.
     *
     * @var string
     */
    private $flagTel2;

    /**
     * Get the flag tel2.
     *
     * @return string Returns the flag tel2.
     */
    public function getFlagTel2() {
        return $this->flagTel2;
    }

    /**
     * Set the flag tel2.
     *
     * @param string $flagTel2 The flag tel2.
     */
    public function setFlagTel2($flagTel2) {
        $this->flagTel2 = $flagTel2;
        return $this;
    }
}
