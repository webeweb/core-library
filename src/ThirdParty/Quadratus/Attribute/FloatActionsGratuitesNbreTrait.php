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
 * Actions gratuites nbre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatActionsGratuitesNbreTrait {

    /**
     * Actions gratuites nbre.
     *
     * @var float
     */
    private $actionsGratuitesNbre;

    /**
     * Get the actions gratuites nbre.
     *
     * @return float Returns the actions gratuites nbre.
     */
    public function getActionsGratuitesNbre() {
        return $this->actionsGratuitesNbre;
    }

    /**
     * Set the actions gratuites nbre.
     *
     * @param float $actionsGratuitesNbre The actions gratuites nbre.
     */
    public function setActionsGratuitesNbre($actionsGratuitesNbre) {
        $this->actionsGratuitesNbre = $actionsGratuitesNbre;
        return $this;
    }
}
