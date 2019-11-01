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
 * Tvatlra rib1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraRib1Trait {

    /**
     * Tvatlra rib1.
     *
     * @var string
     */
    private $tvatlraRib1;

    /**
     * Get the tvatlra rib1.
     *
     * @return string Returns the tvatlra rib1.
     */
    public function getTvatlraRib1() {
        return $this->tvatlraRib1;
    }

    /**
     * Set the tvatlra rib1.
     *
     * @param string $tvatlraRib1 The tvatlra rib1.
     */
    public function setTvatlraRib1($tvatlraRib1) {
        $this->tvatlraRib1 = $tvatlraRib1;
        return $this;
    }
}
