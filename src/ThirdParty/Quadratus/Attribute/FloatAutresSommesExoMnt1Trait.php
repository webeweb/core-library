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
 * Autres sommes exo mnt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAutresSommesExoMnt1Trait {

    /**
     * Autres sommes exo mnt1.
     *
     * @var float
     */
    private $autresSommesExoMnt1;

    /**
     * Get the autres sommes exo mnt1.
     *
     * @return float Returns the autres sommes exo mnt1.
     */
    public function getAutresSommesExoMnt1() {
        return $this->autresSommesExoMnt1;
    }

    /**
     * Set the autres sommes exo mnt1.
     *
     * @param float $autresSommesExoMnt1 The autres sommes exo mnt1.
     */
    public function setAutresSommesExoMnt1($autresSommesExoMnt1) {
        $this->autresSommesExoMnt1 = $autresSommesExoMnt1;
        return $this;
    }
}
