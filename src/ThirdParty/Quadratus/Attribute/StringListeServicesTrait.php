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
 * Liste services trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeServicesTrait {

    /**
     * Liste services.
     *
     * @var string
     */
    private $listeServices;

    /**
     * Get the liste services.
     *
     * @return string Returns the liste services.
     */
    public function getListeServices() {
        return $this->listeServices;
    }

    /**
     * Set the liste services.
     *
     * @param string $listeServices The liste services.
     */
    public function setListeServices($listeServices) {
        $this->listeServices = $listeServices;
        return $this;
    }
}
