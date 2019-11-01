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
 * Flag trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFlagTrait {

    /**
     * Flag.
     *
     * @var string
     */
    private $flag;

    /**
     * Get the flag.
     *
     * @return string Returns the flag.
     */
    public function getFlag() {
        return $this->flag;
    }

    /**
     * Set the flag.
     *
     * @param string $flag The flag.
     */
    public function setFlag($flag) {
        $this->flag = $flag;
        return $this;
    }
}
