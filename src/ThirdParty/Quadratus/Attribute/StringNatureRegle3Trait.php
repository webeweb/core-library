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
 * Nature regle3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle3Trait {

    /**
     * Nature regle3.
     *
     * @var string
     */
    private $natureRegle3;

    /**
     * Get the nature regle3.
     *
     * @return string Returns the nature regle3.
     */
    public function getNatureRegle3() {
        return $this->natureRegle3;
    }

    /**
     * Set the nature regle3.
     *
     * @param string $natureRegle3 The nature regle3.
     */
    public function setNatureRegle3($natureRegle3) {
        $this->natureRegle3 = $natureRegle3;
        return $this;
    }
}
