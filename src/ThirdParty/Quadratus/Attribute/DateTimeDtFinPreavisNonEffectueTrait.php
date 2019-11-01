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
 * Dt fin preavis non effectue trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDtFinPreavisNonEffectueTrait {

    /**
     * Dt fin preavis non effectue.
     *
     * @var DateTime|null
     */
    private $dtFinPreavisNonEffectue;

    /**
     * Get the dt fin preavis non effectue.
     *
     * @return DateTime|null Returns the dt fin preavis non effectue.
     */
    public function getDtFinPreavisNonEffectue() {
        return $this->dtFinPreavisNonEffectue;
    }

    /**
     * Set the dt fin preavis non effectue.
     *
     * @param DateTime|null $dtFinPreavisNonEffectue The dt fin preavis non effectue.
     */
    public function setDtFinPreavisNonEffectue(DateTime $dtFinPreavisNonEffectue = null) {
        $this->dtFinPreavisNonEffectue = $dtFinPreavisNonEffectue;
        return $this;
    }
}
