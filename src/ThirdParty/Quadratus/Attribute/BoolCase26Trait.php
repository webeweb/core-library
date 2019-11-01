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
 * Case26 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCase26Trait {

    /**
     * Case26.
     *
     * @var bool
     */
    private $case26;

    /**
     * Get the case26.
     *
     * @return bool Returns the case26.
     */
    public function getCase26() {
        return $this->case26;
    }

    /**
     * Set the case26.
     *
     * @param bool $case26 The case26.
     */
    public function setCase26($case26) {
        $this->case26 = $case26;
        return $this;
    }
}
