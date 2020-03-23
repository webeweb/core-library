<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\OcrLad\Model;

use WBW\Library\Core\Geometry\Point;
use WBW\Library\Core\Model\Attribute\StringContentTrait;
use WBW\Library\Core\Model\Attribute\StringTypeTrait;

/**
 * Word.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\ThirdParty\OcrLad\Model
 */
class Word {

    use StringContentTrait;
    use StringTypeTrait;

    /**
     * OCR confidence.
     *
     * @var float
     */
    private $ocrConfidence;

    /**
     * Point 1.
     *
     * @var Point
     */
    private $point1;

    /**
     * Point 2.
     *
     * @var Point
     */
    private $point2;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setPoint1(new Point());
        $this->setPoint2(new Point());
    }

    /**
     * Get the OCR confidence.
     *
     * @return float Returns the OCR confidence.
     */
    public function getOcrConfidence() {
        return $this->ocrConfidence;
    }

    /**
     * Get the point 1.
     *
     * @return Point Returns the point 1
     */
    public function getPoint1() {
        return $this->point1;
    }

    /**
     * Get the point 2.
     *
     * @return Point Returns the point 2.
     */
    public function getPoint2() {
        return $this->point2;
    }

    /**
     * Get the X1.
     *
     * @return float Returns the X1.
     */
    public function getX1() {
        return $this->getPoint1()->getX();
    }

    /**
     * Get the X2.
     *
     * @return float Returns the X2.
     */
    public function getX2() {
        return $this->getPoint2()->getX();
    }

    /**
     * Get the Y1.
     *
     * @return float Returns the Y1.
     */
    public function getY1() {
        return $this->getPoint1()->getY();
    }

    /**
     * Get the Y2.
     *
     * @return float Returns the Y2.
     */
    public function getY2() {
        return $this->getPoint2()->getY();
    }

    /**
     * Set the OCR confidence.
     *
     * @param float $ocrConfidence The OCR confidence.
     * @return Word Returns this word.
     */
    public function setOcrConfidence($ocrConfidence) {
        $this->ocrConfidence = $ocrConfidence;
        return $this;
    }

    /**
     * Set the point 1.
     *
     * @param Point $point1 The point 1.
     * @return Word Returns this word.
     */
    protected function setPoint1(Point $point1) {
        $this->point1 = $point1;
        return $this;
    }

    /**
     * Set the point 2.
     *
     * @param Point $point2 The point 2.
     * @return Word Returns this word.
     */
    protected function setPoint2(Point $point2) {
        $this->point2 = $point2;
        return $this;
    }

    /**
     * Set the X1.
     *
     * @param float $x1 The X1.
     * @return Word Returns this word.
     */
    public function setX1($x1) {
        $this->getPoint1()->setX($x1);
        return $this;
    }

    /**
     * Set the X2.
     *
     * @param float $x2 The X2.
     * @return Word Returns this word.
     */
    public function setX2($x2) {
        $this->getPoint2()->setX($x2);
        return $this;
    }

    /**
     * Set the Y1.
     *
     * @param float $y1 The Y1.
     * @return Word Returns this word.
     */
    public function setY1($y1) {
        $this->getPoint1()->setY($y1);
        return $this;
    }

    /**
     * Set the Y2.
     *
     * @param float $y2 The Y2.
     * @return Word Returns this word.
     */
    public function setY2($y2) {
        $this->getPoint2()->setY($y2);
        return $this;
    }
}