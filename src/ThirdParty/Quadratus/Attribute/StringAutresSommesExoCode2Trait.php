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
 * Autres sommes exo code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutresSommesExoCode2Trait {

    /**
     * Autres sommes exo code2.
     *
     * @var string
     */
    private $autresSommesExoCode2;

    /**
     * Get the autres sommes exo code2.
     *
     * @return string Returns the autres sommes exo code2.
     */
    public function getAutresSommesExoCode2() {
        return $this->autresSommesExoCode2;
    }

    /**
     * Set the autres sommes exo code2.
     *
     * @param string $autresSommesExoCode2 The autres sommes exo code2.
     */
    public function setAutresSommesExoCode2($autresSommesExoCode2) {
        $this->autresSommesExoCode2 = $autresSommesExoCode2;
        return $this;
    }
}
