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
 * H deb pm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringHDebPmTrait {

    /**
     * H deb pm.
     *
     * @var string
     */
    private $hDebPm;

    /**
     * Get the h deb pm.
     *
     * @return string Returns the h deb pm.
     */
    public function getHDebPm() {
        return $this->hDebPm;
    }

    /**
     * Set the h deb pm.
     *
     * @param string $hDebPm The h deb pm.
     */
    public function setHDebPm($hDebPm) {
        $this->hDebPm = $hDebPm;
        return $this;
    }
}
