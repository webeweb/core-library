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
 * Case17 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase17Trait {

    /**
     * Case17.
     *
     * @var bool
     */
    private $case17;

    /**
     * Get the case17.
     *
     * @return bool Returns the case17.
     */
    public function getCase17() {
        return $this->case17;
    }

    /**
     * Set the case17.
     *
     * @param bool $case17 The case17.
     */
    public function setCase17($case17) {
        $this->case17 = $case17;
        return $this;
    }
}
