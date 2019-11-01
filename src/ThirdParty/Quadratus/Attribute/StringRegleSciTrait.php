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
 * Regle sci trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleSciTrait {

    /**
     * Regle sci.
     *
     * @var string
     */
    private $regleSci;

    /**
     * Get the regle sci.
     *
     * @return string Returns the regle sci.
     */
    public function getRegleSci() {
        return $this->regleSci;
    }

    /**
     * Set the regle sci.
     *
     * @param string $regleSci The regle sci.
     */
    public function setRegleSci($regleSci) {
        $this->regleSci = $regleSci;
        return $this;
    }
}
