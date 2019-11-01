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
 * Descriptif court trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDescriptifCourtTrait {

    /**
     * Descriptif court.
     *
     * @var string
     */
    private $descriptifCourt;

    /**
     * Get the descriptif court.
     *
     * @return string Returns the descriptif court.
     */
    public function getDescriptifCourt() {
        return $this->descriptifCourt;
    }

    /**
     * Set the descriptif court.
     *
     * @param string $descriptifCourt The descriptif court.
     */
    public function setDescriptifCourt($descriptifCourt) {
        $this->descriptifCourt = $descriptifCourt;
        return $this;
    }
}
