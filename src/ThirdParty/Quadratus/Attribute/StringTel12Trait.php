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
 * Tel12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTel12Trait {

    /**
     * Tel12.
     *
     * @var string
     */
    private $tel12;

    /**
     * Get the tel12.
     *
     * @return string Returns the tel12.
     */
    public function getTel12() {
        return $this->tel12;
    }

    /**
     * Set the tel12.
     *
     * @param string $tel12 The tel12.
     */
    public function setTel12($tel12) {
        $this->tel12 = $tel12;
        return $this;
    }
}
