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
 * Jointure trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJointureTrait {

    /**
     * Jointure.
     *
     * @var string
     */
    private $jointure;

    /**
     * Get the jointure.
     *
     * @return string Returns the jointure.
     */
    public function getJointure() {
        return $this->jointure;
    }

    /**
     * Set the jointure.
     *
     * @param string $jointure The jointure.
     */
    public function setJointure($jointure) {
        $this->jointure = $jointure;
        return $this;
    }
}
