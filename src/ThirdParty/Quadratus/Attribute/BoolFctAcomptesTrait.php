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
 * Fct acomptes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctAcomptesTrait {

    /**
     * Fct acomptes.
     *
     * @var bool
     */
    private $fctAcomptes;

    /**
     * Get the fct acomptes.
     *
     * @return bool Returns the fct acomptes.
     */
    public function getFctAcomptes() {
        return $this->fctAcomptes;
    }

    /**
     * Set the fct acomptes.
     *
     * @param bool $fctAcomptes The fct acomptes.
     */
    public function setFctAcomptes($fctAcomptes) {
        $this->fctAcomptes = $fctAcomptes;
        return $this;
    }
}
