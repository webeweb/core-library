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
 * Heures periode initial trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHeuresPeriodeInitialTrait {

    /**
     * Heures periode initial.
     *
     * @var float
     */
    private $heuresPeriodeInitial;

    /**
     * Get the heures periode initial.
     *
     * @return float Returns the heures periode initial.
     */
    public function getHeuresPeriodeInitial() {
        return $this->heuresPeriodeInitial;
    }

    /**
     * Set the heures periode initial.
     *
     * @param float $heuresPeriodeInitial The heures periode initial.
     */
    public function setHeuresPeriodeInitial($heuresPeriodeInitial) {
        $this->heuresPeriodeInitial = $heuresPeriodeInitial;
        return $this;
    }
}
