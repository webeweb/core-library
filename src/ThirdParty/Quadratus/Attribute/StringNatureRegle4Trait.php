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
 * Nature regle4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle4Trait {

    /**
     * Nature regle4.
     *
     * @var string
     */
    private $natureRegle4;

    /**
     * Get the nature regle4.
     *
     * @return string Returns the nature regle4.
     */
    public function getNatureRegle4() {
        return $this->natureRegle4;
    }

    /**
     * Set the nature regle4.
     *
     * @param string $natureRegle4 The nature regle4.
     */
    public function setNatureRegle4($natureRegle4) {
        $this->natureRegle4 = $natureRegle4;
        return $this;
    }
}
