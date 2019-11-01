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
 * Retour neg trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRetourNegTrait {

    /**
     * Retour neg.
     *
     * @var bool
     */
    private $retourNeg;

    /**
     * Get the retour neg.
     *
     * @return bool Returns the retour neg.
     */
    public function getRetourNeg() {
        return $this->retourNeg;
    }

    /**
     * Set the retour neg.
     *
     * @param bool $retourNeg The retour neg.
     */
    public function setRetourNeg($retourNeg) {
        $this->retourNeg = $retourNeg;
        return $this;
    }
}
