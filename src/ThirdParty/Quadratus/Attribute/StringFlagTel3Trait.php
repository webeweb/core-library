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
 * Flag tel3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFlagTel3Trait {

    /**
     * Flag tel3.
     *
     * @var string
     */
    private $flagTel3;

    /**
     * Get the flag tel3.
     *
     * @return string Returns the flag tel3.
     */
    public function getFlagTel3() {
        return $this->flagTel3;
    }

    /**
     * Set the flag tel3.
     *
     * @param string $flagTel3 The flag tel3.
     */
    public function setFlagTel3($flagTel3) {
        $this->flagTel3 = $flagTel3;
        return $this;
    }
}
