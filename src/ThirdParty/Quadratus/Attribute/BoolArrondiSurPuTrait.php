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
 * Arrondi sur pu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolArrondiSurPuTrait {

    /**
     * Arrondi sur pu.
     *
     * @var bool
     */
    private $arrondiSurPu;

    /**
     * Get the arrondi sur pu.
     *
     * @return bool Returns the arrondi sur pu.
     */
    public function getArrondiSurPu() {
        return $this->arrondiSurPu;
    }

    /**
     * Set the arrondi sur pu.
     *
     * @param bool $arrondiSurPu The arrondi sur pu.
     */
    public function setArrondiSurPu($arrondiSurPu) {
        $this->arrondiSurPu = $arrondiSurPu;
        return $this;
    }
}
