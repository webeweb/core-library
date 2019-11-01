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
 * Nature regle5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle5Trait {

    /**
     * Nature regle5.
     *
     * @var string
     */
    private $natureRegle5;

    /**
     * Get the nature regle5.
     *
     * @return string Returns the nature regle5.
     */
    public function getNatureRegle5() {
        return $this->natureRegle5;
    }

    /**
     * Set the nature regle5.
     *
     * @param string $natureRegle5 The nature regle5.
     */
    public function setNatureRegle5($natureRegle5) {
        $this->natureRegle5 = $natureRegle5;
        return $this;
    }
}
