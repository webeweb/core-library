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
 * Ad int btq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdIntBtqTrait {

    /**
     * Ad int btq.
     *
     * @var string
     */
    private $adIntBtq;

    /**
     * Get the ad int btq.
     *
     * @return string Returns the ad int btq.
     */
    public function getAdIntBtq() {
        return $this->adIntBtq;
    }

    /**
     * Set the ad int btq.
     *
     * @param string $adIntBtq The ad int btq.
     */
    public function setAdIntBtq($adIntBtq) {
        $this->adIntBtq = $adIntBtq;
        return $this;
    }
}
