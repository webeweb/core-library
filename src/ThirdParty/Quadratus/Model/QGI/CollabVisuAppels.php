<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Collab visu appels.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class CollabVisuAppels {

    /**
     * Code collab.
     *
     * @var string
     */
    private $codeCollab;

    /**
     * Code collab visu.
     *
     * @var string
     */
    private $codeCollabVisu;

    /**
     * Type code.
     *
     * @var string
     */
    private $typeCode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collab.
     *
     * @return string Returns the code collab.
     */
    public function getCodeCollab() {
        return $this->codeCollab;
    }

    /**
     * Get the code collab visu.
     *
     * @return string Returns the code collab visu.
     */
    public function getCodeCollabVisu() {
        return $this->codeCollabVisu;
    }

    /**
     * Get the type code.
     *
     * @return string Returns the type code.
     */
    public function getTypeCode() {
        return $this->typeCode;
    }

    /**
     * Set the code collab.
     *
     * @param string $codeCollab The code collab.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setCodeCollab($codeCollab) {
        $this->codeCollab = $codeCollab;
        return $this;
    }

    /**
     * Set the code collab visu.
     *
     * @param string $codeCollabVisu The code collab visu.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setCodeCollabVisu($codeCollabVisu) {
        $this->codeCollabVisu = $codeCollabVisu;
        return $this;
    }

    /**
     * Set the type code.
     *
     * @param string $typeCode The type code.
     * @return CollabVisuAppels Returns this Collab visu appels.
     */
    public function setTypeCode($typeCode) {
        $this->typeCode = $typeCode;
        return $this;
    }
}
