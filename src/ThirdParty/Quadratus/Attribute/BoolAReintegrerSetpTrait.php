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
 * A reintegrer setp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAReintegrerSetpTrait {

    /**
     * A reintegrer setp.
     *
     * @var bool
     */
    private $aReintegrerSetp;

    /**
     * Get the a reintegrer setp.
     *
     * @return bool Returns the a reintegrer setp.
     */
    public function getAReintegrerSetp() {
        return $this->aReintegrerSetp;
    }

    /**
     * Set the a reintegrer setp.
     *
     * @param bool $aReintegrerSetp The a reintegrer setp.
     */
    public function setAReintegrerSetp($aReintegrerSetp) {
        $this->aReintegrerSetp = $aReintegrerSetp;
        return $this;
    }
}
