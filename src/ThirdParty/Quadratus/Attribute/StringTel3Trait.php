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
 * Tel3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTel3Trait {

    /**
     * Tel3.
     *
     * @var string
     */
    private $tel3;

    /**
     * Get the tel3.
     *
     * @return string Returns the tel3.
     */
    public function getTel3() {
        return $this->tel3;
    }

    /**
     * Set the tel3.
     *
     * @param string $tel3 The tel3.
     */
    public function setTel3($tel3) {
        $this->tel3 = $tel3;
        return $this;
    }
}
