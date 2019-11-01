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
 * Autres sommes exo mnt2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresSommesExoMnt2Trait {

    /**
     * Autres sommes exo mnt2.
     *
     * @var float
     */
    private $autresSommesExoMnt2;

    /**
     * Get the autres sommes exo mnt2.
     *
     * @return float Returns the autres sommes exo mnt2.
     */
    public function getAutresSommesExoMnt2() {
        return $this->autresSommesExoMnt2;
    }

    /**
     * Set the autres sommes exo mnt2.
     *
     * @param float $autresSommesExoMnt2 The autres sommes exo mnt2.
     */
    public function setAutresSommesExoMnt2($autresSommesExoMnt2) {
        $this->autresSommesExoMnt2 = $autresSommesExoMnt2;
        return $this;
    }
}
