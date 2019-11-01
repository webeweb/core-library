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
 * Mt7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMt7Trait {

    /**
     * Mt7.
     *
     * @var float
     */
    private $mt7;

    /**
     * Get the mt7.
     *
     * @return float Returns the mt7.
     */
    public function getMt7() {
        return $this->mt7;
    }

    /**
     * Set the mt7.
     *
     * @param float $mt7 The mt7.
     */
    public function setMt7($mt7) {
        $this->mt7 = $mt7;
        return $this;
    }
}
