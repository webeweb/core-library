<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Chapitres documents model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class ChapitresDocuments {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Nom repertoire.
     *
     * @var string
     */
    private $nomRepertoire;

    /**
     * Position.
     *
     * @var int
     */
    private $position;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Get the nom repertoire.
     *
     * @return string Returns the nom repertoire.
     */
    public function getNomRepertoire() {
        return $this->nomRepertoire;
    }

    /**
     * Get the position.
     *
     * @return int Returns the position.
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return ChapitresDocuments Returns this chapitres documents.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the nom repertoire.
     *
     * @param string $nomRepertoire The nom repertoire.
     * @return ChapitresDocuments Returns this chapitres documents.
     */
    public function setNomRepertoire($nomRepertoire) {
        $this->nomRepertoire = $nomRepertoire;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int $position The position.
     * @return ChapitresDocuments Returns this chapitres documents.
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

}
