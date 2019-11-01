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
 * Tel4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTel4Trait {

    /**
     * Tel4.
     *
     * @var string
     */
    private $tel4;

    /**
     * Get the tel4.
     *
     * @return string Returns the tel4.
     */
    public function getTel4() {
        return $this->tel4;
    }

    /**
     * Set the tel4.
     *
     * @param string $tel4 The tel4.
     */
    public function setTel4($tel4) {
        $this->tel4 = $tel4;
        return $this;
    }
}
