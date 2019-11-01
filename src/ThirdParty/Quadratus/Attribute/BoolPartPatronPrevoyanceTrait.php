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
 * Part patron prevoyance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPartPatronPrevoyanceTrait {

    /**
     * Part patron prevoyance.
     *
     * @var bool
     */
    private $partPatronPrevoyance;

    /**
     * Get the part patron prevoyance.
     *
     * @return bool Returns the part patron prevoyance.
     */
    public function getPartPatronPrevoyance() {
        return $this->partPatronPrevoyance;
    }

    /**
     * Set the part patron prevoyance.
     *
     * @param bool $partPatronPrevoyance The part patron prevoyance.
     */
    public function setPartPatronPrevoyance($partPatronPrevoyance) {
        $this->partPatronPrevoyance = $partPatronPrevoyance;
        return $this;
    }
}
