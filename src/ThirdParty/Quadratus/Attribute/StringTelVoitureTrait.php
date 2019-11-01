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
 * Tel voiture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelVoitureTrait {

    /**
     * Tel voiture.
     *
     * @var string
     */
    private $telVoiture;

    /**
     * Get the tel voiture.
     *
     * @return string Returns the tel voiture.
     */
    public function getTelVoiture() {
        return $this->telVoiture;
    }

    /**
     * Set the tel voiture.
     *
     * @param string $telVoiture The tel voiture.
     */
    public function setTelVoiture($telVoiture) {
        $this->telVoiture = $telVoiture;
        return $this;
    }
}
