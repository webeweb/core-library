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
 * Pas saisie des temps trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasSaisieDesTempsTrait {

    /**
     * Pas saisie des temps.
     *
     * @var bool
     */
    private $pasSaisieDesTemps;

    /**
     * Get the pas saisie des temps.
     *
     * @return bool Returns the pas saisie des temps.
     */
    public function getPasSaisieDesTemps() {
        return $this->pasSaisieDesTemps;
    }

    /**
     * Set the pas saisie des temps.
     *
     * @param bool $pasSaisieDesTemps The pas saisie des temps.
     */
    public function setPasSaisieDesTemps($pasSaisieDesTemps) {
        $this->pasSaisieDesTemps = $pasSaisieDesTemps;
        return $this;
    }
}
