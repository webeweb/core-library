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
 * Effectif etp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEffectifEtpTrait {

    /**
     * Effectif etp.
     *
     * @var int
     */
    private $effectifEtp;

    /**
     * Get the effectif etp.
     *
     * @return int Returns the effectif etp.
     */
    public function getEffectifEtp() {
        return $this->effectifEtp;
    }

    /**
     * Set the effectif etp.
     *
     * @param int $effectifEtp The effectif etp.
     */
    public function setEffectifEtp($effectifEtp) {
        $this->effectifEtp = $effectifEtp;
        return $this;
    }
}
