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
 * Dt deb preavis non effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebPreavisNonEffectueTrait {

    /**
     * Dt deb preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisNonEffectue;

    /**
     * Get the dt deb preavis non effectue.
     *
     * @return DateTime|null Returns the dt deb preavis non effectue.
     */
    public function getDtDebPreavisNonEffectue() {
        return $this->dtDebPreavisNonEffectue;
    }

    /**
     * Set the dt deb preavis non effectue.
     *
     * @param DateTime|null $dtDebPreavisNonEffectue The dt deb preavis non effectue.
     */
    public function setDtDebPreavisNonEffectue(DateTime $dtDebPreavisNonEffectue = null) {
        $this->dtDebPreavisNonEffectue = $dtDebPreavisNonEffectue;
        return $this;
    }
}
