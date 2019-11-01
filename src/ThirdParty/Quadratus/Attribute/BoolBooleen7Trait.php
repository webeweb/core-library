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
 * Booleen7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBooleen7Trait {

    /**
     * Booleen7.
     *
     * @var bool
     */
    private $booleen7;

    /**
     * Get the booleen7.
     *
     * @return bool Returns the booleen7.
     */
    public function getBooleen7() {
        return $this->booleen7;
    }

    /**
     * Set the booleen7.
     *
     * @param bool $booleen7 The booleen7.
     */
    public function setBooleen7($booleen7) {
        $this->booleen7 = $booleen7;
        return $this;
    }
}
