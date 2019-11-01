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
 * Gestion pointeuse qgi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPointeuseQgiTrait {

    /**
     * Gestion pointeuse qgi.
     *
     * @var bool
     */
    private $gestionPointeuseQgi;

    /**
     * Get the gestion pointeuse qgi.
     *
     * @return bool Returns the gestion pointeuse qgi.
     */
    public function getGestionPointeuseQgi() {
        return $this->gestionPointeuseQgi;
    }

    /**
     * Set the gestion pointeuse qgi.
     *
     * @param bool $gestionPointeuseQgi The gestion pointeuse qgi.
     */
    public function setGestionPointeuseQgi($gestionPointeuseQgi) {
        $this->gestionPointeuseQgi = $gestionPointeuseQgi;
        return $this;
    }
}
