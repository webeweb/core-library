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
 * At risque3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisque3Trait {

    /**
     * At risque3.
     *
     * @var string
     */
    private $atRisque3;

    /**
     * Get the at risque3.
     *
     * @return string Returns the at risque3.
     */
    public function getAtRisque3() {
        return $this->atRisque3;
    }

    /**
     * Set the at risque3.
     *
     * @param string $atRisque3 The at risque3.
     */
    public function setAtRisque3($atRisque3) {
        $this->atRisque3 = $atRisque3;
        return $this;
    }
}
