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
 * Tel voiture2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelVoiture2Trait {

    /**
     * Tel voiture2.
     *
     * @var string
     */
    private $telVoiture2;

    /**
     * Get the tel voiture2.
     *
     * @return string Returns the tel voiture2.
     */
    public function getTelVoiture2() {
        return $this->telVoiture2;
    }

    /**
     * Set the tel voiture2.
     *
     * @param string $telVoiture2 The tel voiture2.
     */
    public function setTelVoiture2($telVoiture2) {
        $this->telVoiture2 = $telVoiture2;
        return $this;
    }
}
