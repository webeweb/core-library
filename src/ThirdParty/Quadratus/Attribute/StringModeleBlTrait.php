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
 * Modele bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleBlTrait {

    /**
     * Modele bl.
     *
     * @var string
     */
    private $modeleBl;

    /**
     * Get the modele bl.
     *
     * @return string Returns the modele bl.
     */
    public function getModeleBl() {
        return $this->modeleBl;
    }

    /**
     * Set the modele bl.
     *
     * @param string $modeleBl The modele bl.
     */
    public function setModeleBl($modeleBl) {
        $this->modeleBl = $modeleBl;
        return $this;
    }
}
