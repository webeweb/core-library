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
 * Guid mob trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringGuidMobTrait {

    /**
     * Guid mob.
     *
     * @var string
     */
    private $guidMob;

    /**
     * Get the guid mob.
     *
     * @return string Returns the guid mob.
     */
    public function getGuidMob() {
        return $this->guidMob;
    }

    /**
     * Set the guid mob.
     *
     * @param string $guidMob The guid mob.
     */
    public function setGuidMob($guidMob) {
        $this->guidMob = $guidMob;
        return $this;
    }
}
