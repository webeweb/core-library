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
 * Memo accident trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemoAccidentTrait {

    /**
     * Memo accident.
     *
     * @var string
     */
    private $memoAccident;

    /**
     * Get the memo accident.
     *
     * @return string Returns the memo accident.
     */
    public function getMemoAccident() {
        return $this->memoAccident;
    }

    /**
     * Set the memo accident.
     *
     * @param string $memoAccident The memo accident.
     */
    public function setMemoAccident($memoAccident) {
        $this->memoAccident = $memoAccident;
        return $this;
    }
}
