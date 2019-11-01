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
 * Nature regle10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNatureRegle10Trait {

    /**
     * Nature regle10.
     *
     * @var string
     */
    private $natureRegle10;

    /**
     * Get the nature regle10.
     *
     * @return string Returns the nature regle10.
     */
    public function getNatureRegle10() {
        return $this->natureRegle10;
    }

    /**
     * Set the nature regle10.
     *
     * @param string $natureRegle10 The nature regle10.
     */
    public function setNatureRegle10($natureRegle10) {
        $this->natureRegle10 = $natureRegle10;
        return $this;
    }
}
