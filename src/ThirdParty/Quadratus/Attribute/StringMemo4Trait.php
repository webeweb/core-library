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
 * Memo4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo4Trait {

    /**
     * Memo4.
     *
     * @var string
     */
    private $memo4;

    /**
     * Get the memo4.
     *
     * @return string Returns the memo4.
     */
    public function getMemo4() {
        return $this->memo4;
    }

    /**
     * Set the memo4.
     *
     * @param string $memo4 The memo4.
     */
    public function setMemo4($memo4) {
        $this->memo4 = $memo4;
        return $this;
    }
}
