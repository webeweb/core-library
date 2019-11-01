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
 * Rof rcm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRofRcmTrait {

    /**
     * Rof rcm.
     *
     * @var string
     */
    private $rofRcm;

    /**
     * Get the rof rcm.
     *
     * @return string Returns the rof rcm.
     */
    public function getRofRcm() {
        return $this->rofRcm;
    }

    /**
     * Set the rof rcm.
     *
     * @param string $rofRcm The rof rcm.
     */
    public function setRofRcm($rofRcm) {
        $this->rofRcm = $rofRcm;
        return $this;
    }
}
