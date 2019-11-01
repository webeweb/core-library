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
 * Mercredi p mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMercrediPMfinTrait {

    /**
     * Mercredi p mfin.
     *
     * @var DateTime|null
     */
    private $mercrediPMfin;

    /**
     * Get the mercredi p mfin.
     *
     * @return DateTime|null Returns the mercredi p mfin.
     */
    public function getMercrediPMfin() {
        return $this->mercrediPMfin;
    }

    /**
     * Set the mercredi p mfin.
     *
     * @param DateTime|null $mercrediPMfin The mercredi p mfin.
     */
    public function setMercrediPMfin(DateTime $mercrediPMfin = null) {
        $this->mercrediPMfin = $mercrediPMfin;
        return $this;
    }
}
