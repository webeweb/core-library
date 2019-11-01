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
 * Ca12 mois cloture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCa12MoisClotureTrait {

    /**
     * Ca12 mois cloture.
     *
     * @var int
     */
    private $ca12MoisCloture;

    /**
     * Get the ca12 mois cloture.
     *
     * @return int Returns the ca12 mois cloture.
     */
    public function getCa12MoisCloture() {
        return $this->ca12MoisCloture;
    }

    /**
     * Set the ca12 mois cloture.
     *
     * @param int $ca12MoisCloture The ca12 mois cloture.
     */
    public function setCa12MoisCloture($ca12MoisCloture) {
        $this->ca12MoisCloture = $ca12MoisCloture;
        return $this;
    }
}
