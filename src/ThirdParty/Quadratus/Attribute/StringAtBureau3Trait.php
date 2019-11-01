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
 * At bureau3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureau3Trait {

    /**
     * At bureau3.
     *
     * @var string
     */
    private $atBureau3;

    /**
     * Get the at bureau3.
     *
     * @return string Returns the at bureau3.
     */
    public function getAtBureau3() {
        return $this->atBureau3;
    }

    /**
     * Set the at bureau3.
     *
     * @param string $atBureau3 The at bureau3.
     */
    public function setAtBureau3($atBureau3) {
        $this->atBureau3 = $atBureau3;
        return $this;
    }
}
