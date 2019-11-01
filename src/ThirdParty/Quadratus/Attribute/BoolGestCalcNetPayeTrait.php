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
 * Gest calc net paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGestCalcNetPayeTrait {

    /**
     * Gest calc net paye.
     *
     * @var bool
     */
    private $gestCalcNetPaye;

    /**
     * Get the gest calc net paye.
     *
     * @return bool Returns the gest calc net paye.
     */
    public function getGestCalcNetPaye() {
        return $this->gestCalcNetPaye;
    }

    /**
     * Set the gest calc net paye.
     *
     * @param bool $gestCalcNetPaye The gest calc net paye.
     */
    public function setGestCalcNetPaye($gestCalcNetPaye) {
        $this->gestCalcNetPaye = $gestCalcNetPaye;
        return $this;
    }
}
