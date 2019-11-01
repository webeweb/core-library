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
 * Memo7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo7Trait {

    /**
     * Memo7.
     *
     * @var string
     */
    private $memo7;

    /**
     * Get the memo7.
     *
     * @return string Returns the memo7.
     */
    public function getMemo7() {
        return $this->memo7;
    }

    /**
     * Set the memo7.
     *
     * @param string $memo7 The memo7.
     */
    public function setMemo7($memo7) {
        $this->memo7 = $memo7;
        return $this;
    }
}
