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
 * Arrondi base trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArrondiBaseTrait {

    /**
     * Arrondi base.
     *
     * @var string
     */
    private $arrondiBase;

    /**
     * Get the arrondi base.
     *
     * @return string Returns the arrondi base.
     */
    public function getArrondiBase() {
        return $this->arrondiBase;
    }

    /**
     * Set the arrondi base.
     *
     * @param string $arrondiBase The arrondi base.
     */
    public function setArrondiBase($arrondiBase) {
        $this->arrondiBase = $arrondiBase;
        return $this;
    }
}
