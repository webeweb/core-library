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
 * Fct table bord trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctTableBordTrait {

    /**
     * Fct table bord.
     *
     * @var bool
     */
    private $fctTableBord;

    /**
     * Get the fct table bord.
     *
     * @return bool Returns the fct table bord.
     */
    public function getFctTableBord() {
        return $this->fctTableBord;
    }

    /**
     * Set the fct table bord.
     *
     * @param bool $fctTableBord The fct table bord.
     */
    public function setFctTableBord($fctTableBord) {
        $this->fctTableBord = $fctTableBord;
        return $this;
    }
}
