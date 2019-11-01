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
 * Tel portable2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPortable2Trait {

    /**
     * Tel portable2.
     *
     * @var string
     */
    private $telPortable2;

    /**
     * Get the tel portable2.
     *
     * @return string Returns the tel portable2.
     */
    public function getTelPortable2() {
        return $this->telPortable2;
    }

    /**
     * Set the tel portable2.
     *
     * @param string $telPortable2 The tel portable2.
     */
    public function setTelPortable2($telPortable2) {
        $this->telPortable2 = $telPortable2;
        return $this;
    }
}
