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
 * Code coll creation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCollCreationTrait {

    /**
     * Code coll creation.
     *
     * @var string
     */
    private $codeCollCreation;

    /**
     * Get the code coll creation.
     *
     * @return string Returns the code coll creation.
     */
    public function getCodeCollCreation() {
        return $this->codeCollCreation;
    }

    /**
     * Set the code coll creation.
     *
     * @param string $codeCollCreation The code coll creation.
     */
    public function setCodeCollCreation($codeCollCreation) {
        $this->codeCollCreation = $codeCollCreation;
        return $this;
    }
}
