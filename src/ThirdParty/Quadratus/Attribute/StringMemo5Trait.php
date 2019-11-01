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
 * Memo5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo5Trait {

    /**
     * Memo5.
     *
     * @var string
     */
    private $memo5;

    /**
     * Get the memo5.
     *
     * @return string Returns the memo5.
     */
    public function getMemo5() {
        return $this->memo5;
    }

    /**
     * Set the memo5.
     *
     * @param string $memo5 The memo5.
     */
    public function setMemo5($memo5) {
        $this->memo5 = $memo5;
        return $this;
    }
}
