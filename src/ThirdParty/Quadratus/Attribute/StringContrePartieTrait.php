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
 * Contre partie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContrePartieTrait {

    /**
     * Contre partie.
     *
     * @var string
     */
    private $contrePartie;

    /**
     * Get the contre partie.
     *
     * @return string Returns the contre partie.
     */
    public function getContrePartie() {
        return $this->contrePartie;
    }

    /**
     * Set the contre partie.
     *
     * @param string $contrePartie The contre partie.
     */
    public function setContrePartie($contrePartie) {
        $this->contrePartie = $contrePartie;
        return $this;
    }
}
