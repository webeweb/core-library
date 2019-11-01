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
 * Code affaire ligne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAffaireLigneTrait {

    /**
     * Code affaire ligne.
     *
     * @var string
     */
    private $codeAffaireLigne;

    /**
     * Get the code affaire ligne.
     *
     * @return string Returns the code affaire ligne.
     */
    public function getCodeAffaireLigne() {
        return $this->codeAffaireLigne;
    }

    /**
     * Set the code affaire ligne.
     *
     * @param string $codeAffaireLigne The code affaire ligne.
     */
    public function setCodeAffaireLigne($codeAffaireLigne) {
        $this->codeAffaireLigne = $codeAffaireLigne;
        return $this;
    }
}
