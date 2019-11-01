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
 * Ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHtTrait {

    /**
     * Ht.
     *
     * @var float
     */
    private $ht;

    /**
     * Get the ht.
     *
     * @return float Returns the ht.
     */
    public function getHt() {
        return $this->ht;
    }

    /**
     * Set the ht.
     *
     * @param float $ht The ht.
     */
    public function setHt($ht) {
        $this->ht = $ht;
        return $this;
    }
}
