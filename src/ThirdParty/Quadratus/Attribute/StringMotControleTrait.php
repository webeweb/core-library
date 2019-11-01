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
 * Mot controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotControleTrait {

    /**
     * Mot controle.
     *
     * @var string
     */
    private $motControle;

    /**
     * Get the mot controle.
     *
     * @return string Returns the mot controle.
     */
    public function getMotControle() {
        return $this->motControle;
    }

    /**
     * Set the mot controle.
     *
     * @param string $motControle The mot controle.
     */
    public function setMotControle($motControle) {
        $this->motControle = $motControle;
        return $this;
    }
}
