<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

/**
 * Article variantes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ArticleVariantes {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code barre.
     *
     * @var string
     */
    private $codeBarre;

    /**
     * Code variante.
     *
     * @var string
     */
    private $codeVariante;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

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
     * Get the code barre.
     *
     * @return string Returns the code barre.
     */
    public function getCodeBarre() {
        return $this->codeBarre;
    }

    /**
     * Get the code variante.
     *
     * @return string Returns the code variante.
     */
    public function getCodeVariante() {
        return $this->codeVariante;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArticleVariantes Returns this article variantes.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param string $codeBarre The code barre.
     * @return ArticleVariantes Returns this article variantes.
     */
    public function setCodeBarre($codeBarre) {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code variante.
     *
     * @param string $codeVariante The code variante.
     * @return ArticleVariantes Returns this article variantes.
     */
    public function setCodeVariante($codeVariante) {
        $this->codeVariante = $codeVariante;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ArticleVariantes Returns this article variantes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

}
