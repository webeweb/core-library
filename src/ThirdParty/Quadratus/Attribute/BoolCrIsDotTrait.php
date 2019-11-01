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
 * Cr is dot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCrIsDotTrait {

    /**
     * Cr is dot.
     *
     * @var bool
     */
    private $crIsDot;

    /**
     * Get the cr is dot.
     *
     * @return bool Returns the cr is dot.
     */
    public function getCrIsDot() {
        return $this->crIsDot;
    }

    /**
     * Set the cr is dot.
     *
     * @param bool $crIsDot The cr is dot.
     */
    public function setCrIsDot($crIsDot) {
        $this->crIsDot = $crIsDot;
        return $this;
    }
}
