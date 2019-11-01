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
 * Qws utiliser logo cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQwsUtiliserLogoCabinetTrait {

    /**
     * Qws utiliser logo cabinet.
     *
     * @var bool
     */
    private $qwsUtiliserLogoCabinet;

    /**
     * Get the qws utiliser logo cabinet.
     *
     * @return bool Returns the qws utiliser logo cabinet.
     */
    public function getQwsUtiliserLogoCabinet() {
        return $this->qwsUtiliserLogoCabinet;
    }

    /**
     * Set the qws utiliser logo cabinet.
     *
     * @param bool $qwsUtiliserLogoCabinet The qws utiliser logo cabinet.
     */
    public function setQwsUtiliserLogoCabinet($qwsUtiliserLogoCabinet) {
        $this->qwsUtiliserLogoCabinet = $qwsUtiliserLogoCabinet;
        return $this;
    }
}
