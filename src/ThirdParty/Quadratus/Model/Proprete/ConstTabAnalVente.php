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
 * Const tab anal vente.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ConstTabAnalVente {

    /**
     * Code anal article.
     *
     * @var string
     */
    private $codeAnalArticle;

    /**
     * Code anal client.
     *
     * @var string
     */
    private $codeAnalClient;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code anal article.
     *
     * @return string Returns the code anal article.
     */
    public function getCodeAnalArticle() {
        return $this->codeAnalArticle;
    }

    /**
     * Get the code anal client.
     *
     * @return string Returns the code anal client.
     */
    public function getCodeAnalClient() {
        return $this->codeAnalClient;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code anal article.
     *
     * @param string $codeAnalArticle The code anal article.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeAnalArticle($codeAnalArticle) {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }

    /**
     * Set the code anal client.
     *
     * @param string $codeAnalClient The code anal client.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeAnalClient($codeAnalClient) {
        $this->codeAnalClient = $codeAnalClient;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return ConstTabAnalVente Returns this Const tab anal vente.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
