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
 * Autres sommes exo mnt4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresSommesExoMnt4Trait {

    /**
     * Autres sommes exo mnt4.
     *
     * @var float
     */
    private $autresSommesExoMnt4;

    /**
     * Get the autres sommes exo mnt4.
     *
     * @return float Returns the autres sommes exo mnt4.
     */
    public function getAutresSommesExoMnt4() {
        return $this->autresSommesExoMnt4;
    }

    /**
     * Set the autres sommes exo mnt4.
     *
     * @param float $autresSommesExoMnt4 The autres sommes exo mnt4.
     */
    public function setAutresSommesExoMnt4($autresSommesExoMnt4) {
        $this->autresSommesExoMnt4 = $autresSommesExoMnt4;
        return $this;
    }
}
