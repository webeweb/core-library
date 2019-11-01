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
 * At risque2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisque2Trait {

    /**
     * At risque2.
     *
     * @var string
     */
    private $atRisque2;

    /**
     * Get the at risque2.
     *
     * @return string Returns the at risque2.
     */
    public function getAtRisque2() {
        return $this->atRisque2;
    }

    /**
     * Set the at risque2.
     *
     * @param string $atRisque2 The at risque2.
     */
    public function setAtRisque2($atRisque2) {
        $this->atRisque2 = $atRisque2;
        return $this;
    }
}
