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
 * Date radiation cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateRadiationCgaTrait {

    /**
     * Date radiation cga.
     *
     * @var DateTime|null
     */
    private $dateRadiationCga;

    /**
     * Get the date radiation cga.
     *
     * @return DateTime|null Returns the date radiation cga.
     */
    public function getDateRadiationCga() {
        return $this->dateRadiationCga;
    }

    /**
     * Set the date radiation cga.
     *
     * @param DateTime|null $dateRadiationCga The date radiation cga.
     */
    public function setDateRadiationCga(DateTime $dateRadiationCga = null) {
        $this->dateRadiationCga = $dateRadiationCga;
        return $this;
    }
}
