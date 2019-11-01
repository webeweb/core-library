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
 * Portable22 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPortable22Trait {

    /**
     * Portable22.
     *
     * @var string
     */
    private $portable22;

    /**
     * Get the portable22.
     *
     * @return string Returns the portable22.
     */
    public function getPortable22() {
        return $this->portable22;
    }

    /**
     * Set the portable22.
     *
     * @param string $portable22 The portable22.
     */
    public function setPortable22($portable22) {
        $this->portable22 = $portable22;
        return $this;
    }
}
