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
 * Num bt rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumBtRemplTrait {

    /**
     * Num bt rempl.
     *
     * @var int
     */
    private $numBtRempl;

    /**
     * Get the num bt rempl.
     *
     * @return int Returns the num bt rempl.
     */
    public function getNumBtRempl() {
        return $this->numBtRempl;
    }

    /**
     * Set the num bt rempl.
     *
     * @param int $numBtRempl The num bt rempl.
     */
    public function setNumBtRempl($numBtRempl) {
        $this->numBtRempl = $numBtRempl;
        return $this;
    }
}
