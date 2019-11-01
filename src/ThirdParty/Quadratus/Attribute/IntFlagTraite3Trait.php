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
 * Flag traite3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFlagTraite3Trait {

    /**
     * Flag traite3.
     *
     * @var int
     */
    private $flagTraite3;

    /**
     * Get the flag traite3.
     *
     * @return int Returns the flag traite3.
     */
    public function getFlagTraite3() {
        return $this->flagTraite3;
    }

    /**
     * Set the flag traite3.
     *
     * @param int $flagTraite3 The flag traite3.
     */
    public function setFlagTraite3($flagTraite3) {
        $this->flagTraite3 = $flagTraite3;
        return $this;
    }
}
