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
 * Nature regle1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle1Trait {

    /**
     * Nature regle1.
     *
     * @var string
     */
    private $natureRegle1;

    /**
     * Get the nature regle1.
     *
     * @return string Returns the nature regle1.
     */
    public function getNatureRegle1() {
        return $this->natureRegle1;
    }

    /**
     * Set the nature regle1.
     *
     * @param string $natureRegle1 The nature regle1.
     */
    public function setNatureRegle1($natureRegle1) {
        $this->natureRegle1 = $natureRegle1;
        return $this;
    }
}
