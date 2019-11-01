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
 * Fct modif acomptes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFctModifAcomptesTrait {

    /**
     * Fct modif acomptes.
     *
     * @var bool
     */
    private $fctModifAcomptes;

    /**
     * Get the fct modif acomptes.
     *
     * @return bool Returns the fct modif acomptes.
     */
    public function getFctModifAcomptes() {
        return $this->fctModifAcomptes;
    }

    /**
     * Set the fct modif acomptes.
     *
     * @param bool $fctModifAcomptes The fct modif acomptes.
     */
    public function setFctModifAcomptes($fctModifAcomptes) {
        $this->fctModifAcomptes = $fctModifAcomptes;
        return $this;
    }
}
