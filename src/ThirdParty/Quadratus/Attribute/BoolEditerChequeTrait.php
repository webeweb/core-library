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
 * Editer cheque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditerChequeTrait {

    /**
     * Editer cheque.
     *
     * @var bool
     */
    private $editerCheque;

    /**
     * Get the editer cheque.
     *
     * @return bool Returns the editer cheque.
     */
    public function getEditerCheque() {
        return $this->editerCheque;
    }

    /**
     * Set the editer cheque.
     *
     * @param bool $editerCheque The editer cheque.
     */
    public function setEditerCheque($editerCheque) {
        $this->editerCheque = $editerCheque;
        return $this;
    }
}
