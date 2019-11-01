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
 * Gestion pointeuse qc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionPointeuseQcTrait {

    /**
     * Gestion pointeuse qc.
     *
     * @var bool
     */
    private $gestionPointeuseQc;

    /**
     * Get the gestion pointeuse qc.
     *
     * @return bool Returns the gestion pointeuse qc.
     */
    public function getGestionPointeuseQc() {
        return $this->gestionPointeuseQc;
    }

    /**
     * Set the gestion pointeuse qc.
     *
     * @param bool $gestionPointeuseQc The gestion pointeuse qc.
     */
    public function setGestionPointeuseQc($gestionPointeuseQc) {
        $this->gestionPointeuseQc = $gestionPointeuseQc;
        return $this;
    }
}
