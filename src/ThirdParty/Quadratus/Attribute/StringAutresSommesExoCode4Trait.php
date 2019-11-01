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
 * Autres sommes exo code4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutresSommesExoCode4Trait {

    /**
     * Autres sommes exo code4.
     *
     * @var string
     */
    private $autresSommesExoCode4;

    /**
     * Get the autres sommes exo code4.
     *
     * @return string Returns the autres sommes exo code4.
     */
    public function getAutresSommesExoCode4() {
        return $this->autresSommesExoCode4;
    }

    /**
     * Set the autres sommes exo code4.
     *
     * @param string $autresSommesExoCode4 The autres sommes exo code4.
     */
    public function setAutresSommesExoCode4($autresSommesExoCode4) {
        $this->autresSommesExoCode4 = $autresSommesExoCode4;
        return $this;
    }
}
