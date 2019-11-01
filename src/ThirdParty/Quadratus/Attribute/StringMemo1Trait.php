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
 * Memo1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo1Trait {

    /**
     * Memo1.
     *
     * @var string
     */
    private $memo1;

    /**
     * Get the memo1.
     *
     * @return string Returns the memo1.
     */
    public function getMemo1() {
        return $this->memo1;
    }

    /**
     * Set the memo1.
     *
     * @param string $memo1 The memo1.
     */
    public function setMemo1($memo1) {
        $this->memo1 = $memo1;
        return $this;
    }
}
