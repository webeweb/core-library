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
 * Arrondi cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArrondiCotisTrait {

    /**
     * Arrondi cotis.
     *
     * @var string
     */
    private $arrondiCotis;

    /**
     * Get the arrondi cotis.
     *
     * @return string Returns the arrondi cotis.
     */
    public function getArrondiCotis() {
        return $this->arrondiCotis;
    }

    /**
     * Set the arrondi cotis.
     *
     * @param string $arrondiCotis The arrondi cotis.
     */
    public function setArrondiCotis($arrondiCotis) {
        $this->arrondiCotis = $arrondiCotis;
        return $this;
    }
}
