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
 * Unite duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteDureeTrait {

    /**
     * Unite duree.
     *
     * @var string
     */
    private $uniteDuree;

    /**
     * Get the unite duree.
     *
     * @return string Returns the unite duree.
     */
    public function getUniteDuree() {
        return $this->uniteDuree;
    }

    /**
     * Set the unite duree.
     *
     * @param string $uniteDuree The unite duree.
     */
    public function setUniteDuree($uniteDuree) {
        $this->uniteDuree = $uniteDuree;
        return $this;
    }
}
