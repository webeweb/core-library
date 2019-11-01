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
 * Tvatlra rib3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvatlraRib3Trait {

    /**
     * Tvatlra rib3.
     *
     * @var string
     */
    private $tvatlraRib3;

    /**
     * Get the tvatlra rib3.
     *
     * @return string Returns the tvatlra rib3.
     */
    public function getTvatlraRib3() {
        return $this->tvatlraRib3;
    }

    /**
     * Set the tvatlra rib3.
     *
     * @param string $tvatlraRib3 The tvatlra rib3.
     */
    public function setTvatlraRib3($tvatlraRib3) {
        $this->tvatlraRib3 = $tvatlraRib3;
        return $this;
    }
}
