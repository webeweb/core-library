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
 * Case19 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase19Trait {

    /**
     * Case19.
     *
     * @var bool
     */
    private $case19;

    /**
     * Get the case19.
     *
     * @return bool Returns the case19.
     */
    public function getCase19() {
        return $this->case19;
    }

    /**
     * Set the case19.
     *
     * @param bool $case19 The case19.
     */
    public function setCase19($case19) {
        $this->case19 = $case19;
        return $this;
    }
}
