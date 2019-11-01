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
 * Regime groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRegimeGroupeTrait {

    /**
     * Regime groupe.
     *
     * @var bool
     */
    private $regimeGroupe;

    /**
     * Get the regime groupe.
     *
     * @return bool Returns the regime groupe.
     */
    public function getRegimeGroupe() {
        return $this->regimeGroupe;
    }

    /**
     * Set the regime groupe.
     *
     * @param bool $regimeGroupe The regime groupe.
     */
    public function setRegimeGroupe($regimeGroupe) {
        $this->regimeGroupe = $regimeGroupe;
        return $this;
    }
}
