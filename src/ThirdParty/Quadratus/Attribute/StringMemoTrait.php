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
 * Memo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemoTrait {

    /**
     * Memo.
     *
     * @var string
     */
    private $memo;

    /**
     * Get the memo.
     *
     * @return string Returns the memo.
     */
    public function getMemo() {
        return $this->memo;
    }

    /**
     * Set the memo.
     *
     * @param string $memo The memo.
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }
}
