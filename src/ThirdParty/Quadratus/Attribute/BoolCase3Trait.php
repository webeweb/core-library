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
 * Case3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase3Trait {

    /**
     * Case3.
     *
     * @var bool
     */
    private $case3;

    /**
     * Get the case3.
     *
     * @return bool Returns the case3.
     */
    public function getCase3() {
        return $this->case3;
    }

    /**
     * Set the case3.
     *
     * @param bool $case3 The case3.
     */
    public function setCase3($case3) {
        $this->case3 = $case3;
        return $this;
    }
}
