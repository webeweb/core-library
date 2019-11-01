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
 * Autres sommes exo mnt3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresSommesExoMnt3Trait {

    /**
     * Autres sommes exo mnt3.
     *
     * @var float
     */
    private $autresSommesExoMnt3;

    /**
     * Get the autres sommes exo mnt3.
     *
     * @return float Returns the autres sommes exo mnt3.
     */
    public function getAutresSommesExoMnt3() {
        return $this->autresSommesExoMnt3;
    }

    /**
     * Set the autres sommes exo mnt3.
     *
     * @param float $autresSommesExoMnt3 The autres sommes exo mnt3.
     */
    public function setAutresSommesExoMnt3($autresSommesExoMnt3) {
        $this->autresSommesExoMnt3 = $autresSommesExoMnt3;
        return $this;
    }
}
