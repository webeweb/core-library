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
 * Nature regle6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle6Trait {

    /**
     * Nature regle6.
     *
     * @var string
     */
    private $natureRegle6;

    /**
     * Get the nature regle6.
     *
     * @return string Returns the nature regle6.
     */
    public function getNatureRegle6() {
        return $this->natureRegle6;
    }

    /**
     * Set the nature regle6.
     *
     * @param string $natureRegle6 The nature regle6.
     */
    public function setNatureRegle6($natureRegle6) {
        $this->natureRegle6 = $natureRegle6;
        return $this;
    }
}
