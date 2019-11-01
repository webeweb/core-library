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
 * Calcul ana fait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCalculAnaFaitTrait {

    /**
     * Calcul ana fait.
     *
     * @var bool
     */
    private $calculAnaFait;

    /**
     * Get the calcul ana fait.
     *
     * @return bool Returns the calcul ana fait.
     */
    public function getCalculAnaFait() {
        return $this->calculAnaFait;
    }

    /**
     * Set the calcul ana fait.
     *
     * @param bool $calculAnaFait The calcul ana fait.
     */
    public function setCalculAnaFait($calculAnaFait) {
        $this->calculAnaFait = $calculAnaFait;
        return $this;
    }
}
