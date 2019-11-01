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
 * Memo correspondance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMemoCorrespondanceTrait {

    /**
     * Memo correspondance.
     *
     * @var string
     */
    private $memoCorrespondance;

    /**
     * Get the memo correspondance.
     *
     * @return string Returns the memo correspondance.
     */
    public function getMemoCorrespondance() {
        return $this->memoCorrespondance;
    }

    /**
     * Set the memo correspondance.
     *
     * @param string $memoCorrespondance The memo correspondance.
     */
    public function setMemoCorrespondance($memoCorrespondance) {
        $this->memoCorrespondance = $memoCorrespondance;
        return $this;
    }
}
