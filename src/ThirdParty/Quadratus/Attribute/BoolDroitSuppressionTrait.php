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
 * Droit suppression trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitSuppressionTrait {

    /**
     * Droit suppression.
     *
     * @var bool
     */
    private $droitSuppression;

    /**
     * Get the droit suppression.
     *
     * @return bool Returns the droit suppression.
     */
    public function getDroitSuppression() {
        return $this->droitSuppression;
    }

    /**
     * Set the droit suppression.
     *
     * @param bool $droitSuppression The droit suppression.
     */
    public function setDroitSuppression($droitSuppression) {
        $this->droitSuppression = $droitSuppression;
        return $this;
    }
}
