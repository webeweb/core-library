<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Filtre lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class FiltreLignes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Uniq i d.
     *
     * @var string
     */
    private $uniqID;

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
     * Get the uniq i d.
     *
     * @return string Returns the uniq i d.
     */
    public function getUniqID() {
        return $this->uniqID;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return FiltreLignes Returns this filtre lignes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the uniq i d.
     *
     * @param string $uniqID The uniq i d.
     * @return FiltreLignes Returns this filtre lignes.
     */
    public function setUniqID($uniqID) {
        $this->uniqID = $uniqID;
        return $this;
    }
}
