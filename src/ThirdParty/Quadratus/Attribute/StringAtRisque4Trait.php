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
 * At risque4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisque4Trait {

    /**
     * At risque4.
     *
     * @var string
     */
    private $atRisque4;

    /**
     * Get the at risque4.
     *
     * @return string Returns the at risque4.
     */
    public function getAtRisque4() {
        return $this->atRisque4;
    }

    /**
     * Set the at risque4.
     *
     * @param string $atRisque4 The at risque4.
     */
    public function setAtRisque4($atRisque4) {
        $this->atRisque4 = $atRisque4;
        return $this;
    }
}
