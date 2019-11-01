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
 * Gestion repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestionReposCompTrait {

    /**
     * Gestion repos comp.
     *
     * @var bool
     */
    private $gestionReposComp;

    /**
     * Get the gestion repos comp.
     *
     * @return bool Returns the gestion repos comp.
     */
    public function getGestionReposComp() {
        return $this->gestionReposComp;
    }

    /**
     * Set the gestion repos comp.
     *
     * @param bool $gestionReposComp The gestion repos comp.
     */
    public function setGestionReposComp($gestionReposComp) {
        $this->gestionReposComp = $gestionReposComp;
        return $this;
    }
}
