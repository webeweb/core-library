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
 * At bureau5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtBureau5Trait {

    /**
     * At bureau5.
     *
     * @var string
     */
    private $atBureau5;

    /**
     * Get the at bureau5.
     *
     * @return string Returns the at bureau5.
     */
    public function getAtBureau5() {
        return $this->atBureau5;
    }

    /**
     * Set the at bureau5.
     *
     * @param string $atBureau5 The at bureau5.
     */
    public function setAtBureau5($atBureau5) {
        $this->atBureau5 = $atBureau5;
        return $this;
    }
}
