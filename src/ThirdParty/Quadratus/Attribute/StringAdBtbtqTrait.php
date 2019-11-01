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
 * Ad btbtq trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAdBtbtqTrait {

    /**
     * Ad btbtq.
     *
     * @var string
     */
    private $adBtbtq;

    /**
     * Get the ad btbtq.
     *
     * @return string Returns the ad btbtq.
     */
    public function getAdBtbtq() {
        return $this->adBtbtq;
    }

    /**
     * Set the ad btbtq.
     *
     * @param string $adBtbtq The ad btbtq.
     */
    public function setAdBtbtq($adBtbtq) {
        $this->adBtbtq = $adBtbtq;
        return $this;
    }
}
