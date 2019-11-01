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
 * z ya demande rbt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolzYaDemandeRbtTrait {

    /**
     * z ya demande rbt.
     *
     * @var bool
     */
    private $zYaDemandeRbt;

    /**
     * Get the z ya demande rbt.
     *
     * @return bool Returns the z ya demande rbt.
     */
    public function getzYaDemandeRbt() {
        return $this->zYaDemandeRbt;
    }

    /**
     * Set the z ya demande rbt.
     *
     * @param bool $zYaDemandeRbt The z ya demande rbt.
     */
    public function setzYaDemandeRbt($zYaDemandeRbt) {
        $this->zYaDemandeRbt = $zYaDemandeRbt;
        return $this;
    }
}
