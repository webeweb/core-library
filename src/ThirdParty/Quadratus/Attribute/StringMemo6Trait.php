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
 * Memo6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo6Trait {

    /**
     * Memo6.
     *
     * @var string
     */
    private $memo6;

    /**
     * Get the memo6.
     *
     * @return string Returns the memo6.
     */
    public function getMemo6() {
        return $this->memo6;
    }

    /**
     * Set the memo6.
     *
     * @param string $memo6 The memo6.
     */
    public function setMemo6($memo6) {
        $this->memo6 = $memo6;
        return $this;
    }
}
