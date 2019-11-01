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
 * A conserver setp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAConserverSetpTrait {

    /**
     * A conserver setp.
     *
     * @var bool
     */
    private $aConserverSetp;

    /**
     * Get the a conserver setp.
     *
     * @return bool Returns the a conserver setp.
     */
    public function getAConserverSetp() {
        return $this->aConserverSetp;
    }

    /**
     * Set the a conserver setp.
     *
     * @param bool $aConserverSetp The a conserver setp.
     */
    public function setAConserverSetp($aConserverSetp) {
        $this->aConserverSetp = $aConserverSetp;
        return $this;
    }
}
