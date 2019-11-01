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
 * Saisie temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSaisieTempsTrait {

    /**
     * Saisie temps.
     *
     * @var bool
     */
    private $saisieTemps;

    /**
     * Get the saisie temps.
     *
     * @return bool Returns the saisie temps.
     */
    public function getSaisieTemps() {
        return $this->saisieTemps;
    }

    /**
     * Set the saisie temps.
     *
     * @param bool $saisieTemps The saisie temps.
     */
    public function setSaisieTemps($saisieTemps) {
        $this->saisieTemps = $saisieTemps;
        return $this;
    }
}
