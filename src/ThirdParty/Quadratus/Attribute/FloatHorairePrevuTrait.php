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
 * Horaire prevu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHorairePrevuTrait {

    /**
     * Horaire prevu.
     *
     * @var float
     */
    private $horairePrevu;

    /**
     * Get the horaire prevu.
     *
     * @return float Returns the horaire prevu.
     */
    public function getHorairePrevu() {
        return $this->horairePrevu;
    }

    /**
     * Set the horaire prevu.
     *
     * @param float $horairePrevu The horaire prevu.
     */
    public function setHorairePrevu($horairePrevu) {
        $this->horairePrevu = $horairePrevu;
        return $this;
    }
}
