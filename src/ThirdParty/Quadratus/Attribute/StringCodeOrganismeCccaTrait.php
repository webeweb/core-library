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
 * Code organisme ccca trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOrganismeCccaTrait {

    /**
     * Code organisme ccca.
     *
     * @var string
     */
    private $codeOrganismeCcca;

    /**
     * Get the code organisme ccca.
     *
     * @return string Returns the code organisme ccca.
     */
    public function getCodeOrganismeCcca() {
        return $this->codeOrganismeCcca;
    }

    /**
     * Set the code organisme ccca.
     *
     * @param string $codeOrganismeCcca The code organisme ccca.
     */
    public function setCodeOrganismeCcca($codeOrganismeCcca) {
        $this->codeOrganismeCcca = $codeOrganismeCcca;
        return $this;
    }
}
