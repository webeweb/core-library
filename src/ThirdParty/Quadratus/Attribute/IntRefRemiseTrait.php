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
 * Ref remise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntRefRemiseTrait {

    /**
     * Ref remise.
     *
     * @var int
     */
    private $refRemise;

    /**
     * Get the ref remise.
     *
     * @return int Returns the ref remise.
     */
    public function getRefRemise() {
        return $this->refRemise;
    }

    /**
     * Set the ref remise.
     *
     * @param int $refRemise The ref remise.
     */
    public function setRefRemise($refRemise) {
        $this->refRemise = $refRemise;
        return $this;
    }
}
