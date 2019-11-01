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
 * Code phase trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePhaseTrait {

    /**
     * Code phase.
     *
     * @var string
     */
    private $codePhase;

    /**
     * Get the code phase.
     *
     * @return string Returns the code phase.
     */
    public function getCodePhase() {
        return $this->codePhase;
    }

    /**
     * Set the code phase.
     *
     * @param string $codePhase The code phase.
     */
    public function setCodePhase($codePhase) {
        $this->codePhase = $codePhase;
        return $this;
    }
}
