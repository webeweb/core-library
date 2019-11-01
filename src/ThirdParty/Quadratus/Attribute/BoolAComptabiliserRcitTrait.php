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
 * A comptabiliser rcit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAComptabiliserRcitTrait {

    /**
     * A comptabiliser rcit.
     *
     * @var bool
     */
    private $aComptabiliserRcit;

    /**
     * Get the a comptabiliser rcit.
     *
     * @return bool Returns the a comptabiliser rcit.
     */
    public function getAComptabiliserRcit() {
        return $this->aComptabiliserRcit;
    }

    /**
     * Set the a comptabiliser rcit.
     *
     * @param bool $aComptabiliserRcit The a comptabiliser rcit.
     */
    public function setAComptabiliserRcit($aComptabiliserRcit) {
        $this->aComptabiliserRcit = $aComptabiliserRcit;
        return $this;
    }
}
