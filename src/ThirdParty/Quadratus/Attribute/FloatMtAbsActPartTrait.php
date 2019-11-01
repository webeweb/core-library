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
 * Mt abs act part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtAbsActPartTrait {

    /**
     * Mt abs act part.
     *
     * @var float
     */
    private $mtAbsActPart;

    /**
     * Get the mt abs act part.
     *
     * @return float Returns the mt abs act part.
     */
    public function getMtAbsActPart() {
        return $this->mtAbsActPart;
    }

    /**
     * Set the mt abs act part.
     *
     * @param float $mtAbsActPart The mt abs act part.
     */
    public function setMtAbsActPart($mtAbsActPart) {
        $this->mtAbsActPart = $mtAbsActPart;
        return $this;
    }
}
