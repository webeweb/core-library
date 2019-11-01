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
 * Tel poste trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPosteTrait {

    /**
     * Tel poste.
     *
     * @var string
     */
    private $telPoste;

    /**
     * Get the tel poste.
     *
     * @return string Returns the tel poste.
     */
    public function getTelPoste() {
        return $this->telPoste;
    }

    /**
     * Set the tel poste.
     *
     * @param string $telPoste The tel poste.
     */
    public function setTelPoste($telPoste) {
        $this->telPoste = $telPoste;
        return $this;
    }
}
