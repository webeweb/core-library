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
 * Code honoraire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeHonoraireTrait {

    /**
     * Code honoraire.
     *
     * @var string
     */
    private $codeHonoraire;

    /**
     * Get the code honoraire.
     *
     * @return string Returns the code honoraire.
     */
    public function getCodeHonoraire() {
        return $this->codeHonoraire;
    }

    /**
     * Set the code honoraire.
     *
     * @param string $codeHonoraire The code honoraire.
     */
    public function setCodeHonoraire($codeHonoraire) {
        $this->codeHonoraire = $codeHonoraire;
        return $this;
    }
}
