<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Serializer;

use WBW\Library\XmlTv\Model\Actor;
use WBW\Library\XmlTv\Model\Adapter;
use WBW\Library\XmlTv\Model\Aspect;
use WBW\Library\XmlTv\Model\Audio;
use WBW\Library\XmlTv\Model\Category;
use WBW\Library\XmlTv\Model\Channel;
use WBW\Library\XmlTv\Model\Colour;
use WBW\Library\XmlTv\Model\Commentator;
use WBW\Library\XmlTv\Model\Composer;
use WBW\Library\XmlTv\Model\Country;
use WBW\Library\XmlTv\Model\Credits;
use WBW\Library\XmlTv\Model\Date;
use WBW\Library\XmlTv\Model\Desc;
use WBW\Library\XmlTv\Model\Director;
use WBW\Library\XmlTv\Model\DisplayName;
use WBW\Library\XmlTv\Model\Editor;
use WBW\Library\XmlTv\Model\EpisodeNum;
use WBW\Library\XmlTv\Model\Guest;
use WBW\Library\XmlTv\Model\Icon;
use WBW\Library\XmlTv\Model\Keyword;
use WBW\Library\XmlTv\Model\Language;
use WBW\Library\XmlTv\Model\LastChance;
use WBW\Library\XmlTv\Model\Length;
use WBW\Library\XmlTv\Model\OrigLanguage;
use WBW\Library\XmlTv\Model\Premiere;
use WBW\Library\XmlTv\Model\Present;
use WBW\Library\XmlTv\Model\Presenter;
use WBW\Library\XmlTv\Model\PreviouslyShown;
use WBW\Library\XmlTv\Model\Producer;
use WBW\Library\XmlTv\Model\Programme;
use WBW\Library\XmlTv\Model\Quality;
use WBW\Library\XmlTv\Model\Rating;
use WBW\Library\XmlTv\Model\Review;
use WBW\Library\XmlTv\Model\SecondaryTitle;
use WBW\Library\XmlTv\Model\StarRating;
use WBW\Library\XmlTv\Model\Stereo;
use WBW\Library\XmlTv\Model\Subtitles;
use WBW\Library\XmlTv\Model\Title;
use WBW\Library\XmlTv\Model\Tv;
use WBW\Library\XmlTv\Model\Url;
use WBW\Library\XmlTv\Model\Value;
use WBW\Library\XmlTv\Model\Video;
use WBW\Library\XmlTv\Model\Writer;
use WBW\Library\XmlTv\Serializer\XmlDeserializer;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * XML deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Serializer
 */
class XmlDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeActor()
     *
     * @return void
     */
    public function testDeserializeActor(): void {

        // tv > programme > credits > actor
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeActor($node);
        $this->assertInstanceOf(Actor::class, $res);

        $this->assertEquals("role", $res->getRole());
        $this->assertEquals("Actor", $res->getContent());
    }

    /**
     * Test deserializeAdapter()
     *
     * @return void
     */
    public function testDeserializeAdapter(): void {

        // tv > programme > credits > adapter
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(7);

        $res = XmlDeserializer::deserializeAdapter($node);
        $this->assertInstanceOf(Adapter::class, $res);

        $this->assertEquals("Adapter", $res->getContent());
    }

    /**
     * Test deserializeAspect()
     *
     * @return void
     */
    public function testDeserializeAspect(): void {

        // tv > programme > video > aspect
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(29)
            ->childNodes->item(5);

        $res = XmlDeserializer::deserializeAspect($node);
        $this->assertInstanceOf(Aspect::class, $res);

        $this->assertEquals("Aspect", $res->getContent());
    }

    /**
     * Test deserializeAudio()
     *
     * @return void
     */
    public function testDeserializeAudio(): void {

        // tv > programme > audio
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(31);

        $res = XmlDeserializer::deserializeAudio($node);
        $this->assertInstanceOf(Audio::class, $res);

        $this->assertInstanceOf(Present::class, $res->getPresent());
        $this->assertInstanceOf(Stereo::class, $res->getStereo());
    }

    /**
     * Test deserializeCategory()
     *
     * @return void
     */
    public function testDeserializeCategory(): void {

        // tv > programme > category
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(11);

        $res = XmlDeserializer::deserializeCategory($node);
        $this->assertInstanceOf(Category::class, $res);

        $this->assertEquals("category-lang", $res->getLang());
        $this->assertEquals("Category", $res->getContent());
    }

    /**
     * Test deserializeChannel()
     *
     * @return void
     */
    public function testDeserializeChannel(): void {

        // tv > channel
        $node = $this->document->documentElement
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializeChannel($node);
        $this->assertInstanceOf(Channel::class, $res);

        $this->assertInstanceOf(DisplayName::class, $res->getDisplayNames()[0]);
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
        $this->assertInstanceOf(Url::class, $res->getUrls()[0]);
    }

    /**
     * Test deserializeColour()
     *
     * @return void
     */
    public function testDeserializeColour(): void {

        // tv > programme > video > colour
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(29)
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeColour($node);
        $this->assertInstanceOf(Colour::class, $res);

        $this->assertEquals("Colour", $res->getContent());
    }

    /**
     * Test deserializeCommentator()
     *
     * @return void
     */
    public function testDeserializeCommentator(): void {

        // tv > programme > credits > commentator
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(17);

        $res = XmlDeserializer::deserializeCommentator($node);
        $this->assertInstanceOf(Commentator::class, $res);

        $this->assertEquals("Commentator", $res->getContent());
    }

    /**
     * Test deserializeComposer()
     *
     * @return void
     */
    public function testDeserializeComposer(): void {

        // tv > programme > credits > composer
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(11);

        $res = XmlDeserializer::deserializeComposer($node);
        $this->assertInstanceOf(Composer::class, $res);

        $this->assertEquals("Composer", $res->getContent());
    }

    /**
     * Test deserializeCountry()
     *
     * @return void
     */
    public function testDeserializeCountry(): void {

        // tv > programme > country
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(25);

        $res = XmlDeserializer::deserializeCountry($node);
        $this->assertInstanceOf(Country::class, $res);

        $this->assertEquals("country-lang", $res->getLang());
        $this->assertEquals("Country", $res->getContent());
    }

    /**
     * Test deserializeCredits()
     *
     * @return void
     */
    public function testDeserializeCredits(): void {

        // tv > programme > credits
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7);

        $res = XmlDeserializer::deserializeCredits($node);
        $this->assertInstanceOf(Credits::class, $res);

        $this->assertInstanceOf(Director::class, $res->getDirectors()[0]);
        $this->assertInstanceOf(Actor::class, $res->getActors()[0]);
        $this->assertInstanceOf(Writer::class, $res->getWriters()[0]);
        $this->assertInstanceOf(Adapter::class, $res->getAdapters()[0]);
        $this->assertInstanceOf(Producer::class, $res->getProducers()[0]);
        $this->assertInstanceOf(Composer::class, $res->getComposers()[0]);
        $this->assertInstanceOf(Editor::class, $res->getEditors()[0]);
        $this->assertInstanceOf(Presenter::class, $res->getPresenters()[0]);
        $this->assertInstanceOf(Commentator::class, $res->getCommentators()[0]);
        $this->assertInstanceOf(Guest::class, $res->getGuests()[0]);
    }

    /**
     * Test deserializeDate()
     *
     * @return void
     */
    public function testDeserializeDate(): void {

        // tv > programme > date
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(9);

        $res = XmlDeserializer::deserializeDate($node);
        $this->assertInstanceOf(Date::class, $res);

        $this->assertEquals(1970, $res->getContent());
    }

    /**
     * Test deserializeDesc()
     *
     * @return void
     */
    public function testDeserializeDesc(): void {

        // tv > programme > desc
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(5);

        $res = XmlDeserializer::deserializeDesc($node);
        $this->assertInstanceOf(Desc::class, $res);

        $this->assertEquals("desc-lang", $res->getLang());
        $this->assertEquals("Desc", $res->getContent());
    }

    /**
     * Test deserializeDirector()
     *
     * @return void
     */
    public function testDeserializeDirector(): void {

        // tv > programme > credits > director
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializeDirector($node);
        $this->assertInstanceOf(Director::class, $res);

        $this->assertEquals("Director", $res->getContent());
    }

    /**
     * Test deserializeDisplayName()
     *
     * @return void
     */
    public function testDeserializeDisplayName(): void {

        // tv > channel > display-name
        $node = $this->document->documentElement
            ->childNodes->item(1)
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializeDisplayName($node);
        $this->assertInstanceOf(DisplayName::class, $res);

        $this->assertEquals("display-name-lang", $res->getLang());
        $this->assertEquals("Display name", $res->getContent());
    }

    /**
     * Test deserializeEditor()
     *
     * @return void
     */
    public function testDeserializeEditor(): void {

        // tv > programme > credits > editor
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(13);

        $res = XmlDeserializer::deserializeEditor($node);
        $this->assertInstanceOf(Editor::class, $res);

        $this->assertEquals("Editor", $res->getContent());
    }

    /**
     * Test deserializeEpisodeNum()
     *
     * @return void
     */
    public function testDeserializeEpisodeNum(): void {

        // tv > programme > episode-num
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(27);

        $res = XmlDeserializer::deserializeEpisodeNum($node);
        $this->assertInstanceOf(EpisodeNum::class, $res);

        $this->assertEquals("onscreen", $res->getSystem());
        $this->assertEquals("Episode num", $res->getContent());
    }

    /**
     * Test deserializeGuest()
     *
     * @return void
     */
    public function testDeserializeGuest(): void {

        // tv > programme > credits > guest
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(19);

        $res = XmlDeserializer::deserializeGuest($node);
        $this->assertInstanceOf(Guest::class, $res);

        $this->assertEquals("Guest", $res->getContent());
    }

    /**
     * Test deserializeIcon()
     *
     * @return void
     */
    public function testDeserializeIcon(): void {

        // tv > channel > icon
        $node = $this->document->documentElement
            ->childNodes->item(1)
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeIcon($node);
        $this->assertInstanceOf(Icon::class, $res);

        $this->assertEquals("src", $res->getSrc());
        $this->assertEquals(1920, $res->getWidth());
        $this->assertEquals(1080, $res->getHeight());
    }

    /**
     * Test deserializeKeyword()
     *
     * @return void
     */
    public function testDeserializeKeyword(): void {

        // tv > programme > keyword
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(13);

        $res = XmlDeserializer::deserializeKeyword($node);
        $this->assertInstanceOf(Keyword::class, $res);

        $this->assertEquals("keyword-lang", $res->getLang());
        $this->assertEquals("Keyword", $res->getContent());
    }

    /**
     * Test deserializeLanguage()
     *
     * @return void
     */
    public function testDeserializeLanguage(): void {

        // tv > programme > language
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(15);

        $res = XmlDeserializer::deserializeLanguage($node);
        $this->assertInstanceOf(Language::class, $res);

        $this->assertEquals("language-lang", $res->getLang());
        $this->assertEquals("Language", $res->getContent());
    }

    /**
     * Test deserializeLastChance()
     *
     * @return void
     */
    public function testDeserializeLastChance(): void {

        // tv > programme > last-chance
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(37);

        $res = XmlDeserializer::deserializeLastChance($node);
        $this->assertInstanceOf(LastChance::class, $res);

        $this->assertEquals("last-chance-lang", $res->getLang());
        $this->assertEquals("Last chance", $res->getContent());
    }

    /**
     * Test deserializeLength()
     *
     * @return void
     */
    public function testDeserializeLength(): void {

        // tv > programme > length
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(19);

        $res = XmlDeserializer::deserializeLength($node);
        $this->assertInstanceOf(Length::class, $res);

        $this->assertEquals("minutes", $res->getUnits());
        $this->assertEquals(90, $res->getContent());
    }

    /**
     * Test deserializeOrigLanguage()
     *
     * @return void
     */
    public function testDeserializeOrigLanguage(): void {

        // tv > programme > orig-language
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(17);

        $res = XmlDeserializer::deserializeOrigLanguage($node);
        $this->assertInstanceOf(OrigLanguage::class, $res);

        $this->assertEquals("orig-language-lang", $res->getLang());
        $this->assertEquals("Orig language", $res->getContent());
    }

    /**
     * Test deserializePremiere()
     *
     * @return void
     */
    public function testDeserializePremiere(): void {

        // tv > programme > premiere
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(35);

        $res = XmlDeserializer::deserializePremiere($node);
        $this->assertInstanceOf(Premiere::class, $res);

        $this->assertEquals("premiere-lang", $res->getLang());
        $this->assertEquals("Premiere", $res->getContent());
    }

    /**
     * Test deserializePresent()
     *
     * @return void
     */
    public function testDeserializePresent(): void {

        // tv > programme > video > present
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(29)
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializePresent($node);
        $this->assertInstanceOf(Present::class, $res);

        $this->assertEquals("Present", $res->getContent());
    }

    /**
     * Test deserializePresenter()
     *
     * @return void
     */
    public function testDeserializePresenter(): void {

        // tv > programme > credits > presenter
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(15);

        $res = XmlDeserializer::deserializePresenter($node);
        $this->assertInstanceOf(Presenter::class, $res);

        $this->assertEquals("Presenter", $res->getContent());
    }

    /**
     * Test deserializePreviouslyShown()
     *
     * @return void
     */
    public function testDeserializePreviouslyShown(): void {

        // tv > programme > previously-shown
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(33);

        $res = XmlDeserializer::deserializePreviouslyShown($node);
        $this->assertInstanceOf(PreviouslyShown::class, $res);

        $this->assertEquals("channel-id", $res->getChannel());
        $this->assertEquals("previously-shown-start", $res->getStart());
    }

    /**
     * Test deserializeProducer()
     *
     * @return void
     */
    public function testDeserializeProducer(): void {

        // tv > programme > credits > producer
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(9);

        $res = XmlDeserializer::deserializeProducer($node);
        $this->assertInstanceOf(Producer::class, $res);

        $this->assertEquals("Producer", $res->getContent());
    }

    /**
     * Test deserializeProgramme()
     *
     * @return void
     */
    public function testDeserializeProgramme(): void {

        // tv > programme
        $node = $this->document->documentElement
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeProgramme($node);
        $this->assertInstanceOf(Programme::class, $res);

        $this->assertEquals("20190730200000 +0200", $res->getStart());
        $this->assertEquals("20190730220000 +0200", $res->getStop());
        $this->assertEquals("20190730200000 +0100", $res->getPdcStart());
        $this->assertEquals("20190730200000 -0100", $res->getVpsStart());
        $this->assertEquals("showview", $res->getShowView());
        $this->assertEquals("videoplus", $res->getVideoPlus());
        $this->assertEquals("channel-id", $res->getChannel());
        $this->assertEquals("clumpidx", $res->getClumpIdx());
        $this->assertInstanceOf(Title::class, $res->getTitles()[0]);
        $this->assertInstanceOf(SecondaryTitle::class, $res->getSecondaryTitles()[0]);
        $this->assertInstanceOf(Desc::class, $res->getDescs()[0]);
        $this->assertInstanceOf(Credits::class, $res->getCredits());
        $this->assertInstanceOf(Date::class, $res->getDate());
        $this->assertInstanceOf(Category::class, $res->getCategories()[0]);
        $this->assertInstanceOf(Keyword::class, $res->getKeywords()[0]);
        $this->assertInstanceOf(Language::class, $res->getLanguage());
        $this->assertInstanceOf(OrigLanguage::class, $res->getOrigLanguage());
        $this->assertInstanceOf(Length::class, $res->getLength());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
        $this->assertInstanceOf(Url::class, $res->getUrls()[0]);
        $this->assertCount(1, $res->getCountries());
        $this->assertInstanceOf(Country::class, $res->getCountries()[0]);
        $this->assertInstanceOf(EpisodeNum::class, $res->getEpisodeNums()[0]);
        $this->assertInstanceOf(Video::class, $res->getVideo());
        $this->assertInstanceOf(Audio::class, $res->getAudio());
        $this->assertInstanceOf(PreviouslyShown::class, $res->getPreviouslyShown());
        $this->assertInstanceOf(Premiere::class, $res->getPremiere());
        $this->assertInstanceOf(LastChance::class, $res->getLastChance());
        $this->assertTrue($res->getNew());
        $this->assertInstanceOf(Subtitles::class, $res->getSubtitles()[0]);
        $this->assertInstanceOf(Rating::class, $res->getRatings()[0]);
        $this->assertInstanceOf(StarRating::class, $res->getStarRatings()[0]);
        $this->assertInstanceOf(Review::class, $res->getReviews()[0]);
    }

    /**
     * Test deserializeQuality()
     *
     * @return void
     */
    public function testDeserializeQuality(): void {

        // tv > programme > video > quality
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(29)
            ->childNodes->item(7);

        $res = XmlDeserializer::deserializeQuality($node);
        $this->assertInstanceOf(Quality::class, $res);

        $this->assertEquals("Quality", $res->getContent());
    }

    /**
     * Test deserializeRating()
     *
     * @return void
     */
    public function testDeserializeRating(): void {

        // tv > programme > rating
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(43);

        $res = XmlDeserializer::deserializeRating($node);
        $this->assertInstanceOf(Rating::class, $res);

        $this->assertEquals("rating-system", $res->getSystem());
        $this->assertInstanceOf(Value::class, $res->getValue());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
    }

    /**
     * Test deserializeReview()
     *
     * @return void
     */
    public function testDeserializeReview(): void {

        // tv > programme > review
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(47);

        $res = XmlDeserializer::deserializeReview($node);
        $this->assertInstanceOf(Review::class, $res);

        $this->assertEquals("text", $res->getType());
        $this->assertEquals("source", $res->getSource());
        $this->assertEquals("reviewer", $res->getReviewer());
        $this->assertEquals("review-lang", $res->getLang());
    }

    /**
     * Test deserializeSecondaryTitle()
     *
     * @return void
     */
    public function testDeserializeSecondaryTitle(): void {

        // tv > programme > sub-title
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeSecondaryTitle($node);
        $this->assertInstanceOf(SecondaryTitle::class, $res);

        $this->assertEquals("secondary-title-lang", $res->getLang());
        $this->assertEquals("Secondary title", $res->getContent());
    }

    /**
     * Test deserializeStarRating()
     *
     * @return void
     */
    public function testDeserializeStarRating(): void {

        // tv > programme > star-rating
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(45);

        $res = XmlDeserializer::deserializeStarRating($node);
        $this->assertInstanceOf(StarRating::class, $res);

        $this->assertInstanceOf(Value::class, $res->getValue());
        $this->assertInstanceOf(Icon::class, $res->getIcons()[0]);
    }

    /**
     * Test deserializeStereo()
     *
     * @return void
     */
    public function testDeserializeStereo(): void {

        // tv > programme > audio > stereo
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(31)
            ->childNodes->item(3);

        $res = XmlDeserializer::deserializeStereo($node);
        $this->assertInstanceOf(Stereo::class, $res);

        $this->assertEquals("Stereo", $res->getContent());
    }

    /**
     * Test deserializeSubtitles()
     *
     * @return void
     */
    public function testDeserializeSubtitles(): void {

        // tv > programme > subtitles
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(41);

        $res = XmlDeserializer::deserializeSubtitles($node);
        $this->assertInstanceOf(Subtitles::class, $res);

        $this->assertEquals("deaf-signed", $res->getType());
        $this->assertInstanceOf(Language::class, $res->getLanguage());
    }

    /**
     * Test deserializeTitle()
     *
     * @return void
     */
    public function testDeserializeTitle(): void {

        // tv > programme > title
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializeTitle($node);
        $this->assertInstanceOf(Title::class, $res);

        $this->assertEquals("title-lang", $res->getLang());
        $this->assertEquals("Title", $res->getContent());
    }

    /**
     * Test deserializeTv()
     *
     * @return void
     */
    public function testDeserializeTv(): void {

        // tv
        $node = $this->document->documentElement;

        $res = XmlDeserializer::deserializeTv($node);
        $this->assertInstanceOf(Tv::class, $res);

        $this->assertEquals("date", $res->getDate());
        $this->assertEquals("generator-info-name", $res->getGeneratorInfoName());
        $this->assertEquals("generator-info-url", $res->getGeneratorInfoUrl());
        $this->assertEquals("source-data-url", $res->getSourceDataUrl());
        $this->assertEquals("source-info-name", $res->getSourceInfoName());
        $this->assertEquals("source-info-url", $res->getSourceInfoUrl());
        $this->assertInstanceOf(Channel::class, $res->getChannels()[0]);
        $this->assertInstanceOf(Programme::class, $res->getProgrammes()[0]);
    }

    /**
     * Test deserializeUrl()
     *
     * @return void
     */
    public function testDeserializeUrl(): void {

        // tv > channel > url
        $node = $this->document->documentElement
            ->childNodes->item(1)
            ->childNodes->item(5);

        $res = XmlDeserializer::deserializeUrl($node);
        $this->assertInstanceOf(Url::class, $res);

        $this->assertEquals("URL", $res->getContent());
    }

    /**
     * Test deserializeValue()
     *
     * @return void
     */
    public function testDeserializeValue(): void {

        // tv > programme > rating > value
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(43)
            ->childNodes->item(1);

        $res = XmlDeserializer::deserializeValue($node);
        $this->assertInstanceOf(Value::class, $res);

        $this->assertEquals("Value", $res->getContent());
    }

    /**
     * Test deserializeVideo()
     *
     * @return void
     */
    public function testDeserializeVideo(): void {

        // tv > programme > video
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(29);

        $res = XmlDeserializer::deserializeVideo($node);
        $this->assertInstanceOf(Video::class, $res);

        $this->assertInstanceOf(Present::class, $res->getPresent());
        $this->assertInstanceOf(Colour::class, $res->getColour());
        $this->assertInstanceOf(Aspect::class, $res->getAspect());
        $this->assertInstanceOf(Quality::class, $res->getQuality());
    }

    /**
     * Test deserializeWriter()
     *
     * @return void
     */
    public function testDeserializeWriter(): void {

        // tv > programme > credits > writer
        $node = $this->document->documentElement
            ->childNodes->item(3)
            ->childNodes->item(7)
            ->childNodes->item(5);

        $res = XmlDeserializer::deserializeWriter($node);
        $this->assertInstanceOf(Writer::class, $res);

        $this->assertEquals("Writer", $res->getContent());
    }
}
