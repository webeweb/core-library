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
 * Dt fin preavis effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPreavisEffectueTrait {

    /**
     * Dt fin preavis effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisEffectue;

    /**
     * Get the dt fin preavis effectue.
     *
     * @return DateTime|null Returns the dt fin preavis effectue.
     */
    public function getDtFinPreavisEffectue() {
        return $this->dtFinPreavisEffectue;
    }

    /**
     * Set the dt fin preavis effectue.
     *
     * @param DateTime|null $dtFinPreavisEffectue The dt fin preavis effectue.
     */
    public function setDtFinPreavisEffectue(DateTime $dtFinPreavisEffectue = null) {
        $this->dtFinPreavisEffectue = $dtFinPreavisEffectue;
        return $this;
    }
}
