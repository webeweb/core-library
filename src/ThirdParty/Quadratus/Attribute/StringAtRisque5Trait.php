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
 * At risque5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisque5Trait {

    /**
     * At risque5.
     *
     * @var string
     */
    private $atRisque5;

    /**
     * Get the at risque5.
     *
     * @return string Returns the at risque5.
     */
    public function getAtRisque5() {
        return $this->atRisque5;
    }

    /**
     * Set the at risque5.
     *
     * @param string $atRisque5 The at risque5.
     */
    public function setAtRisque5($atRisque5) {
        $this->atRisque5 = $atRisque5;
        return $this;
    }
}
