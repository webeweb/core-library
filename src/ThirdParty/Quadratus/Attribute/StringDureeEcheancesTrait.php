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
 * Duree echeances trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDureeEcheancesTrait {

    /**
     * Duree echeances.
     *
     * @var string
     */
    private $dureeEcheances;

    /**
     * Get the duree echeances.
     *
     * @return string Returns the duree echeances.
     */
    public function getDureeEcheances() {
        return $this->dureeEcheances;
    }

    /**
     * Set the duree echeances.
     *
     * @param string $dureeEcheances The duree echeances.
     */
    public function setDureeEcheances($dureeEcheances) {
        $this->dureeEcheances = $dureeEcheances;
        return $this;
    }
}
