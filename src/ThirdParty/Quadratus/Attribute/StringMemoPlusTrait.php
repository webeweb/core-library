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
 * Memo plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemoPlusTrait {

    /**
     * Memo plus.
     *
     * @var string
     */
    private $memoPlus;

    /**
     * Get the memo plus.
     *
     * @return string Returns the memo plus.
     */
    public function getMemoPlus() {
        return $this->memoPlus;
    }

    /**
     * Set the memo plus.
     *
     * @param string $memoPlus The memo plus.
     */
    public function setMemoPlus($memoPlus) {
        $this->memoPlus = $memoPlus;
        return $this;
    }
}
