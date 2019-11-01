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
 * Regle bnc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleBncTrait {

    /**
     * Regle bnc.
     *
     * @var string
     */
    private $regleBnc;

    /**
     * Get the regle bnc.
     *
     * @return string Returns the regle bnc.
     */
    public function getRegleBnc() {
        return $this->regleBnc;
    }

    /**
     * Set the regle bnc.
     *
     * @param string $regleBnc The regle bnc.
     */
    public function setRegleBnc($regleBnc) {
        $this->regleBnc = $regleBnc;
        return $this;
    }
}
