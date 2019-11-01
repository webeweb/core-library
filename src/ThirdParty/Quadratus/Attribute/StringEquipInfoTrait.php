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
 * Equip info trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEquipInfoTrait {

    /**
     * Equip info.
     *
     * @var string
     */
    private $equipInfo;

    /**
     * Get the equip info.
     *
     * @return string Returns the equip info.
     */
    public function getEquipInfo() {
        return $this->equipInfo;
    }

    /**
     * Set the equip info.
     *
     * @param string $equipInfo The equip info.
     */
    public function setEquipInfo($equipInfo) {
        $this->equipInfo = $equipInfo;
        return $this;
    }
}
