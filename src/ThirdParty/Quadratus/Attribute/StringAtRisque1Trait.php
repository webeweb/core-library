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
 * At risque1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAtRisque1Trait {

    /**
     * At risque1.
     *
     * @var string
     */
    private $atRisque1;

    /**
     * Get the at risque1.
     *
     * @return string Returns the at risque1.
     */
    public function getAtRisque1() {
        return $this->atRisque1;
    }

    /**
     * Set the at risque1.
     *
     * @param string $atRisque1 The at risque1.
     */
    public function setAtRisque1($atRisque1) {
        $this->atRisque1 = $atRisque1;
        return $this;
    }
}
