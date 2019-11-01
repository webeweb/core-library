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
 * Trs suivi ca mens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsSuiviCaMensTrait {

    /**
     * Trs suivi ca mens.
     *
     * @var bool
     */
    private $trsSuiviCaMens;

    /**
     * Get the trs suivi ca mens.
     *
     * @return bool Returns the trs suivi ca mens.
     */
    public function getTrsSuiviCaMens() {
        return $this->trsSuiviCaMens;
    }

    /**
     * Set the trs suivi ca mens.
     *
     * @param bool $trsSuiviCaMens The trs suivi ca mens.
     */
    public function setTrsSuiviCaMens($trsSuiviCaMens) {
        $this->trsSuiviCaMens = $trsSuiviCaMens;
        return $this;
    }
}
