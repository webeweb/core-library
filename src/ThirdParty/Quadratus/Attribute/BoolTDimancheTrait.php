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
 * T dimanche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTDimancheTrait {

    /**
     * T dimanche.
     *
     * @var bool
     */
    private $tDimanche;

    /**
     * Get the t dimanche.
     *
     * @return bool Returns the t dimanche.
     */
    public function getTDimanche() {
        return $this->tDimanche;
    }

    /**
     * Set the t dimanche.
     *
     * @param bool $tDimanche The t dimanche.
     */
    public function setTDimanche($tDimanche) {
        $this->tDimanche = $tDimanche;
        return $this;
    }
}
