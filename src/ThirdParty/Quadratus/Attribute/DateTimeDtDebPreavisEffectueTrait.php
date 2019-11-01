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
 * Dt deb preavis effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtDebPreavisEffectueTrait {

    /**
     * Dt deb preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtDebPreavisEffectue;

    /**
     * Get the dt deb preavis effectue.
     *
     * @return DateTime|null Returns the dt deb preavis effectue.
     */
    public function getDtDebPreavisEffectue() {
        return $this->dtDebPreavisEffectue;
    }

    /**
     * Set the dt deb preavis effectue.
     *
     * @param DateTime|null $dtDebPreavisEffectue The dt deb preavis effectue.
     */
    public function setDtDebPreavisEffectue(DateTime $dtDebPreavisEffectue = null) {
        $this->dtDebPreavisEffectue = $dtDebPreavisEffectue;
        return $this;
    }
}
