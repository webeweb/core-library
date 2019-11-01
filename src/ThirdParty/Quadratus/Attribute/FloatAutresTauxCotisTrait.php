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
 * Autres taux cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresTauxCotisTrait {

    /**
     * Autres taux cotis.
     *
     * @var float
     */
    private $autresTauxCotis;

    /**
     * Get the autres taux cotis.
     *
     * @return float Returns the autres taux cotis.
     */
    public function getAutresTauxCotis() {
        return $this->autresTauxCotis;
    }

    /**
     * Set the autres taux cotis.
     *
     * @param float $autresTauxCotis The autres taux cotis.
     */
    public function setAutresTauxCotis($autresTauxCotis) {
        $this->autresTauxCotis = $autresTauxCotis;
        return $this;
    }
}
