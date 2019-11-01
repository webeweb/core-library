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
 * Horaire depassement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHoraireDepassementTrait {

    /**
     * Horaire depassement.
     *
     * @var float
     */
    private $horaireDepassement;

    /**
     * Get the horaire depassement.
     *
     * @return float Returns the horaire depassement.
     */
    public function getHoraireDepassement() {
        return $this->horaireDepassement;
    }

    /**
     * Set the horaire depassement.
     *
     * @param float $horaireDepassement The horaire depassement.
     */
    public function setHoraireDepassement($horaireDepassement) {
        $this->horaireDepassement = $horaireDepassement;
        return $this;
    }
}
