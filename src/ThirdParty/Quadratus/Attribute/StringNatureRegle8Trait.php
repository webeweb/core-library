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
 * Nature regle8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle8Trait {

    /**
     * Nature regle8.
     *
     * @var string
     */
    private $natureRegle8;

    /**
     * Get the nature regle8.
     *
     * @return string Returns the nature regle8.
     */
    public function getNatureRegle8() {
        return $this->natureRegle8;
    }

    /**
     * Set the nature regle8.
     *
     * @param string $natureRegle8 The nature regle8.
     */
    public function setNatureRegle8($natureRegle8) {
        $this->natureRegle8 = $natureRegle8;
        return $this;
    }
}
