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
 * Case21 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase21Trait {

    /**
     * Case21.
     *
     * @var bool
     */
    private $case21;

    /**
     * Get the case21.
     *
     * @return bool Returns the case21.
     */
    public function getCase21() {
        return $this->case21;
    }

    /**
     * Set the case21.
     *
     * @param bool $case21 The case21.
     */
    public function setCase21($case21) {
        $this->case21 = $case21;
        return $this;
    }
}
