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
 * Nature regle7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle7Trait {

    /**
     * Nature regle7.
     *
     * @var string
     */
    private $natureRegle7;

    /**
     * Get the nature regle7.
     *
     * @return string Returns the nature regle7.
     */
    public function getNatureRegle7() {
        return $this->natureRegle7;
    }

    /**
     * Set the nature regle7.
     *
     * @param string $natureRegle7 The nature regle7.
     */
    public function setNatureRegle7($natureRegle7) {
        $this->natureRegle7 = $natureRegle7;
        return $this;
    }
}
