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
 * Memo2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo2Trait {

    /**
     * Memo2.
     *
     * @var string
     */
    private $memo2;

    /**
     * Get the memo2.
     *
     * @return string Returns the memo2.
     */
    public function getMemo2() {
        return $this->memo2;
    }

    /**
     * Set the memo2.
     *
     * @param string $memo2 The memo2.
     */
    public function setMemo2($memo2) {
        $this->memo2 = $memo2;
        return $this;
    }
}
