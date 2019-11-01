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
 * Date effet radiation cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEffetRadiationCgaTrait {

    /**
     * Date effet radiation cga.
     *
     * @var DateTime|null
     */
    private $dateEffetRadiationCga;

    /**
     * Get the date effet radiation cga.
     *
     * @return DateTime|null Returns the date effet radiation cga.
     */
    public function getDateEffetRadiationCga() {
        return $this->dateEffetRadiationCga;
    }

    /**
     * Set the date effet radiation cga.
     *
     * @param DateTime|null $dateEffetRadiationCga The date effet radiation cga.
     */
    public function setDateEffetRadiationCga(DateTime $dateEffetRadiationCga = null) {
        $this->dateEffetRadiationCga = $dateEffetRadiationCga;
        return $this;
    }
}
