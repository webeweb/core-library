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
 * Memo3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemo3Trait {

    /**
     * Memo3.
     *
     * @var string
     */
    private $memo3;

    /**
     * Get the memo3.
     *
     * @return string Returns the memo3.
     */
    public function getMemo3() {
        return $this->memo3;
    }

    /**
     * Set the memo3.
     *
     * @param string $memo3 The memo3.
     */
    public function setMemo3($memo3) {
        $this->memo3 = $memo3;
        return $this;
    }
}
