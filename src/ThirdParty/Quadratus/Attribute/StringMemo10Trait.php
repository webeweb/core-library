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
 * Memo10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo10Trait {

    /**
     * Memo10.
     *
     * @var string
     */
    private $memo10;

    /**
     * Get the memo10.
     *
     * @return string Returns the memo10.
     */
    public function getMemo10() {
        return $this->memo10;
    }

    /**
     * Set the memo10.
     *
     * @param string $memo10 The memo10.
     */
    public function setMemo10($memo10) {
        $this->memo10 = $memo10;
        return $this;
    }
}
