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
 * Flag tel4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFlagTel4Trait {

    /**
     * Flag tel4.
     *
     * @var string
     */
    private $flagTel4;

    /**
     * Get the flag tel4.
     *
     * @return string Returns the flag tel4.
     */
    public function getFlagTel4() {
        return $this->flagTel4;
    }

    /**
     * Set the flag tel4.
     *
     * @param string $flagTel4 The flag tel4.
     */
    public function setFlagTel4($flagTel4) {
        $this->flagTel4 = $flagTel4;
        return $this;
    }
}
