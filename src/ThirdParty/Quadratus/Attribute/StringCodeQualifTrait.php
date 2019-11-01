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
 * Code qualif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeQualifTrait {

    /**
     * Code qualif.
     *
     * @var string
     */
    private $codeQualif;

    /**
     * Get the code qualif.
     *
     * @return string Returns the code qualif.
     */
    public function getCodeQualif() {
        return $this->codeQualif;
    }

    /**
     * Set the code qualif.
     *
     * @param string $codeQualif The code qualif.
     */
    public function setCodeQualif($codeQualif) {
        $this->codeQualif = $codeQualif;
        return $this;
    }
}
