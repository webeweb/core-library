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
 * At bureau4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureau4Trait {

    /**
     * At bureau4.
     *
     * @var string
     */
    private $atBureau4;

    /**
     * Get the at bureau4.
     *
     * @return string Returns the at bureau4.
     */
    public function getAtBureau4() {
        return $this->atBureau4;
    }

    /**
     * Set the at bureau4.
     *
     * @param string $atBureau4 The at bureau4.
     */
    public function setAtBureau4($atBureau4) {
        $this->atBureau4 = $atBureau4;
        return $this;
    }
}
