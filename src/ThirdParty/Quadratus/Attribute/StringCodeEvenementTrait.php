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
 * Code evenement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeEvenementTrait {

    /**
     * Code evenement.
     *
     * @var string
     */
    private $codeEvenement;

    /**
     * Get the code evenement.
     *
     * @return string Returns the code evenement.
     */
    public function getCodeEvenement() {
        return $this->codeEvenement;
    }

    /**
     * Set the code evenement.
     *
     * @param string $codeEvenement The code evenement.
     */
    public function setCodeEvenement($codeEvenement) {
        $this->codeEvenement = $codeEvenement;
        return $this;
    }
}
