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
 * Autres sommes exo code1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutresSommesExoCode1Trait {

    /**
     * Autres sommes exo code1.
     *
     * @var string
     */
    private $autresSommesExoCode1;

    /**
     * Get the autres sommes exo code1.
     *
     * @return string Returns the autres sommes exo code1.
     */
    public function getAutresSommesExoCode1() {
        return $this->autresSommesExoCode1;
    }

    /**
     * Set the autres sommes exo code1.
     *
     * @param string $autresSommesExoCode1 The autres sommes exo code1.
     */
    public function setAutresSommesExoCode1($autresSommesExoCode1) {
        $this->autresSommesExoCode1 = $autresSommesExoCode1;
        return $this;
    }
}
