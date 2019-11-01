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
 * Nature regle2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle2Trait {

    /**
     * Nature regle2.
     *
     * @var string
     */
    private $natureRegle2;

    /**
     * Get the nature regle2.
     *
     * @return string Returns the nature regle2.
     */
    public function getNatureRegle2() {
        return $this->natureRegle2;
    }

    /**
     * Set the nature regle2.
     *
     * @param string $natureRegle2 The nature regle2.
     */
    public function setNatureRegle2($natureRegle2) {
        $this->natureRegle2 = $natureRegle2;
        return $this;
    }
}
