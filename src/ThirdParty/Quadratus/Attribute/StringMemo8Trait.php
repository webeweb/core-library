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
 * Memo8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo8Trait {

    /**
     * Memo8.
     *
     * @var string
     */
    private $memo8;

    /**
     * Get the memo8.
     *
     * @return string Returns the memo8.
     */
    public function getMemo8() {
        return $this->memo8;
    }

    /**
     * Set the memo8.
     *
     * @param string $memo8 The memo8.
     */
    public function setMemo8($memo8) {
        $this->memo8 = $memo8;
        return $this;
    }
}
