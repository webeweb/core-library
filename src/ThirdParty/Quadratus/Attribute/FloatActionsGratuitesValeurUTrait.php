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
 * Actions gratuites valeur u trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatActionsGratuitesValeurUTrait {

    /**
     * Actions gratuites valeur u.
     *
     * @var float
     */
    private $actionsGratuitesValeurU;

    /**
     * Get the actions gratuites valeur u.
     *
     * @return float Returns the actions gratuites valeur u.
     */
    public function getActionsGratuitesValeurU() {
        return $this->actionsGratuitesValeurU;
    }

    /**
     * Set the actions gratuites valeur u.
     *
     * @param float $actionsGratuitesValeurU The actions gratuites valeur u.
     */
    public function setActionsGratuitesValeurU($actionsGratuitesValeurU) {
        $this->actionsGratuitesValeurU = $actionsGratuitesValeurU;
        return $this;
    }
}
