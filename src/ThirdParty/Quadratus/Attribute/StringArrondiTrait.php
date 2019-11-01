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
 * Arrondi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArrondiTrait {

    /**
     * Arrondi.
     *
     * @var string
     */
    private $arrondi;

    /**
     * Get the arrondi.
     *
     * @return string Returns the arrondi.
     */
    public function getArrondi() {
        return $this->arrondi;
    }

    /**
     * Set the arrondi.
     *
     * @param string $arrondi The arrondi.
     */
    public function setArrondi($arrondi) {
        $this->arrondi = $arrondi;
        return $this;
    }
}
