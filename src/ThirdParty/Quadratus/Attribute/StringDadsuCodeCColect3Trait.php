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
 * Dadsu code c colect3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsuCodeCColect3Trait {

    /**
     * Dadsu code c colect3.
     *
     * @var string
     */
    private $dadsuCodeCColect3;

    /**
     * Get the dadsu code c colect3.
     *
     * @return string Returns the dadsu code c colect3.
     */
    public function getDadsuCodeCColect3() {
        return $this->dadsuCodeCColect3;
    }

    /**
     * Set the dadsu code c colect3.
     *
     * @param string $dadsuCodeCColect3 The dadsu code c colect3.
     */
    public function setDadsuCodeCColect3($dadsuCodeCColect3) {
        $this->dadsuCodeCColect3 = $dadsuCodeCColect3;
        return $this;
    }
}
