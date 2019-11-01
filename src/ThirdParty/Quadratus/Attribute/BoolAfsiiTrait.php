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
 * Afsii trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAfsiiTrait {

    /**
     * Afsii.
     *
     * @var bool
     */
    private $afsii;

    /**
     * Get the afsii.
     *
     * @return bool Returns the afsii.
     */
    public function getAfsii() {
        return $this->afsii;
    }

    /**
     * Set the afsii.
     *
     * @param bool $afsii The afsii.
     */
    public function setAfsii($afsii) {
        $this->afsii = $afsii;
        return $this;
    }
}
