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
 * Num web adherent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumWebAdherentTrait {

    /**
     * Num web adherent.
     *
     * @var string
     */
    private $numWebAdherent;

    /**
     * Get the num web adherent.
     *
     * @return string Returns the num web adherent.
     */
    public function getNumWebAdherent() {
        return $this->numWebAdherent;
    }

    /**
     * Set the num web adherent.
     *
     * @param string $numWebAdherent The num web adherent.
     */
    public function setNumWebAdherent($numWebAdherent) {
        $this->numWebAdherent = $numWebAdherent;
        return $this;
    }
}
