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
 * Autres sommes exo code3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutresSommesExoCode3Trait {

    /**
     * Autres sommes exo code3.
     *
     * @var string
     */
    private $autresSommesExoCode3;

    /**
     * Get the autres sommes exo code3.
     *
     * @return string Returns the autres sommes exo code3.
     */
    public function getAutresSommesExoCode3() {
        return $this->autresSommesExoCode3;
    }

    /**
     * Set the autres sommes exo code3.
     *
     * @param string $autresSommesExoCode3 The autres sommes exo code3.
     */
    public function setAutresSommesExoCode3($autresSommesExoCode3) {
        $this->autresSommesExoCode3 = $autresSommesExoCode3;
        return $this;
    }
}
