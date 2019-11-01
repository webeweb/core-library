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
 * Nature regle9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle9Trait {

    /**
     * Nature regle9.
     *
     * @var string
     */
    private $natureRegle9;

    /**
     * Get the nature regle9.
     *
     * @return string Returns the nature regle9.
     */
    public function getNatureRegle9() {
        return $this->natureRegle9;
    }

    /**
     * Set the nature regle9.
     *
     * @param string $natureRegle9 The nature regle9.
     */
    public function setNatureRegle9($natureRegle9) {
        $this->natureRegle9 = $natureRegle9;
        return $this;
    }
}
