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
 * Modele br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModeleBrTrait {

    /**
     * Modele br.
     *
     * @var string
     */
    private $modeleBr;

    /**
     * Get the modele br.
     *
     * @return string Returns the modele br.
     */
    public function getModeleBr() {
        return $this->modeleBr;
    }

    /**
     * Set the modele br.
     *
     * @param string $modeleBr The modele br.
     */
    public function setModeleBr($modeleBr) {
        $this->modeleBr = $modeleBr;
        return $this;
    }
}
