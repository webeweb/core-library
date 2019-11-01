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
 * Dadsu valeur action trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatDadsuValeurActionTrait {

    /**
     * Dadsu valeur action.
     *
     * @var float
     */
    private $dadsuValeurAction;

    /**
     * Get the dadsu valeur action.
     *
     * @return float Returns the dadsu valeur action.
     */
    public function getDadsuValeurAction() {
        return $this->dadsuValeurAction;
    }

    /**
     * Set the dadsu valeur action.
     *
     * @param float $dadsuValeurAction The dadsu valeur action.
     */
    public function setDadsuValeurAction($dadsuValeurAction) {
        $this->dadsuValeurAction = $dadsuValeurAction;
        return $this;
    }
}
