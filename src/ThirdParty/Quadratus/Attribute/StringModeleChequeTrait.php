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
 * Modele cheque trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleChequeTrait {

    /**
     * Modele cheque.
     *
     * @var string
     */
    private $modeleCheque;

    /**
     * Get the modele cheque.
     *
     * @return string Returns the modele cheque.
     */
    public function getModeleCheque() {
        return $this->modeleCheque;
    }

    /**
     * Set the modele cheque.
     *
     * @param string $modeleCheque The modele cheque.
     */
    public function setModeleCheque($modeleCheque) {
        $this->modeleCheque = $modeleCheque;
        return $this;
    }
}
