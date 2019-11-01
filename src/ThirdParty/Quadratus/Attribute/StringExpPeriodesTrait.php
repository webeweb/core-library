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
 * Exp periodes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringExpPeriodesTrait {

    /**
     * Exp periodes.
     *
     * @var string
     */
    private $expPeriodes;

    /**
     * Get the exp periodes.
     *
     * @return string Returns the exp periodes.
     */
    public function getExpPeriodes() {
        return $this->expPeriodes;
    }

    /**
     * Set the exp periodes.
     *
     * @param string $expPeriodes The exp periodes.
     */
    public function setExpPeriodes($expPeriodes) {
        $this->expPeriodes = $expPeriodes;
        return $this;
    }
}
