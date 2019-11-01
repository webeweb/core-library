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
 * Num rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumRemplTrait {

    /**
     * Num rempl.
     *
     * @var int
     */
    private $numRempl;

    /**
     * Get the num rempl.
     *
     * @return int Returns the num rempl.
     */
    public function getNumRempl() {
        return $this->numRempl;
    }

    /**
     * Set the num rempl.
     *
     * @param int $numRempl The num rempl.
     */
    public function setNumRempl($numRempl) {
        $this->numRempl = $numRempl;
        return $this;
    }
}
