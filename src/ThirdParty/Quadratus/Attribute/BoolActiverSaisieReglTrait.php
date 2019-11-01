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
 * Activer saisie regl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiverSaisieReglTrait {

    /**
     * Activer saisie regl.
     *
     * @var bool
     */
    private $activerSaisieRegl;

    /**
     * Get the activer saisie regl.
     *
     * @return bool Returns the activer saisie regl.
     */
    public function getActiverSaisieRegl() {
        return $this->activerSaisieRegl;
    }

    /**
     * Set the activer saisie regl.
     *
     * @param bool $activerSaisieRegl The activer saisie regl.
     */
    public function setActiverSaisieRegl($activerSaisieRegl) {
        $this->activerSaisieRegl = $activerSaisieRegl;
        return $this;
    }
}
