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
 * At bureau1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureau1Trait {

    /**
     * At bureau1.
     *
     * @var string
     */
    private $atBureau1;

    /**
     * Get the at bureau1.
     *
     * @return string Returns the at bureau1.
     */
    public function getAtBureau1() {
        return $this->atBureau1;
    }

    /**
     * Set the at bureau1.
     *
     * @param string $atBureau1 The at bureau1.
     */
    public function setAtBureau1($atBureau1) {
        $this->atBureau1 = $atBureau1;
        return $this;
    }
}
