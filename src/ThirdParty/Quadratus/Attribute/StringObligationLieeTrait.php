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
 * Obligation liee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringObligationLieeTrait {

    /**
     * Obligation liee.
     *
     * @var string
     */
    private $obligationLiee;

    /**
     * Get the obligation liee.
     *
     * @return string Returns the obligation liee.
     */
    public function getObligationLiee() {
        return $this->obligationLiee;
    }

    /**
     * Set the obligation liee.
     *
     * @param string $obligationLiee The obligation liee.
     */
    public function setObligationLiee($obligationLiee) {
        $this->obligationLiee = $obligationLiee;
        return $this;
    }
}
