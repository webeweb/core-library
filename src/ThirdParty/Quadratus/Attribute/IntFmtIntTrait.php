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
 * Fmt int trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntFmtIntTrait {

    /**
     * Fmt int.
     *
     * @var int
     */
    private $fmtInt;

    /**
     * Get the fmt int.
     *
     * @return int Returns the fmt int.
     */
    public function getFmtInt() {
        return $this->fmtInt;
    }

    /**
     * Set the fmt int.
     *
     * @param int $fmtInt The fmt int.
     */
    public function setFmtInt($fmtInt) {
        $this->fmtInt = $fmtInt;
        return $this;
    }
}
