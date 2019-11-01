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
 * Exo taux patronal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExoTauxPatronalTrait {

    /**
     * Exo taux patronal.
     *
     * @var bool
     */
    private $exoTauxPatronal;

    /**
     * Get the exo taux patronal.
     *
     * @return bool Returns the exo taux patronal.
     */
    public function getExoTauxPatronal() {
        return $this->exoTauxPatronal;
    }

    /**
     * Set the exo taux patronal.
     *
     * @param bool $exoTauxPatronal The exo taux patronal.
     */
    public function setExoTauxPatronal($exoTauxPatronal) {
        $this->exoTauxPatronal = $exoTauxPatronal;
        return $this;
    }
}
