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

use DateTime;

/**
 * Debut modulation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutModulationTrait {

    /**
     * Debut modulation.
     *
     * @var DateTime|null
     */
    private $debutModulation;

    /**
     * Get the debut modulation.
     *
     * @return DateTime|null Returns the debut modulation.
     */
    public function getDebutModulation() {
        return $this->debutModulation;
    }

    /**
     * Set the debut modulation.
     *
     * @param DateTime|null $debutModulation The debut modulation.
     */
    public function setDebutModulation(DateTime $debutModulation = null) {
        $this->debutModulation = $debutModulation;
        return $this;
    }
}
