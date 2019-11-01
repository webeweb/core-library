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
 * Num version trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumVersionTrait {

    /**
     * Num version.
     *
     * @var string
     */
    private $numVersion;

    /**
     * Get the num version.
     *
     * @return string Returns the num version.
     */
    public function getNumVersion() {
        return $this->numVersion;
    }

    /**
     * Set the num version.
     *
     * @param string $numVersion The num version.
     */
    public function setNumVersion($numVersion) {
        $this->numVersion = $numVersion;
        return $this;
    }
}
