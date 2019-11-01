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
 * Impot revenu date limite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeImpotRevenuDateLimiteTrait {

    /**
     * Impot revenu date limite.
     *
     * @var DateTime|null
     */
    private $impotRevenuDateLimite;

    /**
     * Get the impot revenu date limite.
     *
     * @return DateTime|null Returns the impot revenu date limite.
     */
    public function getImpotRevenuDateLimite() {
        return $this->impotRevenuDateLimite;
    }

    /**
     * Set the impot revenu date limite.
     *
     * @param DateTime|null $impotRevenuDateLimite The impot revenu date limite.
     */
    public function setImpotRevenuDateLimite(DateTime $impotRevenuDateLimite = null) {
        $this->impotRevenuDateLimite = $impotRevenuDateLimite;
        return $this;
    }
}
