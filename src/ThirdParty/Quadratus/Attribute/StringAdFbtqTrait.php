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
 * Ad fbtq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdFbtqTrait {

    /**
     * Ad fbtq.
     *
     * @var string
     */
    private $adFbtq;

    /**
     * Get the ad fbtq.
     *
     * @return string Returns the ad fbtq.
     */
    public function getAdFbtq() {
        return $this->adFbtq;
    }

    /**
     * Set the ad fbtq.
     *
     * @param string $adFbtq The ad fbtq.
     */
    public function setAdFbtq($adFbtq) {
        $this->adFbtq = $adFbtq;
        return $this;
    }
}
