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
 * Tel portable1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPortable1Trait {

    /**
     * Tel portable1.
     *
     * @var string
     */
    private $telPortable1;

    /**
     * Get the tel portable1.
     *
     * @return string Returns the tel portable1.
     */
    public function getTelPortable1() {
        return $this->telPortable1;
    }

    /**
     * Set the tel portable1.
     *
     * @param string $telPortable1 The tel portable1.
     */
    public function setTelPortable1($telPortable1) {
        $this->telPortable1 = $telPortable1;
        return $this;
    }
}
