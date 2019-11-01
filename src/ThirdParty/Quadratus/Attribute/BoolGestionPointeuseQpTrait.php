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
 * Gestion pointeuse qp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPointeuseQpTrait {

    /**
     * Gestion pointeuse qp.
     *
     * @var bool
     */
    private $gestionPointeuseQp;

    /**
     * Get the gestion pointeuse qp.
     *
     * @return bool Returns the gestion pointeuse qp.
     */
    public function getGestionPointeuseQp() {
        return $this->gestionPointeuseQp;
    }

    /**
     * Set the gestion pointeuse qp.
     *
     * @param bool $gestionPointeuseQp The gestion pointeuse qp.
     */
    public function setGestionPointeuseQp($gestionPointeuseQp) {
        $this->gestionPointeuseQp = $gestionPointeuseQp;
        return $this;
    }
}
