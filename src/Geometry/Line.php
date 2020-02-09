<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Geometry;

/**
 * Line.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Geometry
 */
class Line {

    /**
     * Point "A".
     *
     * @var Point
     */
    private $a;

    /**
     * Point "B".
     *
     * @var Point
     */
    private $b;

    /**
     * Constructor.
     *
     * @param Point $a The point "A".
     * @param Point $b The point "B".
     */
    public function __construct(Point $a = null, Point $b = null) {
        $this->setA($a);
        $this->setB($b);
    }

    /**
     * Distance d = sqrt(a² + b²).
     *
     * @return float Returns the distance.
     */
    public function d() {
        return $this->getB()->d($this->getA());
    }

    /**
     * Degree.
     *
     * @return float Returns the degree.
     */
    public function deg() {
        return $this->getB()->deg($this->getA());
    }

    /**
     * Get the point "A".
     *
     * @return Point Returns the point "A".
     */
    public function getA() {
        return $this->a;
    }

    /**
     * Get the point "B".
     *
     * @return Point Returns the point "B".
     */
    public function getB() {
        return $this->b;
    }

    /**
     * Slope m = (y2 - y1) / (x2 - x1).
     *
     * @return float Returns the slope.
     */
    public function m() {

        return $this->getB()->m($this->getA());
    }

    /**
     * Originally abscissa y = mx + b.
     *
     * @return Point Returns the originally abscissa.
     */
    public function originallyAbscissa() {

        $m = $this->getB()->m($this->getA());
        $b = $this->originallyOrdered()->getY();

        // x = (y - b) / m
        $x = (0 - $b) / $m;

        return new Point($x, 0);
    }

    /**
     * Originally ordered y = mx + b.
     *
     * @return Point Returns the originally ordered.
     */
    public function originallyOrdered() {

        $m  = $this->getB()->m($this->getA());
        $mx = $m * $this->getB()->getX();

        // b = y - mx
        $b = $this->getB()->getY() - $mx;

        return new Point(0, $b);
    }

    /**
     * Radian.
     *
     * @return float Returns the radian.
     */
    public function rad() {
        return $this->getB()->rad($this->getA());
    }

    /**
     * Rotate.
     *
     * @param Point $o The point.
     * @param float $deg The degrees.
     * @return Line Returns the rotated line.
     */
    public function rotate(Point $o, $deg) {

        $a2 = $this->getA()->rotate($o, $deg);
        $b2 = $this->getB()->rotate($o, $deg);

        return new Line($a2, $b2);
    }

    /**
     * Set the point "A".
     *
     * @param Point $a The point "A".
     * @return Line Returns this line.
     */
    public function setA(Point $a = null) {
        $this->a = $a;
        return $this;
    }

    /**
     * Set the point "B".
     *
     * @param Point $b The point "B".
     * @return Line Returns this line.
     */
    public function setB(Point $b = null) {
        $this->b = $b;
        return $this;
    }
}
