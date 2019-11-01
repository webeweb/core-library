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
 * Start mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringStartMobTrait {

    /**
     * Start mob.
     *
     * @var string
     */
    private $startMob;

    /**
     * Get the start mob.
     *
     * @return string Returns the start mob.
     */
    public function getStartMob() {
        return $this->startMob;
    }

    /**
     * Set the start mob.
     *
     * @param string $startMob The start mob.
     */
    public function setStartMob($startMob) {
        $this->startMob = $startMob;
        return $this;
    }
}
