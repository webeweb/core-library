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

/**
 * Coeff emploi trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCoeffEmploiTrait {

    /**
     * Coeff emploi.
     *
     * @var string
     */
    private $coeffEmploi;

    /**
     * Get the coeff emploi.
     *
     * @return string Returns the coeff emploi.
     */
    public function getCoeffEmploi() {
        return $this->coeffEmploi;
    }

    /**
     * Set the coeff emploi.
     *
     * @param string $coeffEmploi The coeff emploi.
     */
    public function setCoeffEmploi($coeffEmploi) {
        $this->coeffEmploi = $coeffEmploi;
        return $this;
    }
}
