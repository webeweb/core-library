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
 * Inventaire trame.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class InventaireTrame {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code trame.
     *
     * @var string
     */
    private $codeTrame;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code trame.
     *
     * @return string Returns the code trame.
     */
    public function getCodeTrame() {
        return $this->codeTrame;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code trame.
     *
     * @param string $codeTrame The code trame.
     */
    public function setCodeTrame($codeTrame) {
        $this->codeTrame = $codeTrame;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }
}
