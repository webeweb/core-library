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
 * Mdp impots gouv fr trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMdpImpotsGouvFrTrait {

    /**
     * Mdp impots gouv fr.
     *
     * @var string
     */
    private $mdpImpotsGouvFr;

    /**
     * Get the mdp impots gouv fr.
     *
     * @return string Returns the mdp impots gouv fr.
     */
    public function getMdpImpotsGouvFr() {
        return $this->mdpImpotsGouvFr;
    }

    /**
     * Set the mdp impots gouv fr.
     *
     * @param string $mdpImpotsGouvFr The mdp impots gouv fr.
     */
    public function setMdpImpotsGouvFr($mdpImpotsGouvFr) {
        $this->mdpImpotsGouvFr = $mdpImpotsGouvFr;
        return $this;
    }
}
