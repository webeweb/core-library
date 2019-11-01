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
 * Flag traite2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFlagTraite2Trait {

    /**
     * Flag traite2.
     *
     * @var int
     */
    private $flagTraite2;

    /**
     * Get the flag traite2.
     *
     * @return int Returns the flag traite2.
     */
    public function getFlagTraite2() {
        return $this->flagTraite2;
    }

    /**
     * Set the flag traite2.
     *
     * @param int $flagTraite2 The flag traite2.
     */
    public function setFlagTraite2($flagTraite2) {
        $this->flagTraite2 = $flagTraite2;
        return $this;
    }
}
