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
 * A comptabiliser rc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAComptabiliserRcTrait {

    /**
     * A comptabiliser rc.
     *
     * @var bool
     */
    private $aComptabiliserRc;

    /**
     * Get the a comptabiliser rc.
     *
     * @return bool Returns the a comptabiliser rc.
     */
    public function getAComptabiliserRc() {
        return $this->aComptabiliserRc;
    }

    /**
     * Set the a comptabiliser rc.
     *
     * @param bool $aComptabiliserRc The a comptabiliser rc.
     */
    public function setAComptabiliserRc($aComptabiliserRc) {
        $this->aComptabiliserRc = $aComptabiliserRc;
        return $this;
    }
}
