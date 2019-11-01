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
 * Tvatlra rib2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraRib2Trait {

    /**
     * Tvatlra rib2.
     *
     * @var string
     */
    private $tvatlraRib2;

    /**
     * Get the tvatlra rib2.
     *
     * @return string Returns the tvatlra rib2.
     */
    public function getTvatlraRib2() {
        return $this->tvatlraRib2;
    }

    /**
     * Set the tvatlra rib2.
     *
     * @param string $tvatlraRib2 The tvatlra rib2.
     */
    public function setTvatlraRib2($tvatlraRib2) {
        $this->tvatlraRib2 = $tvatlraRib2;
        return $this;
    }
}
