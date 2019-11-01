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
 * Tel personne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelPersonneTrait {

    /**
     * Tel personne.
     *
     * @var string
     */
    private $telPersonne;

    /**
     * Get the tel personne.
     *
     * @return string Returns the tel personne.
     */
    public function getTelPersonne() {
        return $this->telPersonne;
    }

    /**
     * Set the tel personne.
     *
     * @param string $telPersonne The tel personne.
     */
    public function setTelPersonne($telPersonne) {
        $this->telPersonne = $telPersonne;
        return $this;
    }
}
