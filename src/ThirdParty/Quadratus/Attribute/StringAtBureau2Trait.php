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
 * At bureau2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureau2Trait {

    /**
     * At bureau2.
     *
     * @var string
     */
    private $atBureau2;

    /**
     * Get the at bureau2.
     *
     * @return string Returns the at bureau2.
     */
    public function getAtBureau2() {
        return $this->atBureau2;
    }

    /**
     * Set the at bureau2.
     *
     * @param string $atBureau2 The at bureau2.
     */
    public function setAtBureau2($atBureau2) {
        $this->atBureau2 = $atBureau2;
        return $this;
    }
}
