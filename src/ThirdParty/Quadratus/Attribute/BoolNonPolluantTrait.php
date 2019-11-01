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
 * Non polluant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNonPolluantTrait {

    /**
     * Non polluant.
     *
     * @var bool
     */
    private $nonPolluant;

    /**
     * Get the non polluant.
     *
     * @return bool Returns the non polluant.
     */
    public function getNonPolluant() {
        return $this->nonPolluant;
    }

    /**
     * Set the non polluant.
     *
     * @param bool $nonPolluant The non polluant.
     */
    public function setNonPolluant($nonPolluant) {
        $this->nonPolluant = $nonPolluant;
        return $this;
    }
}
