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
 * Memo9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo9Trait {

    /**
     * Memo9.
     *
     * @var string
     */
    private $memo9;

    /**
     * Get the memo9.
     *
     * @return string Returns the memo9.
     */
    public function getMemo9() {
        return $this->memo9;
    }

    /**
     * Set the memo9.
     *
     * @param string $memo9 The memo9.
     */
    public function setMemo9($memo9) {
        $this->memo9 = $memo9;
        return $this;
    }
}
