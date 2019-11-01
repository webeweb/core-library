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
 * Num col ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumColRefTrait {

    /**
     * Num col ref.
     *
     * @var int
     */
    private $numColRef;

    /**
     * Get the num col ref.
     *
     * @return int Returns the num col ref.
     */
    public function getNumColRef() {
        return $this->numColRef;
    }

    /**
     * Set the num col ref.
     *
     * @param int $numColRef The num col ref.
     */
    public function setNumColRef($numColRef) {
        $this->numColRef = $numColRef;
        return $this;
    }
}
