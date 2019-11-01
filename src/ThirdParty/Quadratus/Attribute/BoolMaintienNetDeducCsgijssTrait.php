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
 * Maintien net deduc csgijss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMaintienNetDeducCsgijssTrait {

    /**
     * Maintien net deduc csgijss.
     *
     * @var bool
     */
    private $maintienNetDeducCsgijss;

    /**
     * Get the maintien net deduc csgijss.
     *
     * @return bool Returns the maintien net deduc csgijss.
     */
    public function getMaintienNetDeducCsgijss() {
        return $this->maintienNetDeducCsgijss;
    }

    /**
     * Set the maintien net deduc csgijss.
     *
     * @param bool $maintienNetDeducCsgijss The maintien net deduc csgijss.
     */
    public function setMaintienNetDeducCsgijss($maintienNetDeducCsgijss) {
        $this->maintienNetDeducCsgijss = $maintienNetDeducCsgijss;
        return $this;
    }
}
