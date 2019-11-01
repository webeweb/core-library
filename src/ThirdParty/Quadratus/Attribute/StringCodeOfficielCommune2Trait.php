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
 * Code officiel commune2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOfficielCommune2Trait {

    /**
     * Code officiel commune2.
     *
     * @var string
     */
    private $codeOfficielCommune2;

    /**
     * Get the code officiel commune2.
     *
     * @return string Returns the code officiel commune2.
     */
    public function getCodeOfficielCommune2() {
        return $this->codeOfficielCommune2;
    }

    /**
     * Set the code officiel commune2.
     *
     * @param string $codeOfficielCommune2 The code officiel commune2.
     */
    public function setCodeOfficielCommune2($codeOfficielCommune2) {
        $this->codeOfficielCommune2 = $codeOfficielCommune2;
        return $this;
    }
}
