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
 * Motif non paie iccp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifNonPaieIccpTrait {

    /**
     * Motif non paie iccp.
     *
     * @var string
     */
    private $motifNonPaieIccp;

    /**
     * Get the motif non paie iccp.
     *
     * @return string Returns the motif non paie iccp.
     */
    public function getMotifNonPaieIccp() {
        return $this->motifNonPaieIccp;
    }

    /**
     * Set the motif non paie iccp.
     *
     * @param string $motifNonPaieIccp The motif non paie iccp.
     */
    public function setMotifNonPaieIccp($motifNonPaieIccp) {
        $this->motifNonPaieIccp = $motifNonPaieIccp;
        return $this;
    }
}
