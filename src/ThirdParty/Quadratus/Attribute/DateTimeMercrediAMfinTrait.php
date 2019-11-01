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
 * Mercredi a mfin trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMercrediAMfinTrait {

    /**
     * Mercredi a mfin.
     *
     * @var DateTime|null
     */
    private $mercrediAMfin;

    /**
     * Get the mercredi a mfin.
     *
     * @return DateTime|null Returns the mercredi a mfin.
     */
    public function getMercrediAMfin() {
        return $this->mercrediAMfin;
    }

    /**
     * Set the mercredi a mfin.
     *
     * @param DateTime|null $mercrediAMfin The mercredi a mfin.
     */
    public function setMercrediAMfin(DateTime $mercrediAMfin = null) {
        $this->mercrediAMfin = $mercrediAMfin;
        return $this;
    }
}
