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
 * Situation date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeSituationDateLimiteTrait {

    /**
     * Situation date limite.
     *
     * @var DateTime|null
     */
    private $situationDateLimite;

    /**
     * Get the situation date limite.
     *
     * @return DateTime|null Returns the situation date limite.
     */
    public function getSituationDateLimite() {
        return $this->situationDateLimite;
    }

    /**
     * Set the situation date limite.
     *
     * @param DateTime|null $situationDateLimite The situation date limite.
     */
    public function setSituationDateLimite(DateTime $situationDateLimite = null) {
        $this->situationDateLimite = $situationDateLimite;
        return $this;
    }
}
